<?php

namespace App\Http\Requests;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {   
        $user = $this->user();
        return $user->role_id == Role::$admin 
            || $user->role_id == Role::$phlebotomist
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
        }

        $rules += [
            "survey_answered" => "boolean|nullable",
            "ignore_schedule" => "bool|required",
            "start_date" => "date|required_with:start_date|$mandatoryRule", //|after:now",
            "end_date" => "date|required_with:end_date|$mandatoryRule", //|after:now",
            "phlebotomist_schedule_id" => "numeric|exists:phlebotomist_schedules,id,deleted_at,NULL|required_with:end_date|$mandatoryRule",
            "user_id" => "nullable|numeric|exists:users,id,role_id,". Role::$phlebotomist. (is_null($this->id)? "": "|required_with:end_date"),
            "address_id" => "numeric|exists:addresses,id,deleted_at,NULL|$mandatoryRule",
            "customer_info_id" => "required|numeric|exists:customer_infos,id,deleted_at,NULL",
            "patients" => "$mandatoryRule|min:1",
            "patients.*.id" => "required|numeric|distinct|exists:patients,id,customer_info_id," . $this->customer_info_id,
            "patients.*.services" => "array|min:1|$mandatoryRule",
            "patients.*.services.*" => "numeric|exists:historical_services,id",
        ];

        return $rules;
    }
}
