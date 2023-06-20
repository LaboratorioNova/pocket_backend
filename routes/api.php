<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HolidayController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\SpecialDayController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ZoneController;
use App\Http\Controllers\ScheduleConfigController;
use App\Models\Role;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/** Solo para usuarios que hayan verificado su dirección de correo */
Route::group(["prefix" => "auth"], function (){
    Route::post("sign-in", [AuthController::class, "signInAdmin"]);
    Route::post("sign-in-admin", [AuthController::class, "signInAdmin"]);
    Route::post("sign-in-customer", [AuthController::class, "signInCustomer"]);
    Route::post("sign-in-phlebotomist", [AuthController::class, "signInPhlebotomist"]);

    Route::post("sign-up-customer", [UserController::class, "signUpCustomer"]);
    Route::post("resend-verification-email", [UserController::class, "resendVerificationEmail"]);

    Route::post("email-code", [AuthController::class, "emailCode"]);
    Route::post("email-code-mobile", [AuthController::class, "emailCodeMobile"]);
    Route::post("password-reset", [AuthController::class, "passwordReset"]);
});

Route::group(["middleware" => "auth:api"], function(){

    /// Revisa si el token está vigente
    Route::get("token-viability", function() {
        return response(["version" => "v1", "data" => null], 200);
    });

    Route::group(["prefix" => "users"], function () {
        /** 
         * Cualquier administrador puede ver y editar cualquier registro, 
         * pero también el propietario de la información */
        Route::group(["middleware" => "itsMyOwnInfo:id"], function (){
            Route::post("/{id}", [UserController::class, "update"])->whereNumber('id');
            Route::get("/{id}", [UserController::class, "show"])->whereNumber('id'); 
        });
        
        /** Solo los administradores pueden realizar estas acciones */
        Route::group(["middleware" => "checkUserType:".Role::$admin], function(){
            Route::get("/", [UserController::class, "index"]);
            Route::post("/create", [UserController::class, "create"]);
            Route::delete("/{id}", [UserController::class, "delete"])->whereNumber('id');
        });
    });

    /** El propietario puede acceder a la información */
    Route::group(["prefix" => "patients"], function () {
        Route::post("/{id}", [PatientController::class, "update"])->whereNumber('id');
        Route::get("/{id}", [PatientController::class, "show"])->whereNumber('id'); 
        Route::get("/", [PatientController::class, "index"]);
        Route::post("/create", [PatientController::class, "create"]);
        Route::delete("/{id}", [PatientController::class, "delete"])->whereNumber('id');
    });

    Route::group(["prefix" => "zones"], function(){
        Route::get("/", [ZoneController::class, "index"]);
        Route::get("/{id}", [ZoneController::class, "show"])->whereNumber('id');
        
        /** Solo el administrador puede crear, actualizar y eliminar zonas */
        Route::group(["middleware" => "checkUserType:".Role::$admin], function(){
            Route::post("/create", [ZoneController::class, "create"]);
            Route::post("/{id}", [ZoneController::class, "update"])->whereNumber('id');
            Route::delete("/{id}", [ZoneController::class, "delete"])->whereNumber('id');
        });

    });
    
    /** El cliente y el administrador puede usar estas rutas */
    Route::group([
            "prefix" => "addresses", 
            "middleware" => ["checkUserType:".Role::$customer.",".Role::$admin, "itsMyOwnInfo:customer"]
        ], function(){
        Route::get("/{customer}", [AddressController::class, "index"])->whereNumber("customer");
        Route::post("/{customer}/create", [AddressController::class, "create"])->whereNumber('customer');
        Route::post("/{customer}/{id}", [AddressController::class, "update"])->whereNumber('customer')->whereNumber('id');    
        Route::delete("/{customer}/{id}", [AddressController::class, "delete"])->whereNumber('customer')->whereNumber('id');
    });

    Route::group(["prefix" => "services"], function() {
        /** Cualquier persona que consulte el endpoint puede ver la lista de estudios o el detalle  */        
        Route::get("/{id}", [ServiceController::class, "show"])->whereNumber('id')
            ->withoutMiddleware("auth:api");
        Route::get("/", [ServiceController::class, "index"])
            ->withoutMiddleware("auth:api");

        /** Solo el administrador puede crear, actualizar y eliminar servicios */
        Route::group(["middleware" => "checkUserType:".Role::$admin], function(){
            Route::get("/check", [ServiceController::class, "check"]);
            Route::post("/create", [ServiceController::class, "create"]);
            Route::post("/{id}", [ServiceController::class, "update"])->whereNumber('id');
            Route::delete("/{id}", [ServiceController::class, "delete"])->whereNumber('id');
        });
    });

    /** Rutas de días festivos */
    Route::group(["prefix" => "holidays"] , function() {
        Route::get("/", [HolidayController::class, "index"]);
        Route::post("/create", [HolidayController::class, "create"]);
        Route::post("/{id}", [HolidayController::class, "update"])->whereNumber('id');
        Route::delete("/{id}", [HolidayController::class, "delete"])->whereNumber('id');
    });

    /** Rutas de días especiales (Festivos y que no se trabajan) */
    Route::group(["prefix" => "special-days"] , function() {
        Route::get("/", [SpecialDayController::class, "index"]);
        Route::post("/create", [SpecialDayController::class, "create"]);
        Route::post("/{id}", [SpecialDayController::class, "update"])->whereNumber('id');
        Route::delete("/{id}", [SpecialDayController::class, "delete"])->whereNumber('id');
    });

    Route::group(["prefix" => "schedule-configs"] , function() {
        ///Solo el administrador puede administrar las rutas
        Route::group(["middleware" => "checkUserType:".Role::$admin] , function() {
            Route::get("/", [ScheduleConfigController::class, "index"]);
            Route::post("/update/{id}", [ScheduleConfigController::class, "updateSchedule"])->whereNumber("id");
            Route::post("/update-phlebotomists", [ScheduleConfigController::class, "updatePhlebotomistsSchedule"]);
            Route::post("/update-distribution", [ScheduleConfigController::class, "updateDistribution"]);
        });

        /// Todos podrían consultar las rutas disponibles
        Route::get("/fetch-current-zones", [ScheduleConfigController::class, "fetchCurrentZones"]);
        Route::get("/phlebotomist-schedule", [ScheduleConfigController::class, "phlebotomistSchedule"]);
        Route::get("/schedule", [ScheduleConfigController::class, "schedule"]);
        Route::get("/extraordinary-schedule", [ScheduleConfigController::class, "extraordinarySchedule"]);
        Route::get("/orders", [ScheduleConfigController::class, "orders"]);
    });

    /// Solo el administrador y el cliente al que pertenezca la información pueden ejecutar acciones aquí. 
    Route::group(["prefix" => "orders"], function() {
        Route::get("/", [OrderController::class, "index"]);
        Route::get("/report", [OrderController::class, "report"]);
        Route::get("/report-csv", [OrderController::class, "reportToCsv"]);
        Route::get("/{id}", [OrderController::class, "show"])->whereNumber("id");
        Route::post("/create", [OrderController::class, "create"]);

        Route::post("/update/{id}", [OrderController::class, "update"])->whereNumber("id");
        Route::post("/canceled/{id}", [OrderController::class, "canceled"])->whereNumber("id");
        Route::post("/complete/{id}", [OrderController::class, "complete"])->whereNumber("id");
        Route::post("/active/{id}", [OrderController::class, "active"])->whereNumber("id");
        Route::post("/arrive/{id}", [OrderController::class, "arrive"])->whereNumber("id");

        Route::post("/report-location", [OrderController::class, "reportLocation"])
            ->middleware("checkUserType:".Role::$phlebotomist);

        Route::post("/mark-survey-answered/{id}", [OrderController::class, "markSurveyAnswered"])->whereNumber("id");
    });
});

// TODO: Un comentario para hacer deploy en heroku (QUITAR después)
Route::post("/schedule-configs/create", [ScheduleConfigController::class, "createScheduleConfig"]);


/**
 * @group About
 * 
 * contact
 * 
 * Entrega un número al cual se puede marcar y un whatsapp para mandar mensajes.
 * 
 */
Route::get("/contact", function() {
    return response([
        "data" => [
            "whatsapp" => "+526181588403", 
            "phone" => "6188117230", 
            "facebook" => "https://www.facebook.com/labnovamx",
            "email" => "atencion.labnova@gmail.com",
            "instagram" => "https://www.instagram.com/laboratorionovamx/",
            "spotify" => "https://open.spotify.com/show/1HL0hf1Gkb2PwgdsJaQLrV?si=a705df2396d643f5",
            "whatsappText" => "Hola mucho gusto! Quisiera consultar sus servicios!", 
        ]
    ], 200);
});


/**
 * @hideFromAPIDocumentation
 */
Route::fallback(function(){
    return response(["errors" => ["El recurso al que quieres consultar no existe. Ten un buen día ;)"]] , 404);
});