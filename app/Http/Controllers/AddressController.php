<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
use App\Rules\AvailableZones;
use Illuminate\Http\Request;

/**
 * @group Addresses
 * 
 * Servicios para manejo de direcciones
 */
class AddressController extends Controller
{
    /**
     * index
     * 
     * Muestra la lista de direcciones  
     * 
     * @authenticated
     * 
     * @urlParam customer int required Identificador del cliente
     * @urlParam id int required Identificador de la dirección 
     * 
     * @queryParam search string Campo que será usado para buscar coincidencias entre las direcciones
     * @queryParam per_page int Cantidad de elementos en la que se debe segmentar la paginación.
     * @queryParam page int Número de página a la que se quiere acceder
     */
    public function index(Request $request){
        $user = User::find($request->customer);
        

        $search = $request->input("search");
        $per_page = $request->input("per_page");
        $per_page = $per_page == null ? 15: $per_page;

        if($search == null){
            $services = Address::where("customer_info_id", $user->info->id)->paginate($per_page);
        }else{
            $services = Address::
                where("customer_info_id", $user->info->id)
                ->where(function($query) use ($search) {
                    $query->orWhere("street", "like","%$search%")
                        ->orWhere("neighborhood", "like","%$search%")
                        ->orWhere("state", "like","%$search%")
                        ->orWhere("city", "like","%$search%");
                })->paginate($per_page);
        }

        return $this->success($services);
    }

    /**
     * create
     * 
     * Registra una nueva dirección. 
     * 
     * @authenticated
     * 
     * @urlParam customer int required Identificador del cliente
     * @urlParam id int required Identificador de la dirección 
     * 
     * @bodyParam street required Calle. Example: Francisco I. Madero
     * @bodyParam neighborhood required  Colonia. Example: Colonia centro
     * @bodyParam num_ext required Número exterior. Example: 321
     * @bodyParam num_int optional Número interior del departamento . Example: 1
     * @bodyParam state required Estado. Example: Guanajuato
     * @bodyParam city required Ciudad. Example: León
     * @bodyParam zip_code required Código postal. Example: 37000
     * @bodyParam latitude required Latitud. Example: 21.1211672
     * @bodyParam longitude required Longitud. Example: -101.6789836
     * @bodyParam zone_id required Zona a la cual pertenece la dirección . Example: 2
     * @bodyParam references required Referencias para la dirección . Example: Es en una casa rosa con porton azul
     */
    public function create(Request $request){
        $validated = $request->validate([
            "street" => "string|required",
            "neighborhood" => "string|required",
            "num_ext" => "string|required",
            "num_int" => "string|nullable",
            "state" => "string|required",
            "city" => "string|required",
            "zip_code" => "required|min:5",
            //Datos calculados desde el cliente
            "latitude" => "required:double",
            "longitude" => "required:double",
            //"zone_id" => "required|exists:zones,id,deleted_at,NULL",
            "references" => "string|nullable", 
        ]);
        
        $user = User::find($request->customer);
        $validated["customer_info_id"] = $user->info->id;
        $address = Address::create($validated);

        return $this->success($address);
    }

    /**
     * update
     * 
     * Actualiza la información de una dirección.
     * 
     * @authenticated
     * 
     * @urlParam customer int required Identificador del cliente
     * @urlParam id int required Identificador de la dirección 
     * 
     * @bodyParam street optional Calle. Example: Francisco I. Madero
     * @bodyParam neighborhood optional  Colonia. Example: Colonia centro
     * @bodyParam num_ext optional Número exterior. Example: 321
     * @bodyParam num_int optional Número interior del departamento . Example: 1
     * @bodyParam state optional Estado. Example: Guanajuato
     * @bodyParam city optional Ciudad. Example: León
     * @bodyParam zip_code optional Código postal. Example: 37000
     * @bodyParam latitude required Latitud. Example: 21.1211672
     * @bodyParam longitude required Longitud. Example: -101.6789836
     * @bodyParam zone_id required Zona a la cual pertenece la dirección . Example: 2
     * @bodyParam references required Referencias para la dirección . Example: Es en una casa rosa con porton azul
     */
    public function update(Request $request){
        $address = Address::find($request->id);

        if($address == null){
            return $this->error("No existe un registro disponible para id = $request->id", 404);
        }

        if($address->isEngaged()){
            return $this->error(
                "Primero se tiene que atender la cita relacionada con esta dirección para poder editarla o eliminarla", 
                422
            );
        }

        $validated = $request->validate([
            "street" => "string",
            "neighborhood" => "string",
            "num_ext" => "string",
            "num_int" => "string|nullable",
            "state" => "string",
            "city" => "string",
            "zip_code" => "min:5",
            //Datos calculados desde el cliente
            "latitude" => "required:double",
            "longitude" => "required:double",
            "references" => "string|nullable", 
        ]);
        
        $address->update($validated);

        return $this->success($address);
    }

    /**
     * delete
     * 
     * Elimina una dirección. 
     * 
     * @authenticated
     * 
     * @urlParam customer int required Identificador del cliente
     * @urlParam id int required Identificador de la dirección 
     * 
     */
    public function delete(Request $request){
        $address = Address::find($request->id);

        if($address == null){
            return $this->error("No existe un registro disponible para id = $request->id", 404);
        }else{
            if($address->isEngaged()){
                return $this->error(
                    "Primero se tiene que atender la cita relacionada con esta dirección para poder editarla o eliminarla", 
                    422
                );
            }
            $address->delete();
            return $this->success(null, 204);
        }
    }
}
