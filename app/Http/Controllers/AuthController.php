<?php

namespace App\Http\Controllers;

use App\Http\Requests\CredentialRequest;
use App\Models\Order;
use App\Models\OrderState;
use App\Models\PasswordReset as PasswordResetModel;
use App\Models\Role;
use App\Models\User;
use App\Notifications\ResetPasswordNotification;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

/**
 * @group Auth
 * 
 * Servicios para la autenticación de los usuarios. Estos servicios no requieren TOKEN.
 */
class AuthController extends Controller
{   

     /**
     * sign-in
     * 
     * Inicio de sesión para usuarios. 
     * 
     * Revisa las credenciales y el rol al que se desea acceder. Esta función se integró en 
     * otros tres servicios. Para que cada rol pueda iniciar sesión en un servicio diferente.
     * Esta estrategía limita al cliente a un inicio de sesión por endpoint. 
     * 
     * @hideFromAPIDocumentation
     */
    private function signIn($credentials, $roleId){
        if(!auth()->attempt($credentials)){
            return $this->error("El usuario o contraseña no son correctos", 403);
        }

        $user = auth()->user();

        if($roleId != $user->role_id){
            return $this->error("El usuario o contraseña no son correctos", 403);
        }
        
        if(!$user->email_verified_at){
            return $this->error("Tu dirección de correo no está verificada", 403);
        }

        $token = $user->createToken("authToken")->accessToken;
        $user->load("info");
        
        if($user->isCustomer()){
            $orders = Order::select(["id", "start_date"])
                ->where("customer_info_id", $user->info_id)
                ->whereDate("start_date", '>=',  date('Y-m-d'))
                ->where("order_state_id", OrderState::CREATED)->get();

            $user["orders"] = $orders;
        }

        $user["token"] = $token;
        return $this->success($user);
    }

    /**
     * sign-in-customer
     * 
     * Inicio de sesión para usuarios de tipo cliente
     * - bodyParam __email__ string required Correo del usuario. Example: customer@vulkka.com
     * - bodyParam __password__ string required Contraseña del usuario. Example: una_facil
     * 
     * @bodyParam email string required Correo del usuario. Example: customer@vulkka.com
     * @bodyParam password string required Contraseña del usuario. Example: una_facil
     */
    public function signInCustomer(CredentialRequest $request){
        $credentials = $request->validated();
        return $this->signIn($credentials, Role::$customer);
    }
    /**
     * sign-in-admin
     * 
     * Inicio de sesión para usuarios de tipo administrador
     * - bodyParam __email__ string required Correo del usuario. Example: admin@vulkka.com
     * - bodyParam __password__ string required Contraseña del usuario. Example: una_facil
     * 
     * @bodyParam email string required Correo del usuario. Example: admin@vulkka.com
     * @bodyParam password string required Contraseña del usuario. Example: una_facil
     */
    public function signInAdmin(CredentialRequest $request){
        $credentials = $request->validated();
        return $this->signIn($credentials, Role::$admin);
    }
     /**
     * sign-in-phlebotomist
     * 
     * Inicio de sesión para usuarios de tipo proveedor
     * - bodyParam __email__ string required Correo del usuario. Example: supplier@vulkka.com
     * - bodyParam __password__ string required Contraseña del usuario. Example: una_facil
     * 
     * @bodyParam email string required Correo del usuario. Example: supplier@vulkka.com
     * @bodyParam password string required Contraseña del usuario. Example: una_facil
     */
    public function signInPhlebotomist(CredentialRequest $request){
        $credentials = $request->validated();
        return $this->signIn($credentials, Role::$phlebotomist);
    }


    /**
     * email-code
     * 
     * Se envía un código para recuperar la contraseña al correo adjunto. 
     * 
     * @bodyParam email string required Correo del usuario. Example: juda_alector@hotmail.com
     */
    public function emailCode(Request $request){
        $request->validate(['email' => 'required|email']);

        $user = User::where('email', $request->email)->get();
        
        if(count($user) == 0) {
            return $this->error("No se encontró un usuario con esa dirección de correo", 404);
        }
        $status = Password::sendResetLink($request->only('email'));

        return  $status === Password::RESET_LINK_SENT
                    ? $this->success(['status' => __($status)])
                    : $this->error(['email' => __($status)], 403);
    }

    /**
     * email-code
     * 
     * Se envía un NIP para recuperar la contraseña al correo adjunto. 
     * 
     * @bodyParam email string required Correo del usuario. Example: juda_alector@hotmail.com
     */
    public function emailCodeMobile(Request $request){
        $request->validate(['email' => 'required|email']);
        $user = User::where("email", $request->email)->first();

        if(is_null($user)){
            return $this->error("No se encontró un usuario con esa dirección de correo", 404);
        }
        $token = substr(str_shuffle(str_repeat("0123456789ABCDEFUVWXYZ", 6)), 0, 8);

        $reset = PasswordResetModel::updateOrCreate(
            ['email' => $request->email],
            ['token' => Hash::make($token)]
        );

        try {
            $user->notify(new ResetPasswordNotification(null, $user, $token));
        } catch (\Exception $e) {
            dd($e->getMessage());
            return $this->error("Error al enviar el correo de verificación, intenta más tarde.", 500);
        }

        return $this->success("Hemos enviado un correo con un NIP de seguridad para que puedas cambiar tu contraseña.");
    }


    /**
     * password-reset
     * Se cambia la contraseña del usuario por una nueva
     * 
     * @bodyParam token string Required Token de seguridad, este se debió haber obtenido por medio de un correo al consultar el servicio [email-code]
     * @bodyParam email string Required Correo del usuario. Example: juda_alector@hotmail.com
     * @bodyParam password string Required Nueva contraseña. Example: una_facil2
     * @bodyParam password_confirmation string Required Confirmación de la nueva contraseña. Example: una_facil2
     */
    public function passwordReset(Request $request){
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);
    
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));
                $user->save();
    
                event(new PasswordReset($user));
            }
        );
        return $status == Password::PASSWORD_RESET
                    ? $this->success(['status' => __($status)])
                    : $this->error(['email' => __($status)], 403);
    }

    /**
     * verify
     * 
     * Marca al usuario como verificado
     */
    public  function verify($id, $hash) {
        $user = User::find($id);
        
        abort_if(!$user, 403);
        abort_if(!hash_equals($hash, sha1($user->getEmailForVerification())), 403);
    
    
        if(!$user->hasVerifiedEmail()){
            $user->markEmailAsVerified();
            event(new Verified($user));
        }
    
        return view("verified");
    }
}
