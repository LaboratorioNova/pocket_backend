<?php

namespace App\Traits;

trait ApiResponser{
    
    protected function success($data, $code = 200)
    {
        return response(
            [
                "version" => "v1", 
                "data" => $data
            ], 
            $code
        );
    }

    protected function error($message, $code)
    {
        return response(
            [
                "version" => "v1", 
                "error" => $message
            ], 
            $code
        );
    }
    
}