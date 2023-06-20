<?php

namespace App\Http\Controllers;

use App\Models\Zone;
use App\Rules\Poligon;
use Illuminate\Http\Request;

/**
 * @group Zones
 * 
 * Servicios para administrar zonas
 */
class ZoneController extends Controller
{
    /**
     * index
     * Muestra todas las zonas registradas
     * 
     * @authenticated
     * 
     * 
     * 
     */
    public function index(Request $request){

        $builder = Zone::whereNull("deleted_at");
        
        if(!is_null($request->input("phlebotomist_number_configuration"))){
            $builder = $builder->where(
                "phlebotomist_number_configuration", 
                $request->input("phlebotomist_number_configuration"
            ));
        }

        return $this->success($builder->get());
    }

    /**
     * show
     * Muestra una zona al recibir un identificador
     * @authenticated
     * 
     * @queryParam id int required Identificador de la zona
     */
    public function show(Request $request){
        $zone = Zone::find($request->id);

        if($zone == null){
            return $this->error("No existe un registro disponible para id = $request->id", 404);
        }

        return $this->success($zone);
    }
 
    /**
     * create
     * Crea una zona, esta es utilizada para que se asigne a los flebotomistas y direcciones. 
     * @authenticated
     * 
     * @bodyParam name string required Nombre de la zona. Example: Zona Centro de León
     * @bodyParam polygon array required Lista de puntos dónde que determinan la zona. Example: [["21.1197983033326", "-101.687003727918"]["21.1268038570971", "-101.685458775526"]["21.1238563506651", "-101.677737236023"]["21.1178366889814", "-101.679708119398"]]
     * @bodyParam polygon.* array required Tupla de valores numéricos (latitud y longitud).
     */
    public function create(Request $request){
        $validate = $request->validate([
            "name" => "required|string",
            "polygon" => ["required", new Poligon],
        ]);
        
        $validate["polygon"] = json_decode($request->polygon);
        $zone = Zone::create($validate);

        return $this->success($zone);
    }

    /**
     * update
     * Actualiza la información de una zona. 
     * @authenticated
     * 
     * @bodyParam name string required Nombre de la zona.
     * @bodyParam polygon array required Lista de puntos dónde que determinan la zona.
     * @bodyParam polygon.* array required Tupla de valores numéricos (latitud y longitud).
     */
    public function update(Request $request){
        $zone = Zone::find($request->id);

        if($zone == null){
            return $this->error("No existe un registro disponible para id = $request->id", 404);
        }

        $validate = $request->validate([
            "name" => "string",
            "polygon" => [new Poligon],
        ]);
        
        if(array_key_exists("polygon", $validate)) 
            $validate["polygon"] = json_decode($request->polygon);
        
        $zone->update($validate);
        return  $this->success($zone);
    }

    /**
     * delete
     * Elimina una zona. 
     * @authenticated
     * 
     * @urlParam id int required Identificador de la zona que se quiere eliminar.
     */
    public function delete(Request $request){
        $zone = Zone::find($request->id);

        if($zone == null){
            return $this->error("No existe un registro disponible para id = $request->id", 404);
        }else{
            $zone->delete();
            return $this->success(null, 204);
        }
    }
    
}
