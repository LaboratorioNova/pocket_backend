<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Poligon implements Rule
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
        if(gettype($array) == "array"){
            for ($i = 0, $e = count($array); $i < $e; $i++) { 
                $element = $array[0];
                if(gettype($element) != "array"){
                    $isValid = false;
                    break;
                }

                if(count($element) != 2) {
                    $isValid = false;
                    break;
                }
                
                if(gettype(doubleval($element[0])) != "double" ||  gettype(doubleval($element[1])) != "double" ) {
                    $isValid = false;
                    break;
                }

                $isValid = true;
            }
        }


        return $isValid;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message() {
        return 'El poligono enviando no cuenta con una estructura válida para ser registrada';
    }
}
