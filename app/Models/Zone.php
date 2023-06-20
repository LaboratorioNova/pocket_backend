<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Modelo que guarda los datos de las rutas
 */
class Zone extends Model
{
    use HasFactory, SoftDeletes;


    protected $casts = [
        "polygon" => "array"
    ];

    protected $fillable = [
        "name",
        "enable",
        "phlebotomist_number_configuration",
        "polygon"
    ];
}
