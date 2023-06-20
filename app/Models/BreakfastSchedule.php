<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Horarios de comida de cada día
 */
class BreakfastSchedule extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "schedule_config_id",
        "duration",
        "start_date",
        "end_date",
    ];

    public function info() {
        return $this->belongsTo(ScheduleConfig::class, "id");
    }
}
