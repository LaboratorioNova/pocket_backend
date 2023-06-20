<?php

namespace App\Http\Requests;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;

class PatientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $user = $this->user();
        return $user->role_id == Role::$admin 
        ||  $user->role_id == Role::$phlebotomist 
        || $user->info_id == $this->customer_info_id;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [];
        $mandatoryRule = "required";

        if(!is_null($this->id)){            
            $mandatoryRule = "nullable";
        }else{
            $rules += ["customer_info_id" => "required|numeric|exists:customer_infos,id,deleted_at,NULL"];
        }

        $rules += [
            "name" => "string|$mandatoryRule",
            "last_name_father" => "string|$mandatoryRule",
            "last_name_mother" => "string|nullable",
            "gender" => "string|in:Hombre,Mujer|$mandatoryRule",
            "birthdate" => "date|before:now|$mandatoryRule"            
        ];

        return $rules;
    }
}
