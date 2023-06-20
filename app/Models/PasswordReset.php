<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Modelo de recuperación de contraseña
 */
class PasswordReset extends Model
{
    protected $fillable = ["token", "email"];
    public $timestamps = false;
}
