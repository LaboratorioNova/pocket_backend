<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Configuración global de horarios de atención
 * En este apartado se guardan los horarios de atención que están configurados por default.
 * Cada día se crea un nuevo registro de la configuración del horario de atención de un día, en este modelo se guarda
 * la hora de inicio y de fin del horario de atención de cada día, tomando en cuenta la cantidad de rutas.
 */
class GlobalScheduleConfig extends Model
{
    use HasFactory;

    protected $fillable = [
        "appointment_duration",
        "start_date",
        "end_date",
        "quantity_zones",
        "day"
    ];

    /**
     * Objetos que se añaden al consultar el objeto ScheduleConfig
     */
    protected $with = [
        "global_breakfast_schedules",
        "global_phlebotomist_schedules"
    ];

    public function global_breakfast_schedules() {
        return $this->hasMany(GlobalBreakfastSchedule::class, "global_schedule_config_id");
    }

    public function global_phlebotomist_schedules() {
        return $this->hasMany(GlobalPhlebotomistSchedule::class, "global_schedule_config_id");
    }
}
