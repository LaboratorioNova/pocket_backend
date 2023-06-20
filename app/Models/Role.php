<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Modelo que guarda los nombres de los diferentes estatus de usuario
 */
class Role extends Model
{
    use HasFactory, SoftDeletes;

    public static $admin = 1;
    public static $phlebotomist = 2;
    public static $customer = 3;

    protected $fillable = [
        "id",
        "name",
    ];


    protected $hidden = [
        "deleted_at",
        "created_at",
        "updated_at",
    ];

}
