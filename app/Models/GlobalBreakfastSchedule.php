<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Configuración global de horarios de comida
 * En este apartado se guardan los horarios de comida que están configurados por default.
 * Cada día se crea un nuevo registro de la configuración del horario de comida de un día, en este modelo se guarda
 * la hora de inicio y de fin de la comida de cada día, tomando en cuenta la cantidad de rutas.
 */
class GlobalBreakfastSchedule extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "global_schedule_config_id",
        "duration",
        "start_date",
        "end_date",
    ];

    public function info() {
        return $this->belongsTo(GlobalScheduleConfig::class, "id");
    }
}
