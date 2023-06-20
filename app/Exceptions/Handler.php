<?php

namespace App\Exceptions;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });

        $this->renderable(function (MethodNotAllowedHttpException $e){
            return response(["errors" => [ $e->getMessage()]], 404);
        });

        $this->renderable(function (AuthenticationException $e){
            return response(["errors" => [ "Tu sesión ha expirado o no tienes permiso para realizar esta acción" ]], 403);
        });

        $this->renderable(function (AccessDeniedHttpException $e){
            return response(["errors" =>  "No tienes permiso para realizar esta acción"], 401);
        });
    }
}
