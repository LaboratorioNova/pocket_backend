<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\ScheduleConfig;
use App\Models\GlobalScheduleConfig;
use App\Models\BreakfastSchedule;
use App\Models\PhlebotomistSchedule;
use App\Models\SpecialDay;
use App\Models\GlobalZonesPerDay;
use App\Models\Holiday;
use App\Models\OrderState;
use App\Models\Role;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * @group ScheduleConfig
 * 
 * Administración de la configuración del calendario de horarios de atención. 
 * Estos endpoints se encargan de gestionar el horario dee atención por día, 
 * la duración de una cita, y la cantaidad de zonas que se atiende por días. 
 * 
 * También provee información al cliente de los horarios que están disponibles.
 */
class ScheduleConfigController extends Controller
{

    /**
     * index
     * 
     * Obtiene la lista de configuraciones de horarios de las próximas 2 semanas.
     * Esto corresponde a la configuración diaría. 
     * - El horario de atención
     * - La duración de las citas
     * - Las zonas que se atenderán ese día
     */
    public function index() {
        $startDate = Carbon::now();
        $startDate = $startDate->subDay();
        $endDate = $startDate->copy()->addDays(14);

        $records = ScheduleConfig::with("phlebotomistSchedules.user", "breakfastSchedules")->whereBetween(
            "start_date", [$startDate, $endDate]
        )->get();

        return $this->success($records);
    }

    /**
     * create
     * 
     * Crear la configuración de los horarios de las próximas dos semanas
     */
    public function createScheduleConfig() {
        // Obtnener días especiales
        $specialDays = SpecialDay::all();
      
        // Obtener configuración de cantidad de zonas por tipo de día
        $zonesPerDay = GlobalZonesPerDay::get();

        // Obtener los registros de las configuraciones de los horarios de las próximas dos semanas 
        $startDate = Carbon::now()->hour(0)->minute(0)->second(0)->setTimezone("America/Mexico_City");
        $endDate = $startDate->copy()->addDays(15)->subSecond(); // esto hace que sean 14 días en la hora 23:59:59. 
        $scheduleConfigs = ScheduleConfig::whereBetween("start_date", [$startDate, $endDate])->get();

        // Obtener los registros de las configuraciones globales
        $globalScheduleConfigs = GlobalScheduleConfig::all();

        // Hacer un ciclo que tenga 14 iteraciones. Son 14 porque se van a configurar los próximos 14 días
        for ($i = 1; $i < 15; $i++) {
            // Incrementar un día
            $startDate = $startDate->addDay();
            $currentDay = $startDate->isoFormat('dddd');
            $isSpecialDay = false;
            $dayType = "";

            // Comprobar si el día actual es un día especial
            foreach($specialDays as $specialDay) {
                if ($specialDay->date == $startDate->format('d').'-'.$startDate->format('m') ) {
                    $isSpecialDay = true;
                    $dayType = $specialDay->day_type;
                    break;
                }
            }
            
            if(!$isSpecialDay){
                // Comprobar el tipo de día para seleccionar la configuración adecuada
                if ($currentDay == 'Saturday') {
                    $dayType = "Saturday";
                } else if ($currentDay == 'Sunday') {
                    $dayType = "Sunday";
                }else{
                    $dayType = "Weekday";
                }
            }

            // Saber la cantidad de zonas que se atenderán en este día
            $quantityZones = 0;
            foreach($zonesPerDay as $global_zone_per_day) {
                if ($global_zone_per_day->type_day == $dayType) {
                    $quantityZones = $global_zone_per_day->phlebotomist_number_configuration;
                    break;
                }
            }

            // Configuración actual seleccionada
            $currentGlobalSchedule = [];

            // Obtener el registro de la configuración global
            foreach($globalScheduleConfigs as $globalScheduleConfig) {
                if ($globalScheduleConfig->quantity_zones == $quantityZones) {
                    $currentGlobalSchedule = $globalScheduleConfig;
                }
            }

            $dayExists = false;

            // Comprobar si ya existe un registro de la configuración del horario con el día en que nos encontramos en esta iteración
            foreach($scheduleConfigs as $schedule_conf) {
                if (substr($schedule_conf->start_date, 0, 10) == $startDate->toDateString()){
                    $dayExists = true;
                }
            }
    
            // Si no existe un registro de ese día crear uno con la configuración global cargada en la base de datos
            if ($dayExists === true) continue; 

            // Crear un registro con la configuración de un día
            $scheduleConfigData = [
                "appointment_duration" => $currentGlobalSchedule->appointment_duration,
                "start_date" => $startDate->toDateString()." ".$currentGlobalSchedule->start_date,
                "end_date" => $startDate->toDateString()." ".$currentGlobalSchedule->end_date,
                "quantity_zones" => $currentGlobalSchedule->quantity_zones,
            ];

            $scheduleConfig = ScheduleConfig::create($scheduleConfigData);
            
            // Crear horario de comida
            $breakfastData = BreakfastSchedule::create([
                'duration' => $currentGlobalSchedule->global_breakfast_schedules[0]->duration,
                'start_date' => $startDate->toDateString()." ".$currentGlobalSchedule->global_breakfast_schedules[0]->start_date,
                'end_date' => $startDate->toDateString()." ".$currentGlobalSchedule->global_breakfast_schedules[0]->end_date,
                'schedule_config_id' => $scheduleConfig->id
            ]);

            $scheduleConfig->breakfastSchedules = $breakfastData; // Creo que está linea no va

            // Comprobar que no sea un día que no se trabaja
            if ($dayType === 'NoWorkday')  continue;

            $now = Carbon::now();
            // Asignar horarios de flebotomistas
            $phlebotomistSchedules = [];
            foreach ($currentGlobalSchedule->global_phlebotomist_schedules as $phlebotomistSchedule) {
                array_push($phlebotomistSchedules, [
                    'schedule_config_id' => $scheduleConfig->id,
                    'user_id' => $phlebotomistSchedule->user_id,
                    'zone_id' => $phlebotomistSchedule->zone_id,
                    'created_at' => $now,
                    'updated_at' => $now,
                ]);
            }
            
            PhlebotomistSchedule::insert($phlebotomistSchedules);
            $scheduleConfig->phlebotomist_schedules = $phlebotomistSchedules; // Creo que está linea no va
            
        }
        
        return $this->success($scheduleConfigs);
    }

    /**
     * update-distribution
     * 
     * Permite actualizar la configuración de rutas
     * 
     * - bodyParam __phlebotomists__ array required Arreglo de phlebotomistas con sus zonas.
     * - bodyParam __phlebotomists.*.zone_id__ int required Identificador de la zona. Example: 1
     * - bodyParam __phlebotomists.*.user_id__ int required Identificador del flebotomista. Example: 1
     * - bodyParam __date__ int required Fecha a la que se le quiere editar la configuración. Example: 1
     * 
    */
    public function updateDistribution(Request $request){
        /**
         * Input 
         * - Fecha que se quiere editar 
         * - Lista de flebotomistas.
         *      - id flebotomista
         *      - id zona
         * 
         * Consideraciones no se puede actulizar fechas anteriores al día de hoy. 
         * 
         * Proceso
         * 1. Se identifica el ScheduleConfing que se quiere actualizar
         *  1.1 Se responde 404 sí no existe ninguna. 
         * 2. Se identifica sí no tienen citas asignadas
         *  2.1 Sí hay citas, se debe contestar como "Esta acción no puede completarse 
         *      porque existen citas que no lo permiten".
         * 3. Se eliminan los registros de los flebotomistas registrados
         * 4. Se vuelven a registrar los flebotomistas que están en la lista
         * 5. La petición devulve ScheduleConfig con la nueva configuración 
         *    de flebotomistas. 
         */
        $phlebotomists = !is_null($request["phlebotomists"]) ?  $request["phlebotomists"] : [];
        
         $validated = $request->validate([
            "date" => "required|date", //|before:now",
            "phlebotomists" => "nullable",//|min:1",
            "phlebotomists.*.zone_id" 
                => "required|distinct|numeric|exists:zones,id,enable,1|".
                "exists:zones,id,phlebotomist_number_configuration,". count($phlebotomists),
            "phlebotomists.*.user_id" 
                => "required|distinct|numeric|exists:users,id,role_id,".Role::$phlebotomist,
        ]);
        

        $config = ScheduleConfig::whereDate("start_date", $validated["date"])->first();
        
        if(is_null($config)) {
            return $this->error("No hay ninguna configuración para el día seleccionado", 404);
        }

        $ids = PhlebotomistSchedule::select(["id"])
            ->where("schedule_config_id", $config->id)->get()->pluck("id");
        $orders = Order::whereIn("phlebotomist_schedule_id", $ids)->count();
        
        if($orders > 0){
            return $this->error(
                "Este día ya está conprometido con $orders cita(s). ".
                "Esto impide que se pueda motificar la distrubución de flebotomistas",
                400
            );
        }

        $config->phlebotomistSchedules()->delete();
        
        foreach($phlebotomists as &$phlebotomist){
           PhlebotomistSchedule::create([
                "zone_id" => $phlebotomist["zone_id"],
                "user_id" => $phlebotomist["user_id"],
                "schedule_config_id" => $config->id,
            ]);
        }
        
        DB::statement("update schedule_configs set quantity_zones = " 
        .count($phlebotomists).", start_date  = '". 
        $config->start_date ."', updated_at  = '". 
        Carbon::now()."' where id = ". $config->id ." ;");

        $config->refresh()->load("phlebotomistSchedules");

        return $this->success($config);
    }

    /**
     * update-schedule
     * 
     * Actualiza el horario de inicio, de finalización, hora de comida y cantidad disponibles de rutas en un día específico
     * 
     * @queryParam id numeric required Identificador de la configuración de horarios (ScheduleConfig)
     * 
     * @bodyParam appointment_duration int Duración de la citas. Example : 16
     * @bodyParam start_date Date Hora de inicio de las citas. Example : "2021-08-12 09:00:00"
     * @bodyParam end_date Date Hora de finalización de las citas. Example : "2021-08-12 15:00:00"
     * @bodyParam quantity_zones Cantidad de Zonas que se tendrán disponibles por ese día. Example : 3
     * @bodyParam breakfast_schedule_id Id del registro del horario de comida. Example 5
     * @bodyParam breakfast_start_date Hora de inicio de la comida. Example : "2021-08-12 12:10:00"
     * @bodyParam breakfast_end_date Hora de finalización de la comida. Example : "2021-08-12 12:50:00"
     */
    public function updateSchedule(Request $request) {
        $validated = $request->validate([
            "appointment_duration" => "required|numeric",
            "start_date" => "required|string",
            "end_date" => "required|string",
            "quantity_zones" => "required|numeric",
            "breakfast_schedule_id" => "numeric",
            "breakfast_start_date" => "string",
            "breakfast_end_date" => "string",
        ]);

        $scheduleConfig = ScheduleConfig::find($request->id);

        if($scheduleConfig == null) {
            return $this->error("No existe un registro disponible para el id = $request->id", 404);
        }

        
        DB::statement("update schedule_configs set appointment_duration = ".$request->appointment_duration.
        ", start_date = '".$request->start_date.
        "', end_date = '".$request->end_date.
        "', quantity_zones = ".$request->quantity_zones.
        ", updated_at  = '". 
        Carbon::now()."' where id = ". $request->id ." ;");

        //$scheduleConfig->update($validated);

        // Comprobar si el usuario envió el id del registro de la hora de comida
        $breakfastSchedule = null;
        if ($request->breakfast_schedule_id) {
            $breakfastSchedule = BreakfastSchedule::find($request->breakfast_schedule_id);
            if($breakfastSchedule == null) {
                return $this->error("No existe un registro disponible para el id = $request->breakfast_schedule_id", 404);
            }
            $breakfastSchedule->update([
                "start_date" => $validated["breakfast_start_date"],
                "end_date" => $validated["breakfast_end_date"]
            ]);
            $scheduleConfig->breakfastSchedules = $breakfastSchedule;
        }

        return $this->success($scheduleConfig);
    }

    /**
     * update-phlebotomist
     * 
     * Actualiza los flebotomistas que estan asignados a las rutas
     * 
     * - bodyParam __changes__ array required Arreglo de cambios que se efectuaran hacía las asignaciones de zonas por flebotomista
     * - bodyParam __changes.*.phlebotomist_schedule_id__ Configuración de flebotomista. Example: 1
     * - bodyParam _changes.*.user_id_ Nuevo flebotomista que será asingado a la zona. Example: 1
     * 
     * @bodyParam changes array required Arreglo de cambios que se efectuaran hacía las asignaciones de zonas por flebotomista
     * @bodyParam changes.*.phlebotomist_schedule_id Configuración de flebotomista. Example: 1
     * @bodyParam changes.*.user_id Nuevo flebotomista que será asingado a la zona. Example: 1
     */
    public function updatePhlebotomistsSchedule(Request $request) {
        $validated = $request->validate([
            "changes" => "required|min:1|array",
            "changes.*.phlebotomist_schedule_id" 
                => "required|distinct|numeric|exists:phlebotomist_schedules,id,deleted_at,NULL",
            "changes.*.user_id" => "required|distinct|numeric|exists:users,id,role_id,".Role::$phlebotomist,
        ]);
        
        $changes = $validated["changes"];

        foreach($changes as $change){
            PhlebotomistSchedule::find($change["phlebotomist_schedule_id"])
                ->update($change);
        }

        return $this->success(null, 204);
    }

    /**
     * phlebotomist-schedule
     * 
     * Genera el horario disponible para un flebotomista
     * 
     * @queryParam phlebotomist_schedule_id int required Configuración del flebotomista. Example: 1
     */
    function phlebotomistSchedule(Request $request){
        //Obtener las citas que tengan el phlebotomist_schedule_id
        $request->validate([
            "phlebotomist_schedule_id" => "required|numeric|exists:phlebotomist_schedules,id,deleted_at,NULL"
        ]);
        
        $isCustomer = $request->user()->role_id == Role::$customer;
        $phlebotomistSchedule = PhlebotomistSchedule::find($request->phlebotomist_schedule_id);

        return $this->success($phlebotomistSchedule->schedule(false, !$isCustomer));
    }
    /**
     * schedule
     * 
     * Genera la matris de horarios de las rutas en un día específico.
     * 
     * @queryParam date date required Fecha que se quiere revisar. Example: 08-08-2021
     */
    function schedule(Request $request){
        $request->validate([
            "date" => "nullable|date"
        ]);

        $date = $request->has("date") ? Carbon::parse($request->date) : Carbon::now();
        $schedule = ScheduleConfig::with("phlebotomistSchedules.user")->whereDate("start_date", $date)->first();
        
        if(is_null($schedule)) return $this->error("Todavía no se ha acomodado el horario de este día", 404);

        $schedule->phlebotomistSchedules->map(function($phlebotomist){
            $phlebotomist["schedule"] = $phlebotomist->schedule(true);
            return $phlebotomist;
        });

        $phelbotomistIds = $schedule->phlebotomistSchedules->pluck("user_id");
        $phlebotomistConfigIds = $schedule->phlebotomistSchedules->pluck("id");

        $orders = Order::with(["status", "patients", "address", "customer.user", "user"])
            ->whereNotIn("user_id", $phelbotomistIds)
            ->whereIn("phlebotomist_schedule_id", $phlebotomistConfigIds)->get();

        return $this->success([
            "schedule" => $schedule,
            "extraordinary_schedule" => $orders,
        ]);
    }

    /**
     * extraordinary-schedule
     * 
     * Genera un horario extra para un día determinado
     * 
     * @queryParam date date required Fecha que se quiere generar el horario. Example: 08-08-2021
     * @queryParam user_id int required Flebotomista que se quiere asignar. Example: 1
     */
    function extraordinarySchedule(Request $request){
        $validated = $request->validate([
            "date" => "nullable|date",
            "user_id" => "required|numeric|exists:users,id,role_id,". Role::$phlebotomist,
        ]);

        $config = ScheduleConfig::whereDate("start_date", Carbon::parse($request->date))->first();

        if(is_null($config)) {
            return $this->error("No existe una configuración asignada para este día", 404); 
        }

        return $this->success($config->makeExternalSchedule($validated["user_id"]));
    }

    /**
     * fetch-current-zones
     * 
     * Este servicio devuelve la configuración de todos los flebotomistas que atenderán el día de hoy. 
     * Además se adjunta la zona a la que estarán atendiendo. De esta manera se espera que el cliente
     * pueda analizar a qué zona pertece hoy y así consultar los horarios disponibles con el servicio
     * schedule.
     * 
     * Este servicio es importante por que las zonas varían según el día, y como no son fijas hay que 
     * consultarlas.
     * 
     * @queryParam date date required fecha de la que se quiere consultar las zonas activas. Example: 2021-08-30
     */
    function fetchCurrentZones(Request $request){
        // Consultar Schedule config 
        $validate = $request->validate([
            "date" => "required|date"
        ]);

        // Devolver las zonas que corresponden a ese id. 
        $config = ScheduleConfig::whereDate(
            "start_date", $validate["date"])->first(); 

        if(is_null($config)){
            return $this->error(
                "No existe una configuración asignada para este día", 404); 
        }

        $specilaDays = SpecialDay::select("date")->where("day_type", SpecialDay::$noWorkDay)->get();
        $year = Carbon::now()->year; 
        
        ///Buscamos sí este fecha es libre de trabajo. 
        $isWorkFreeDay = !$specilaDays->every(function($value) use ($validate, $year) {
            return "$year-" . $value["date"] != $validate["date"];
        });

        if($isWorkFreeDay){
            return $this->error(
                "No existe una configuración asignada para este día", 404); 
        }

        $phlebotomistSchedules = PhlebotomistSchedule::with("zone")
            ->where("schedule_config_id", $config->id)->get();
        
        if($phlebotomistSchedules->isEmpty()){
            return $this->error(
                "No existe una configuración asignada para este día", 404); 
        }

        return $this->success($phlebotomistSchedules);
    }

    /**
     * orders
     * 
     * Trae las ordenes que han sido programadas en un día en específico. 
     * 
     * @queryParam date date required Día que se quiere consultar. Example: 1
     */
    function orders(Request $request){
        $validate = $request->validate([
            "date" => "required|date",
        ]);

        $config = ScheduleConfig::select(["id"])->whereDate("start_date", $validate["date"])->first();
        $phlebotomists = PhlebotomistSchedule::select(["id"])->where("schedule_config_id", $config->id)->get();
        $ids = $phlebotomists->pluck("id");
        $orders = Order::whereIn("phlebotomist_schedule_id", $ids)->get();

        return $this->success($orders);
    }   
}
