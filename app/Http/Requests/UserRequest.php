<?php

namespace App\Http\Requests;

use App\Models\Role;
use App\Models\User;
use App\Rules\AvailableZones;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {           
       
        if(is_null($this->id)){
            $roleId = $this->role_id;

            $rules = [
                "name"=> "required|string",
                "last_name_father" => "required|string",
                "last_name_mother"=> "required|string",
                "phone_number"=> "required|min:10",
                "password" => "required|min:8",
                "email" => "required|email|unique:users",
                "role_id" => "required|exists:roles,id",
                //"primary_key" => "required|string",           
            ];
        }else{
            $user = User::find($this->id);
             /** Sí no existe el usuario regreso las validaciones solas, porque después eso se revisa en el controlador */
            if(is_null($user)) return [];

            $roleId = $user->role_id;
            $rules = [
                "name"=> "string",
                "last_name_father" => "string",
                "last_name_mother"=> "string",
                "phone_number"=> "string|min:10",
                "password" => "string|min:8",
                //"primary_key" => "required|string",                      
            ];

            if($this->user()->role_id != Role::$admin) {
                $rules["actual_password"] = "required_with:password|min:8";
            }
        }
        
        if($roleId == Role::$customer) {
            $rules["gender"] = "required|in:Hombre,Mujer";
            $rules["birthdate"] = "required|date";
            $rules["primary_key"] = "required|string";
        }


        return $rules;
    }
}
