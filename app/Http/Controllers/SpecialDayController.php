<?php

namespace App\Http\Controllers;

use App\Models\ScheduleConfig;
use App\Models\SpecialDay;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

/**
 * @group SpecialDays
 * 
 * Administración de los días que no se trabajan o se trabajan parcialmente
 */
class SpecialDayController extends Controller
{
    /**
     * index
     * 
     * Muestra la lista de días festivos y días que no se trabaja
     * 
     * @queryParam day_type string Tipo de día que se esta seleccionando ('Holiday' o 'NoWorkday').
     */
    public function index(Request $request){
        /**
         * Comparar el mes y el día con el que se encuentra en la base de datos
         * Si el mes y día son mayores, dejar el año actual, si son menores poner el año siguiente
         */
        //$per_page = $request->input("per_page");
        $day_type = $request->input("day_type");
        $special_days = SpecialDay::where("day_type", "=", $day_type)->get();
        
        $date = Carbon::now();
        // Crear un arreglo para poder aplicar el método para ordenarlo por fechas
        $arreglo = [];
        foreach($special_days as $special_day) {
            if ($date->format('m').'-'.$date->format('d') > $special_day->date) {
                $special_day->date = $special_day->date."-".(now()->year+1);
            } else {
                $special_day->date = $special_day->date."-".now()->year;
            }
            array_push($arreglo, $special_day);
        }
        
        usort($arreglo, object_sorter('date'));

        return $this->success($arreglo);
    }

    /**
     * create
     * Registra un nuevo día especial.
     * 
     * @authenticated
     * 
     * @bodyParam date string required Fecha del día especial. Solo poner mes y día ('mm-dd').
     * @bodyParam special_day string required Tipo de día especial ('Holiday' o 'NoWorkday').
     */
    public function create(Request $request){
        $validated = $request->validate([
            "date" => "required|string|unique:special_days",
            "day_type" => "required|string"
        ]);

        $date = SpecialDay::create($validated);
        $message = "Se ha creado el día especial";
        $config = ScheduleConfig::whereDate("start_date", $date->getDate())->first();

        if($date->isDateEngaged() && !is_null($config)){
            /// Ahora la ruta de la próxima día ya no tiene configuración. 
            if($config->hasAppointmentsEngaged()){
                $message = "Se ha creado el día especial, pero no se pudo limpiar la configuración del día próximo porque hay citas comprometidas";
            }else{
                $message = "Se ha creado el día especial, y se actualizó la configuración del día próximo correctamente";
                $config->phlebotomistSchedules()->delete();
                DB::statement("update schedule_configs set quantity_zones = 0, start_date  = '". 
                $config->start_date ."', updated_at  = '".Carbon::now()."' where id = ". $config->id ." ;");
            }
        }

        return $this->success([
            "date" => $date, 
            "message" => $message
        ]);
    }

    /**
     * update
     * 
     * Actualiza la fecha de día especial.
     * 
     * @authenticated
     * 
     * @urlParam id int required Identificador del día especial.
     * 
     * @bodyParam date string required Fecha del día especial. Solo poner mes y día ('mm-dd').
     */
    public function update(Request $request){
        $special_day = SpecialDay::find($request->id);

        if($special_day == null){
            return $this->error("No existe un registro disponible para id = $request->id", 404);
        }

        $validated = $request->validate([
            "date" => "required|string|unique:special_days",
        ]);

        $special_day->update($validated);
        return $this->success($special_day);
    }

     /**
     * delete
     * 
     * Elimina un día especial. 
     * 
     * @authenticated
     * 
     * @urlParam id int required Identificador del día especial
     */
    public function delete(Request $request){
        $special_day = SpecialDay::find($request->id);

        if($special_day == null){
            return $this->error("No existe un registro disponible para id = $request->id", 404);
        }else{
            $special_day->delete();
            return $this->success(null, 204);
        }
    }

}

/**
 * Función para ordenar un arreglo de objetos
 */
function object_sorter($clave, $orden=null) {
    return function ($a, $b) use ($clave,$orden) {
          $result=  ($orden=="DESC") ? strnatcmp($b->$clave, $a->$clave) :  strnatcmp($a->$clave, $b->$clave);
          return $result;
    };
}