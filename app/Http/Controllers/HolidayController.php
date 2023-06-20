<?php

namespace App\Http\Controllers;

use App\Models\Holiday;
use Illuminate\Http\Request;
// USAR LA MISMA TABLA PARA PONER LOS DÍAS QUE NO SE TRABAJA
class HolidayController extends Controller
{
    /**
     * index
     * 
     * Muestra la lista de días festivos  
     * 
     * @queryParam per_page int Cantidad de elementos en la que se debe segmentar la paginación.
     * @queryParam page int Número de página a la que se quiere acceder
     */
    public function index(Request $request){
        $per_page = $request->input("per_page");
        $per_page = $per_page == null ? 15: $per_page;

        $holidays = Holiday::paginate($per_page);

        return $this->success($holidays);
    }

    /**
     * create
     * Registra un nuevo día festivo.
     * 
     * @authenticated
     * 
     * @bodyParam holiday string required Fecha del día festivo.
     */
    public function create(Request $request){
        $validated = $request->validate([
            "holiday" => "required|string",
        ]);

        $holiday = Holiday::create($validated);

        return $this->success($holiday);
    }

    /**
     * update
     * 
     * Actualiza un día festivo.
     * 
     * @authenticated
     * 
     * @urlParam id int required Identificador del día festivo.
     * 
     * @bodyParam holiday string required Fecha del día festivo.
     */
    public function update(Request $request){
        $holiday = Holiday::find($request->id);

        if($holiday == null){
            return $this->error("No existe un registro disponible para id = $request->id", 404);
        }

        $validated = $request->validate([
            "holiday" => "required|string",
        ]);

        $holiday->update($validated);

        return $this->success($holiday);
    }

    /**
     * delete
     * 
     * Elimina un día festivo. 
     * 
     * @authenticated
     * 
     * @urlParam id int required Identificador del día festivo
     */
    public function delete(Request $request){
        $holiday = Holiday::find($request->id);

        if($holiday == null){
            return $this->error("No existe un registro disponible para id = $request->id", 404);
        }else{
            $holiday->delete();
            return $this->success(null, 204);
        }
    }
}
