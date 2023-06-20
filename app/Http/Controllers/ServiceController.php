<?php

namespace App\Http\Controllers;

use App\Models\HistoricalService;
use App\Models\Order;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * @group Services
 * 
 * Servicios para manejo de servicios (estudios)
 */
class ServiceController extends Controller
{
    /**
     * index
     * 
     * Muestra la lista de servicios  
     * 
     * @queryParam search string Campo que será usado para buscar coincidencias entre los servicios
     * @queryParam per_page int Cantidad de elementos en la que se debe segmentar la paginación.
     * @queryParam page int Número de página a la que se quiere acceder
     */
    public function index(Request $request){
        $validated = $request->validate([
            "search" => "nullable",
            "enable" => "nullable|bool",
            "available_outside" => "nullable|bool",
            "available_outside_order" => "nullable|string|in:asc,desc"
        ]);   

        $perPage = $request->has("per_page") ? $request->input("per_page") : 15;
        $builder = Service::query(); 
        
        if($request->has("search")){            
            $builder = $builder->where("name", "like","%". $validated["search"] ."%");
        }
        
        if($request->has("enable")){
            $builder = $builder->where("enable", $validated["enable"]);
        }

        if($request->has("available_outside_order")){
            $builder = $builder->orderBy("available_outside", $validated["available_outside_order"]);
        }
        
        if($request->has("available_outside")){
            $builder = $builder->where("available_outside", $validated["available_outside"]);
        }
        
        return $this->success([
            "paginated" => $builder->paginate($perPage),
            "patient_cost" => Order::PATIENT_COST,
            "visit_cost" => Order::VISIT_COST,
        ]);
    }

    /**
     * check
     * 
     * Entrega varios servicos según lo que resiva como parámetro
     * 
     * @bodyParam services array required Arreglo de ids de los servicios que el cliente solicitó.
     * @bodyParam *.services.* int required Identificador de servicio. Example: 1
     */
    public function check(Request $request){
        $service = Service::whereIn("id", json_decode($request->services))->get();
        return $this->success($service); 
    }

    /**
     * show
     * 
     * Muestra la información de un servicio. 
     * 
     * @authenticated
     * 
     * @urlParam id int required Identificador del servicio
     */
    public function show(Request $request){
        $service = Service::find($request->id);

        if($service == null){
            return $this->error("No existe un registro disponible para id = $request->id", 404);
        }

        return $this->success($service);
    }

    /**
     * create
     * Registra un nuevo servicio. 
     * 
     * @authenticated
     * 
     * @bodyParam name string required Nombre del servicio.
     * @bodyParam request string required Requerimientos del servicio (Requisitos de tiempo y de cuidados).
     * @bodyParam public_cost double required Precio al público del estudio.
     * @bodyParam process_time int required Tiempo del proceso del estudio. 
     */
    public function create(Request $request){
        $validated = $request->validate([
            "name" => "required|string",
            "request" => "required|string",
            "public_cost" => "required|numeric",
            "process_time" => "required|integer",
            "available_outside" => "int",
        ]);

        $historical = HistoricalService::create($validated);
        $validated += ["historical_service_id" => $historical->id];
        $service = Service::create($validated);
        $historical->update(["service_id" => $service->id]);

        return $this->success($service);
    }

    /**
     * update
     * 
     * Actualiza la información de un servicio.
     * 
     * @authenticated
     * 
     * @urlParam id int required Identificador del servicio
     * 
     * @bodyParam name string required Nombre del servicio.
     * @bodyParam request string required Requerimientos del servicio (Requisitos de timpo y de cuidados).
     * @bodyParam public_cost double required Precio al público del estudio.
     * @bodyParam process_time int required Tiempo del proceso del estudio. 
     * @bodyParam enable int Indica si el estudio esta activo. [0, 1]
     */
    public function update(Request $request){
        $service = Service::find($request->id);

        if($service == null){
            return $this->error("No existe un registro disponible para id = $request->id", 404);
        }

        $validated = $request->validate([
            "name" => "string",
            "request" => "string",
            "public_cost" => "numeric",
            "process_time" => "int",
            "enable" => "int",
            "available_outside" => "int",
        ]);
        
        $oldHistorical = HistoricalService::find($service->historical_service_id);
        $newHistorical = array_replace($oldHistorical->values(), $validated);
        $newHistorical["service_id"] = $request->id;
        $historical = HistoricalService::create($newHistorical);
        $validated += ["historical_service_id" => $historical->id];
        $service->update($validated);
        return $this->success($service);
    }

    /**
     * delete
     * 
     * Elimina un servicio. 
     * 
     * @authenticated
     * 
     * @urlParam id int required Identificador del servicio
     */
    public function delete(Request $request){
        $service = Service::find($request->id);

        if($service == null){
            return $this->error("No existe un registro disponible para id = $request->id", 404);
        }else{
            $service->delete();
            return $this->success(null, 204);
        }
    }
    
}
