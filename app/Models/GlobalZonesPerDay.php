<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Configuración global de la cantidad de rutas que están asignadas en un tipo de día
 * Por ejemplo. Si es un día entre semana, se configuran tres rutas de forma automática,
 *  si es un sábado se configuiran dos rutas, si es domingo o un día festivo se configura una ruta.
 */
class GlobalZonesPerDay extends Model
{
    use HasFactory;

    protected $fillable = [
        "type_day",
        "phlebotomist_number_configuration"
    ];
}
