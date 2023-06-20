<?php

namespace App\Rules;

use App\Models\Zone;
use Illuminate\Contracts\Validation\Rule;

class AvailableZones implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $isValid = false;
        $array = json_decode($value);

        if(gettype($array) == "array" && count($array) != 0){
            $array = array_unique($array); 
            
            for ($i = 0, $e = count($array); $i < $e; $i++) { 
                $zone = Zone::find($array[$i]);
                if($zone != null){
                    $isValid = true;
                }else{
                    $isValid = false;
                    break;
                }
                $zone = null;
            }
        }

        return $isValid;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()  {
        return 'Las zonas que se quiere registrar no son válidas.';
    }
}
