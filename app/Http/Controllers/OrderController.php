<?php

namespace App\Http\Controllers;

use App\Events\PhlebotomistLocationEvent;
use App\Http\Requests\OrderRequest;
use App\Models\CustomerInfo;
use App\Models\HistoricalService;
use App\Models\Order;
use App\Models\OrderPatient;
use App\Models\OrderState;
use App\Models\PhlebotomistSchedule;
use App\Models\Role;
use App\Models\ScheduleConfig;
use App\Models\Tracking;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * @group Orders
 * 
 * Administración de ordenes. Las ordenes están regidas por los siguientes estatus: 
 * - CREATED = 1
 * - APPROVED = 2
 * - ACTIVE = 3
 * - COMPLETE = 4
 * - CANCELED = 5
 */
class OrderController extends Controller {   
    

    private function orderBuilder(Request $request): Builder {      
        $request->validate([
            "from" => "date|required_with:to",
            "to" => "date|required_with:from",
            "date_from" => "date|required_with:date_to",
            "date_to" => "date|required_with:date_from",
            "user_id" => "nullable|exists:users,id,role_id,".Role::$phlebotomist,
            "customer_info_id" => "nullable|exists:customer_infos,id,deleted_at,NULL",
            "order_state_id" => "nullable|exists:order_states,id",            
            "paginated" => "nullable|boolean",            
        ]);

        $builder = Order::with(["status", "patients", "address", "customer.user", "user"]);


        if($request->has("date_from") && $request->has("date_to")){
            $builder = $builder->whereBetween("created_at",
                [$request->input("date_from"), $request->input("date_to")." 23:59:59"]);
        }

        if($request->has("from") && $request->has("to")){
            $builder = $builder->whereBetween("start_date",
                [$request->input("from"), $request->input("to")." 23:59:59"]);
        }

        if($request->has("user_id")) {
            $builder = $builder->where("user_id", $request->user_id);
        }

        if($request->has("customer_info_id")) {
            $builder = $builder
                ->where("customer_info_id", $request->input("customer_info_id"));
        }

        if($request->has("order_state_id")) {
            $builder = $builder
                ->where("order_state_id", $request->input("order_state_id"));
        }

        return $builder;
    }

    /**
     * index
     * 
     * Devuelve la lista de ordenes en el sistema
     * 
     * @queryParam from date optional Desde que fecha se va a filtrar. Example: 2021-07-01
     * @queryParam to date optional Hasta que fecha se va a filtrar. Example: 2021-07-07
     * @queryParam date date optional Fecha en que es la cita. Example 2021-07-07
     * @queryParam user_id Identificador del flebotomista que atiende. Example: 2.
     * @queryParam customer_info_id Identificador del cliente. Example. Example: 3.
     * @queryParam search Busca por el nombre del cliente. Example: Juan.
     * @queryParam order_state_id Filtra por el estado de la orden. Example: 1
     * @queryParam per_page int Cantidad de elementos en la que se debe segmentar la paginación. Example: 12
     * @queryParam page int Número de página a la que se quiere acceder (1 en adelante). Example: 1
     */
    function index(Request $request){
        $pageSize = $request->input("per_page");
        if(is_null($pageSize)) $pageSize = 12;

        $builder = $this->orderBuilder($request);
        
        $builder = $builder->orderBy('start_date', 'ASC');
        $paginated = $request->has("paginated") ? $request->paginated : true;
        

        return $this->success(
            $paginated ? 
                $builder->paginate($pageSize) 
                : $builder->get()
        );
    }

    /**
     * show
     * 
     * Muestra toda la información de una orden
     * 
     * @urlParam id int required Identificador de la orden. Example: 1. 
     */
    function show(Request $request){
        $order = Order::find($request->id);

        if($order == null){
            return $this->error("No existe un registro disponible para id = $request->id", 404);
        }

        return $this->success($order->getWhole());
    }

    /**
     * create
     * 
     * Crea una orden. Esta registra los datos del paciente ya demás registra la cita en el sistema. 
     * 
     * @bodyParam customer_info_id string required Id de la información del usuario Example: 1
     * @bodyParam start_date date required Horario de la cita. Example: 2021-07-24 11:00:00
     * @bodyParam end_date date required Horario de la cita. Example: 2021-07-24 11:40:00
     * @bodyParam phlebotomist_schedule_id int required Configuración del flebotomista que se asignó.  Example: 1
     * @bodyParam address_id int required Dirección a la que debe asistir el flebotomista. Example: 1
     * @bodyParam patients array required Arreglo de pacientes. Example: 1
     * @bodyParam patients.*.id int required Identificador del paciente . Example: 1
     * @bodyParam patients.services array required Arreglo de ids de los servicios que el cliente solicitó.
     * @bodyParam patients.*.services.* int required Identificador de servicio. Example: 1
     * 
     */
    function create(OrderRequest $request){
        $validated = $request->validated();

        // Validamos qué la dirección le pertenezca al cliente
        $address = CustomerInfo::find($validated["customer_info_id"])->
            addresses->where("id", $validated["address_id"])->first();

        if(is_null($address)) return $this->
            error("La dirección que deseas registrar no pertenece al usuario", 400);

        /// Revisamos que el horario se válido.
        $phlebotomist = PhlebotomistSchedule::find($request->phlebotomist_schedule_id);
        $config = $phlebotomist->scheduleConfig;
        $startAppoinment = Carbon::parse($validated["start_date"]);
        $endAppoinment = Carbon::parse($validated["end_date"]);

        $start = Carbon::parse($config->start_date);
        $end = Carbon::parse($config->end_date);
        $isValidDate = false; 
        
        /// Cantidad de módulos de tiempo que ocupa la cita
        if(!$validated["ignore_schedule"]){
            $appoinmentModules = ceil(count($request->patients) / 2);
            do {    
                $nextAppointment = $start->copy()->addMinutes($config->appointment_duration * $appoinmentModules);
                
                if($startAppoinment->eq($start) && $endAppoinment->eq($nextAppointment)){
                    $isValidDate = true;
                    break;
                }
                $start->addMinutes($config->appointment_duration);
            } while($start->isBefore($end));
            
            if(!$isValidDate){
                return $this->error(
                    "El horario que se quiere registrar no está dentro de la disposición del horario",
                     400
                );
            }
        }

        //Obtenemos las ordenes para saber sí llega a estar recervado el horario
        if($request->has("user_id") && $request->input("user_id") != $phlebotomist->user_id) {
            $BelongToSchedule = $config->phlebotomistSchedules
                ->where("user_id", $validated["user_id"])->isEmpty();

            if($BelongToSchedule){
                $routes = $config->phlebotomistSchedules()
                    ->where("user_id", $validated["user_id"])
                    ->orWhere("id", $validated["phlebotomist_schedule_id"])
                    ->get()->pluck("id")->all();
    
                $orders = Order::whereIn("phlebotomist_schedule_id", $routes)
                            ->where("order_state_id", "!=", OrderState::CANCELED)
                            ->get();
            }else{
                $orders = Order::where("user_id", $validated["user_id"])
                    ->whereDate("start_date", $startAppoinment)->get();
            }
        } else {
            $orders = Order::where(
                "phlebotomist_schedule_id", 
                $validated["phlebotomist_schedule_id"]
            )->where("order_state_id", "!=", OrderState::CANCELED)->get();

            $validated["user_id"] = $phlebotomist->user_id;
        }

        $isReserved = false; 
        for ($i = 0, $e = $orders->count(); $i < $e; $i++) {
            $isReserved = 
                $startAppoinment->between(
                    Carbon::parse($orders[$i]->start_date), 
                    Carbon::parse($orders[$i]->end_date)->subMinute()
                )  && 
                $orders[$i]->user_id == $validated["user_id"];

            if($isReserved) break;
        }

        if($isReserved) {
            return $this->error("No se puede registrar la cita por que el horario ya está reservado", 400);
        }
 
        $patients = $validated["patients"];
        $totalCost = 0; 
        foreach($patients as &$patient){
            $count = count(array_unique($patient["services"]));

            if($count !=  count(($patient["services"]))){
                return $this->error("El paciente con id ". $patient['id'] ." tiene servicios repetidos", 400);
            }

            $patient["historical"] = HistoricalService::select(["id", "public_cost"])
                        ->whereIn("id", $patient["services"])->get();

            $totalCost += $patient["historical"]->sum->public_cost;
        }

        $patientExtraCost = (count($patients) -1) * Order::PATIENT_COST;
        $validated["cost"] = $totalCost + $patientExtraCost + Order::VISIT_COST;

        $validated["patient_cost"] = Order::PATIENT_COST;
        $validated["visit_cost"] = Order::VISIT_COST;

        $validated["order_state_id"] = OrderState::CREATED;
        $order = Order::create($validated);

        $order->history()->attach([OrderState::CREATED]);
        $patientsIds = array_column($patients, "id");
        $order->patients()->attach($patientsIds);
        
        for ($i = 0, $e = count($patientsIds); $i < $e; $i++) { 
            $id = $patientsIds[$i];
            $services = $patients[$i]["historical"]->pluck("id");

            $patientOrder = OrderPatient::
                where("order_id", $order->id)->where("patient_id", $id)->first();

            $patientOrder->historicalServices()->attach($services);
        }
       
        return $this->success($order->getWhole());
    }

    /**
     * update
     * 
     * Permite actualizar una order. Esto permite cambiar 
     * - El horario 
     * - El flebotomista
     * - La dirección
     * - Los servicios (esto también modificará el costo)
     * - La información del paciente
     * 
     * - bodyParam __customer_info_id__ string required Id de la información del usuario Example: 1
     * - bodyParam __start_date__ date required Horario de la cita. Example: 2021-07-24 11:00:00
     * - bodyParam __end_date__ date required Horario de la cita. Example: 2021-07-24 11:40:00
     * - bodyParam __phlebotomist_schedule_id__ int required Configuración del flebotomista que se asignó.  Example: 1
     * - bodyParam __address_id__ int required Dirección a la que debe asistir el flebotomista. Example: 1
     * - bodyParam __services__ array required Arreglo de ids de los servicios que el cliente solicitó. Example: 1
     * - bodyParam __services.*__ int required Identificador de servicio. Example: 1
     * 
     * @bodyParam customer_info_id string required Id de la información del usuario Example: 1
     * @bodyParam start_date date required Horario de la cita. Example: 2021-07-24 11:00:00
     * @bodyParam end_date date required Horario de la cita. Example: 2021-07-24 11:40:00
     * @bodyParam phlebotomist_schedule_id int required Configuración del flebotomista que se asignó.  Example: 1
     * @bodyParam address_id int required Dirección a la que debe asistir el flebotomista. Example: 1
     * @bodyParam services array required Arreglo de ids de los servicios que el cliente solicitó. Example: 1
     * @bodyParam services.* int required Identificador de servicio. Example: 1
     * 
     */
    function update(OrderRequest $request) {
        $validated = $request->validated();
        $order = Order::find($request->id);
        $start = null; 
        if($order == null) {
            return $this->error("No existe un registro disponible para id = $request->id", 404);
        }

        // Validamos qué la dirección le pertenezca al cliente
        if(array_key_exists("address_id", $validated)) {
            $address = CustomerInfo::find($validated["customer_info_id"])
                ->addresses->where("id", $validated["address_id"])->first();

            if(is_null($address)) return $this->
                error("La dirección que deseas registrar no pertenece al usuario", 400);
        }
    
        // Comprobar que el horario no esté ocupado
        if(array_key_exists("start_date", $validated)){
            $start = Carbon::parse($validated["start_date"]);
            $end = Carbon::parse($validated["end_date"]);

            $isReserved = false; 

            $phlebotomistId = $request->has("user_id") ? $validated["user_id"] : $order->user_id; 
            $phlebotomistConfig = PhlebotomistSchedule::find($validated["phlebotomist_schedule_id"]);
        
            if($phlebotomistConfig->user_id == $phlebotomistId) {
                 $orders = Order::where("phlebotomist_schedule_id", $validated["phlebotomist_schedule_id"])
                             ->where("order_state_id", "!=", OrderState::CANCELED)
                             ->get();
            } else {
                $config = $phlebotomistConfig->scheduleConfig;
                $BelongToSchedule = $config->phlebotomistSchedules
                    ->where("user_id", $validated["user_id"])->isEmpty();

                if($BelongToSchedule){
                    $routes = $config->phlebotomistSchedules()
                        ->where("user_id", $validated["user_id"])
                        ->orWhere("id", $validated["phlebotomist_schedule_id"])
                        ->get()->pluck("id")->all();
        
                    $orders = Order::whereIn("phlebotomist_schedule_id", $routes)
                                ->where("order_state_id", "!=", OrderState::CANCELED)
                                ->get();
                }else{
                    $orders = Order::where("user_id", $validated["user_id"])
                        ->whereDate("start_date", $start)->get();
                }
            }
            $establishedStartDate = Carbon::parse($order->start_date); 
            $establishedEndDate = Carbon::parse($order->end_date); 

            for ($i = 0, $e = $orders->count(); $i < $e; $i++) {
                $currentStartDate = Carbon::parse($orders[$i]->start_date);
                $currentEndDate = Carbon::parse($orders[$i]->end_date);

                $isReserved = ($start->notEqualTo($establishedStartDate) && 
                $end->notEqualTo($establishedEndDate)) &&
                    $start->between($currentStartDate, $currentEndDate) && 
                    $orders[$i]->user_id == $validated["user_id"];
                
                if($isReserved) break;
            }
    
            if($isReserved){
                return $this->error("No se puede registrar por que el horario ya está reservado", 400);
            }
        } 

        if(array_key_exists("patients", $validated)){
            $patients = $validated["patients"];
            $totalCost = 0;

            foreach($patients as &$patient){
                $count = count(array_unique($patient["services"]));
    
                if($count !=  count(($patient["services"]))){
                    return $this->error("El paciente con id ". $patient['id'] ." tiene servicios repetidos", 400);
                }
    
                $patient["historical"] = HistoricalService::select(["id", "public_cost"])
                            ->whereIn("id", $patient["services"])->get();
    
                $totalCost += $patient["historical"]->sum->public_cost;
            }
            
            $patientsIds = array_column($patients, "id");
            $patientExtraCost = (count($patients) -1) * Order::PATIENT_COST;            
            $validated += [
                "cost" => $totalCost + $patientExtraCost + Order::VISIT_COST,
                "patient_cost" => Order::PATIENT_COST,
                "visit_cost" => Order::VISIT_COST,
            ];

            OrderPatient::where("order_id", $order->id)->each(function($orderPatient){
                $orderPatient->historicalServices()->detach();
            });

            $order->patients()->detach();
            $order->patients()->attach($patientsIds);


            for ($i = 0, $e = count($patientsIds); $i < $e; $i++) { 
                $id = $patientsIds[$i];
                $services = $patients[$i]["historical"]->pluck("id");

                $patientOrder = OrderPatient::
                    where("order_id", $order->id)->where("patient_id", $id)->first();
                $patientOrder->historicalServices()->attach($services);
            }
        } 

        if(is_null($start)) {
            $start = Carbon::parse($order->start_date);
        } 

        $order->update($validated);
        DB::statement("update orders set start_date = '".$start->toDateTimeString()."' where id = ". $request->id ." ;");
        return $this->success(null, 204);
    }
    
    /**
     * complete
     * 
     * Permite cambiar de estatus una orden a estado completado. 
     * 
     * @queryParam id int Identificador de la orden. Example: 1
     */
    function complete(Request $request) {
        $order = Order::find($request->id);

        if($order == null){
            return $this->error("No existe un registro disponible para id = $request->id", 404);
        }

        if($order->order_state_id != OrderState::ACTIVE){
            return $this->error("Para completar una orden, antes debe estar en estado activo", 400);
        }

        if($order->order_state_id == OrderState::COMPLETE){
            return $this->error("Esta orden ya se encuentra completada", 400);
        }

        $order->update([
            "order_state_id" => OrderState::COMPLETE,
            "end_time" => Carbon::now(),
        ]);

        $order->history()->attach([OrderState::COMPLETE]);

        return $this->success(null, 204);
    }   

    /**
     * canceled
     * 
     * Permite cambiar de estatus una orden a estado cancelado. Sí el usuario es
     * de rol Cliente podrá cancelarla solo sí la orden está en estatus creado; Sí 
     * el usuario es de rol Flebotomista la podrá cancelar sí está en estado activo.
     *  
     * @queryParam id int Identificador de la orden. Example: 1
     */
    function canceled(Request $request) {
        $user = $request->user();
        $order = Order::find($request->id);

        if($order == null){
            return $this->error("No existe un registro disponible para id = $request->id", 404);
        }

        if($user->isCustomer() && $order->order_state_id != OrderState::CREATED){
            return $this->error(
                "Esta orden ya se está atendiendo o ya se atendió y no se puede cancelar",
                400
            );
        }

        if($order->order_state_id == OrderState::COMPLETE){
            return $this->error(
                "Esta orden ya se encuentra completada y ya no se puede cancelar",
                400
            );
        }

        if($order->order_state_id == OrderState::CANCELED){
            return $this->error("Esta orden ya se encuentra cancelada", 400);
        }

        $start = Carbon::parse($order->start_date);

        $order->update([
            "order_state_id" => OrderState::CANCELED,
            // "canceled_time" => Carbon::now(),
        ]);

        $order->history()->attach([OrderState::CANCELED]);

        DB::statement("update orders set start_date = '".$start->toDateTimeString()."' where id = ". $request->id ." ;");

        return $this->success(null, 204);
    }

    /**
     * active
     * 
     * Permite cambiar de estatus una orden a estado activo. 
     * 
     * @queryParam id int Identificador de la orden. Example: 1
     */
    function active(Request $request) {        
        $order = Order::find($request->id);

        if($order == null){
            return $this->error("No existe un registro disponible para id = $request->id", 404);
        }

        if($order->order_state_id != OrderState::CREATED){
            return $this->error("Solo se pueden activar las ordenes que se encuentran en estado 'Creado'", 400);
        }

        if($order->order_state_id == OrderState::ACTIVE){
            return $this->error("Esta orden ya se encuentra activa", 400);
        }

        $order->update([
            "order_state_id" => OrderState::ACTIVE,
            "start_time" => Carbon::now(),
        ]);

        $order->history()->attach([OrderState::ACTIVE]);
        return $this->success(null, 204);
    }

    /**
     * arrive
     * 
     * Marca la hora en la que se arribó a la dirección
     * 
     * @queryParam id int Identificador de la orden. Example: 1     * 
     */
    function arrive(Request $request) {
        $order = Order::find($request->id);

        if($order == null){
            return $this->error("No existe un registro disponible para id = $request->id", 404);
        }

        if($order->order_state_id != OrderState::ACTIVE){
            return $this->error("Solo se puedes marcar como arribo las ordenes que se encuentran en estado 'Activo'", 400);
        }

        $order->update([            
            "arrive_time" => Carbon::now(),
        ]);

        return $this->success(null, 204);
    }

    /**
     * mark-survey-answered
     * 
     * Indica que la encuesta de la orden ya ha sido contestada
     * 
     * @queryParam id int Identificador de la orden. Example: 1
     */
    function markSurveyAnswered(Request $request) {
        $order = Order::find($request->id);
        if($order == null){
            return $this->error("No existe un registro disponible para id = $request->id", 404);
        }
        $order->update(["survey_answered" => true]);
        return $this->success(null, 204);
    }

    function report(Request $request){
        $builder = $this->orderBuilder($request);
        $data = $builder->get(); 
        
        if($request->has("from") && $request->has("to")) {
            $startDate = Carbon::parse($request->input("from"));
            $endDate = Carbon::parse($request->input("to"))->addDay();
        }else{
            $startDate = Carbon::parse(ScheduleConfig::first()->start_date);
            $endDate = Carbon::parse(ScheduleConfig::orderBy("start_date", "desc")->first()->start_date)->addDay();
        }
        
        $records = [];

        $diffDays = $startDate->diffInDays($endDate);
        $appoinmentCount= $data->count();
        $total = 0;
        $patientsCount = 0;
        $womansCount = 0;
        $totalTimeToArrive = 0;
        $totalTimeInAppointment = 0;

        $data->each(function ($order) use (&$total, &$patientsCount, &$womansCount, &$totalTimeToArrive, &$totalTimeInAppointment) {
            $total += $order->cost;
            $patientsCount += $order->patients->count();
            $womansCount += $order->patients->sum(fn($patient) => $patient->gender == "Mujer");

            if($order->order_state_id == OrderState::COMPLETE){
                $arriveTime = Carbon::parse($order->arrive_time);
                $totalTimeToArrive += Carbon::parse($order->start_time)->diffInSeconds($arriveTime);
                $totalTimeInAppointment += $arriveTime->diffInSeconds(Carbon::parse($order->end_time));
            }
        });
                
        do{
            $dayAppointments = $data->filter(function($order) use ($startDate) {
                return $startDate->toDateString() == Carbon::parse($order->start_date)->toDateString();
            });

            $records[] = [
                "date" => $startDate->toDateString(), 
                "total_sale" => $dayAppointments->sum->cost,
                "appoinment_count" => $dayAppointments->count(),
                "patients_count" => $dayAppointments->sum(fn($order) => $order->patients->count()),
            ];
            
            $startDate->addDay();
        }while(!$startDate->equalTo($endDate));


        return $this->success([
            "days_count" => $diffDays,
            "appointment_count" => $appoinmentCount,
            "patients_count" => $patientsCount,
            "total_sale" =>  $total,
            "total_sale_per_day" => $diffDays == 0 ? 0 : $total/$diffDays,
            "appoinment_sale_avg" => $appoinmentCount == 0 ? 0 :  $total/$appoinmentCount,
            "patient_per_day_avg" => $diffDays == 0 ? 0 : $patientsCount / $diffDays,
            "patient_sale_avg" => $patientsCount == 0 ? 0 : $total/$patientsCount,
            "appointments_per_day" => $diffDays == 0 ? 0 : $appoinmentCount/$diffDays,
            "patients_appointment_avg" => $appoinmentCount == 0 ? 0 : $patientsCount/$appoinmentCount,
            "patient_female_count" => $womansCount,
            "patient_male_count" => $patientsCount - $womansCount,
            "avg_time_to_arrive" => $data->isEmpty() ? 0 : $totalTimeToArrive / $data->count(),
            "avg_time_in_appointment" => $data->isEmpty() ? 0 : $totalTimeInAppointment / $data->count(),
            "records" => $records,
        ]);
    }

    function reportToCsv(Request $request){
        $builder = $this->orderBuilder($request);
        $records = $builder->get(); 

        $fileName = "reporte.csv";
        $records = $builder->get();
        $headers = [
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        ];

        $callback = function() use($records) {
            $file = fopen('php://output', 'w');
            $columns = [
                "ID",
                "Cliente",
                "Flebotomista",
                "Fecha de creación",
                "Horario",
                "Núm. pacientes",
                "Costo",
                "Estatus",
                "Hora de comienzo",
                "Hora de arrivo",                
                "Hora de término",
                "Tiempo de llegada",
                "Tiempo de la cita",
            ];

            fputcsv($file, $columns);

            foreach ($records as $order) {
                $timeToArrive = null;
                $timeInAppointment = null;

                if($order->order_state_id == OrderState::COMPLETE){
                    $arriveTime = Carbon::parse($order->arrive_time);
                    $timeToArrive = ($arriveTime->diffInSeconds(Carbon::parse($order->start_time))) / 60;
                    $timeInAppointment = ($arriveTime->diffInSeconds(Carbon::parse($order->end_time))) / 60;
                }

                $row = [
                    "ID" => $order->id,
                    "Cliente" => $order->customer->user->fullName(),
                    "Flebotomista" => $order->phlebotomistSchedule->user->fullName(),
                    "Fecha de creación" => $order->created_at,
                    "Horario" => $order->start_date,
                    "Núm. pacientes" => $order->patients->count(),
                    "Costo" => $order->cost,
                    "Estatus" => $order->status->name,
                    "Hora de comienzo" => $order->start_time,
                    "Hora de arrivo" => $order->arrive_time,
                    "Hora de término" => $order->end_time,
                    "Tiempo de llegada" => is_null($timeToArrive) ? "" : "$timeToArrive minutos",
                    "Tiempo de la cita" => is_null($timeInAppointment) ? "" : "$timeInAppointment minutos",
                ];

                fputcsv($file, $row);
            }

            fclose($file);
        };


        return response()->stream($callback, 200, $headers);
        
    }

    /**
     * report-location
     * 
     * Este servicio reporta la ubicación a un evento en Pusher
     */
    function reportLocation(Request $request) {
        $validated = $request->validate([            
            "order_id" => "required|numeric|exists:orders,id,order_state_id,". OrderState::ACTIVE,
            "lat" => "required|numeric",
            "lng" => "required|numeric",
        ]);

        $user =  $request->user(); 
        $order = Order::find($validated["order_id"]);

        if($user->id != $order->user_id) {
            return $this->error("No tienes permiso para realizar esta acción", 401);
        }

        $validated["user_id"] = $order->user_id; 
        $tracking = Tracking::create($validated);


        event(new PhlebotomistLocationEvent(
            $tracking->id,
            $tracking->lat,
            $tracking->lng,
            $tracking->user_id,
            $tracking->order_id,
            $order->user->fullName(),
            $tracking->created_at,

        ));

        return $this->success(null, 204);
    }
}
