<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\CustomerInfo;
use App\Models\Patient;
use App\Models\Role;
use App\Models\User;
use App\Models\Zone;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


/**
 * @group Users
 * 
 * CRUD de servicios para usuarios
 */
class UserController extends Controller
{
    /**
     * index
     * 
     * Muestra todos los usuarios registrados en el sistema, se entregan de manera paginada y se pueden filtrar.
     * 
     * @authenticated
     * 
     * @queryParam search string Campo que será usado para buscar coincidencias entre los usuarios
     * @queryParam per_page int Cantidad de elementos en la que se debe segmentar la paginación.
     * @queryParam page int Número de página a la que se quiere acceder
     */
    public function index(Request $request){
        $search = $request->input("search");
        $per_page = $request->input("per_page");
        $role_id = $request->input("role");

        $per_page = $per_page == null ? 15: $per_page;
        $builder = User::with(["info.addresses", "role"]);


        if(!is_null($role_id)){
            $builder = $builder->where("role_id", $role_id);
            
        } 

        if(!is_null($search)){
            $builder = $builder->where(function($query) use ($search) {
                $query->where("name", "like","%$search%")
                ->orWhere("email", "like", "%$search%")
                ->orWhere("last_name_father", "like", "%$search%")
                ->orWhere("last_name_mother", "like", "%$search%");
            });
        }

        return $this->success($builder->paginate($per_page));
    }

    /**
     * show
     * Muestra la información de un usuario 
     * 
     * @authenticated
     * 
     * @urlParam id int required Identificador del usuario al que se quiere ver 
     */
    public function show(Request $request){
        $user = User::find($request->id);

        if($user == null){
            return $this->error("No existe un registro disponible para id = $request->id", 404);
        }
        $user->load(["info.addresses", "role"]);
        return $this->success($user);
    }

    /**
     * create
     * 
     * Crea un usuario, los parámetros cambian según el rol del usuario que se desea crear. 
     * 
     * @authenticated
     * 
     * @bodyParam name string required Nombre del usuario
     * @bodyParam last_name_father string required Apellido paterno
     * @bodyParam last_name_mother string required Apellido materno
     * @bodyParam phone_number string required Número teléfonico
     * @bodyParam password string required Contraseña del usuario
     * @bodyParam email string required Correo electrónico del usuario
     * @bodyParam role_id int required Rol del usuario, para esto: 1. Administrador; 2. Flebotomista; 3. Cliente.
     * 
     * @bodyParam gender string required Género del cliente. [Hombre-Mujer] Solo cliente
     * @bodyParam birthdate date required Fecha de nacimiento Solo cliente
     * 
     * @bodyParam zone_id int required Zona a la que está asingado el flebotomista Solo flebotomista
     * 
     */
    public function create(UserRequest $request){
        $validated = $request->validated();
        $validated["password"] = Hash::make($validated["password"]);
        //$validated["email_verified_at"] = now();
        
        $user = User::create($validated);
        
        if($request->role_id == Role::$customer){
            $info = CustomerInfo::create($validated);
            $validated += ["customer_info_id" => $info->id];
            $patient = Patient::create($validated);
    
            $info->update(["patient_id" => $patient->id]);
            $info->user()->save($user);

            $user->load("info");
        }
        
        event(new Registered($user));

        return $this->success($user);
    }

    /**
     * update
     * 
     * Actualiza la información del usuario.
     * 
     * @authenticated
     * 
     * @urlParam id int required Identificar del usuario que se desea actualizar
     * 
     * @bodyParam name string Nombre del usuario
     * @bodyParam last_name_father string Apellido paterno
     * @bodyParam last_name_mother string Apellido materno
     * @bodyParam phone_number string Número teléfonico
     * @bodyParam password string Contraseña del usuario
     * 
     * @bodyParam gender string required Género del cliente. [Hombre-Mujer]. Solo cliente
     * @bodyParam birthdate date required Fecha de nacimiento. Solo cliente
     * 
     * @bodyParam zone_id int required Zona a la que está asingado el flebotomista. Solo flebotomista
     * 
     */
    public function update(UserRequest $request){
        $user = User::find($request->id);

        if(is_null($user)){
            return $this->error("No existe un registro disponible para id = $request->id", 404);
        }
        
        $validated = $request->validated();

        if(array_key_exists("password", $validated) && $user->role_id != Role::$admin){
            $validated["password"] = Hash::make($validated["password"]);
        }else if(array_key_exists("password", $validated)){
            if (Hash::check($validated["actual_password"], $user->password)){
                $validated["password"] = Hash::make($validated["password"]);
            } else {
                return $this->error("La contraseña actual no es la correcta", 400);
            }
        }

        $user->update($validated);
        
        if($user->role_id == Role::$customer){
            $info = CustomerInfo::find($user->info_id);
            $info->update($validated);
            $info->patient->update($validated);
        }

        $user = User::find($request->id);
        return $this->success($user);
    }

    /**
     * delete
     * Elimina un usuario. 
     * 
     * @authenticated
     * 
     * @urlParam id int required Identificador del usuario al que se quiere eliminar 
     */
    public function delete(Request $request){
        $user = User::find($request->id);

        if($user == null){
            return $this->error("No existe un registro disponible para id = $request->id", 404);
        }else{
            if(Role::$admin != $user->role_id) $user->info()->delete();
            $user->delete();
            return $this->success(null, 204);
        }
    }

    /**
     * create-customer
     * 
     * Registra a un nuevo usuario
     * 
     * @bodyParam name string required Nombre del usuario
     * @bodyParam last_name_father string required Apellido paterno
     * @bodyParam last_name_mother string required Apellido materno
     * @bodyParam phone_number string required Número teléfonico
     * @bodyParam password string required Contraseña del usuario
     * @bodyParam email string required Correo electrónico del usuario
     * @bodyParam role_id int required Rol del usuario, para esto: 1. Administrador; 2. Flebotomista; 3. Cliente.
     * 
     * @bodyParam gender string required Género del cliente. [Hombre-Mujer] Solo cliente
     * @bodyParam birthdate date required Fecha de nacimiento Solo cliente
     * 
     */
    public function signUpCustomer(Request $request){
        $validated = $request->validate([
            "name"=> "required|string",
            "last_name_father" => "required|string",
            "last_name_mother"=> "required|string",
            "phone_number"=> "required|min:10",
            "password" => "required|min:8",
            "email" => "required|email|unique:users",
            "gender" => "required|in:Hombre,Mujer",
            "birthdate" => "required|date",
            "primary_key" => "required|string"     
        ]);
        
        $validated["password"] = Hash::make($validated["password"]);
        $validated["role_id"] = Role::$customer;
        
        $user = User::create($validated);
        $info = CustomerInfo::create($validated);
        
        $validated += ["customer_info_id" => $info->id];
        $patient = Patient::create($validated);

        $info->update(["patient_id" => $patient->id]);
        $info->user()->save($user);
        
        event(new Registered($user));

        return $this->success($user);
    }

    /**
     * resend-verification-email
     * 
     * Reenvia el correo de verificación al usuario. Si el usuario ya está verificado responderá con un error.
     * 
     * @bodyParam email string required Correo electrónico del usuario
     */
    public function resendVerificationEmail(Request $request){
        $validate = $request->validate([
            "email" => "required|email|exists:users,email,email_verified_at,NULL",
        ]);

        $user = User::where("email", $validate["email"])->first();

        if(is_null($user)){
            return $this->error("No existe un registro disponible para email = $request->email", 404);
        }else{
            event(new Registered($user));
        }

        return $this->success(null, 204);
    }

}
