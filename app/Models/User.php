<?php

namespace App\Models;

use App\Notifications\ResetPasswordNotification;
use App\Notifications\VerifyEmailNotification;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

/**
 * Modelo que guarda los datos de los usuarios (Admin, Flebotomistas, Clientes)
 */
class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'last_name_father',
        'last_name_mother',
        'phone_number',
        'email',
        'email_verified_at',
        'password',
        'role_id',
        'primary_key',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        "password", 
        "remember_token", 
        "info_id",
        "info_type",
        "deleted_at",
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isCustomer(){
        return $this->role_id == Role::$customer;
    }

    public function isAdmin(){
        return $this->role_id == Role::$admin;
    }

    public function isPhlebotomist(){
        return $this->role_id == Role::$phlebotomist;
    }

    public function info(){
        return $this->morphTo();
    }

    public function role(){
        return $this->belongsTo(Role::class);
    }  

    public function fullName(){
        return "$this->name $this->last_name_father $this->last_name_mother";
    }

    /* Sobre escribe el correo para recuperar la contraseña */
    public function sendPasswordResetNotification($token) {
        $this->notify(new ResetPasswordNotification($token, $this));
    }

    /** Sobre escribe el correo para verificar la dirección */
    public function sendEmailVerificationNotification() {
        $this->notify(new VerifyEmailNotification($this)); 
    }
}
