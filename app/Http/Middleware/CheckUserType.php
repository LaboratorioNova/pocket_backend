<?php

namespace App\Http\Middleware;

use App\Traits\ApiResponser;
use Closure;
use Illuminate\Http\Request;

class CheckUserType
{
    use ApiResponser;
    /**
     * Permite análizar el rol del usuario que quiere realizar una acción. 
     * Se utilizará la función [fun_get_args] para obtener los parámetos de la fución, esto 
     * permite mandar infinitamente los roles de id que necesitemos. 
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $userRolId = $request->user()->role_id;
        // obtenemos los parámetros de la función, incluyendo $request y $next. 
        $params = func_get_args();
        // Quitamos del arreglo el parámetro $request y $next porque no los ocupamos. 
        unset($params[0]);
        unset($params[1]);
        // Generamos un nuevo array parámetros de la función.
        $roles = array_values($params);

        if(!in_array($userRolId, $roles)){
            return $this->error("No tienes permiso para realizar esta acción", 403);
        }

        return $next($request);
    }
}
