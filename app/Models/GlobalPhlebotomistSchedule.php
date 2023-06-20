<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Configuración global de flebotomistas y rutas a las que están asignados
 * En este apartado se guarda la relación entre la ruta y el flebotomista que está asignado regularmente a esa ruta
 * Cada día se crea un nuevo registro de la configuración de las rutas y flebotomistas asignados, en este modelo se guarda
 * la relación entre la ruta y el flebotomista que está asignado cada día, tomando en cuenta la cantidad de rutas del día actual.
 */
class GlobalPhlebotomistSchedule extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "global_schedule_config_id",
        "zone_id",
        "user_id"
    ];

    public function info() {
        return $this->belongsTo(GlobalScheduleConfig::class, "id");
    }
}
