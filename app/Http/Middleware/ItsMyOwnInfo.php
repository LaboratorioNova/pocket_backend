<?php

namespace App\Http\Middleware;

use App\Models\Role;
use App\Models\User;
use App\Traits\ApiResponser;
use Closure;
use Illuminate\Http\Request;

class ItsMyOwnInfo
{
    use ApiResponser;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $userId)
    {      
        $user = $request->user();
        $userRole = $user->role_id;

        if(!($userRole == Role::$admin || $user->id == $request[$userId])){            
            return $this->error("No tienes permiso para realizar esta acción", 403);
        }

        if($userRole == Role::$admin){
            $customer = User::find($request[$userId]);

            if(is_null($customer)){
                return $this->error("El cliente al que intentas consultar no existe", 404);
            } 
        }

        return $next($request);
    }
}
