<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/** Vista que verifica el correo de los usuarios
 * Le llega un correo a la dirección de correo del usuario al momento de registrarse
 */
Route::get('/email/verify/{id}/{hash}', [AuthController::class, "verify"])
    ->middleware(['signed'])->name('verification.verify');

    /** Mostrar el aviso de privacidad */
Route::view("/privacy", "privacy");
Route::view("/verify-email", "verify-email");