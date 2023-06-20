<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientRequest;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;
/**
 * @group Patients
 * 
 * Administración de pacientes para usuarios
 * 
 */
class PatientController extends Controller
{
    /**
     * index
     * 
     * Muestra los pacientes de un cliente
     * 
     * @queryParam search string Campo que será usado para buscar coincidencias entre los usuarios
     * @queryParam per_page int Cantidad de elementos en la que se debe segmentar la paginación.
     * @queryParam page int Número de página a la que se quiere acceder
     * @queryParam customer int Filtra por el cliente al que pertence
    */
    public function index(Request $request){
        $search = $request->input("search");
        $customer = $request->input("customer");
        $customerInfoId = $request->input(("customer_info_id"));

        $perPage = $request->input("per_page");
        $paginated = is_null($request->input("paginated")) ? false : $request->input("paginated");
        
        $builder = Patient::query();

        if(!is_null($search)){
            $builder = $builder->where(function($query) use ($search) {
                $query->where("name", "like","%$search%")
                ->orWhere("last_name_father", "like", "%$search%")
                ->orWhere("last_name_mother", "like", "%$search%");
            });
        }

        if(!is_null($customer)){
            $user = User::find($customer);
            if($user == null){
                return $this->error("No existe un registro disponible para id = $customer", 404);
            }

            $builder = $builder->where("customer_info_id", $user->info_id);
        }
        
        if(!is_null($customerInfoId)){
            $builder = $builder->where("customer_info_id", $customerInfoId);
        }
        
        return $this->success(
            $paginated === "true" ? $builder->paginate($perPage) : $builder->get());

    }

    /**
     * show
     * 
     * Muestra la instancia de un paciente
     * 
     * @urlParam id int required Identificador del paciente. Example: 1
     */
    public function show(Request $request){
        $user = Patient::find($request->id);

        if($user == null){
            return $this->error("No existe un registro disponible para id = $request->id", 404);
        }
        
        return $this->success($user);
    }

    /**
     * create
     * 
     * Crea un paciente y lo relaciona con un cliente
     * 
     * @bodyParam name string required Nombre del usuario. Example: Juda
     * @bodyParam last_name_father string required Apellido paterno. Example: Alector
     * @bodyParam last_name_mother string required Apellido materno. Example: Vallejo
     * @bodyParam gender string required Genero del paciente. Example: Masculino
     * @bodyParam birthdate date required Fecha de nacimiento. Example: 1992-04-15
     * @bodyParam customer_info_id int required identificador del paciente. Example: 1
     */
    public function create(PatientRequest $request){
        $validated = $request->validated();
        $patient = Patient::create($validated); 
        return $this->success($patient);
    }

    /**
     * update
     * 
     * Actualiza la información de una paciente
     * 
     * @urlParam id int required Identificador del paciente. Example: 1
     * 
     * @bodyParam name string required Nombre del usuario. Example: Juda
     * @bodyParam last_name_father string required Apellido paterno. Example: Alector
     * @bodyParam last_name_mother string required Apellido materno. Example: Vallejo
     * @bodyParam gender string required Genero del paciente. Example: Masculino
     * @bodyParam birthdate date required Fecha de nacimiento. Example: 1992-04-15
     * @bodyParam customer_info_id int required identificador del paciente. Example: 1
     */
    public function update(PatientRequest $request){
        $patient = Patient::find($request->id);

        if(is_null($patient)){
            return $this->error("No existe un registro disponible para id = $request->id", 404);
        }

        $validated = $request->validated();
        unset($validated["customer_info_id"]);
        
        $patient->update($validated); 

        return $this->success($patient);
    }

    /**
     * delete
     * 
     * Elimina la instancia de un paciente de manera lógica. 
     * 
     * @urlParam id int required Identificador del paciente. Example: 1
     */
    public function delete(Request $request){
        $patient = Patient::find($request->id);

        if(is_null($patient)){
            return $this->error("No existe un registro disponible para id = $request->id", 404);
        }
        
        $patient->delete();

        return $this->success(null, 204);
    }
    
}
