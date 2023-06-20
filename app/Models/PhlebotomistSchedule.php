<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Modelo que guarda la relación entre la ruta y el flebotomista asignado a esa ruta en un día en específico
 */
class PhlebotomistSchedule extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "schedule_config_id",
        "zone_id",
        "user_id"
    ];

    public $hidden = [
        "deleted_at"
    ];

    public function scheduleConfig() {
        return $this->belongsTo(ScheduleConfig::class, "schedule_config_id");
    }

    public function zone() {
        return $this->belongsTo(Zone::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    /**
     * @param showPhlebotomist añade información del flebotomista.
     * @param loadDetails añade información de las citas reservadas.
     */
    public function schedule($showPhlebotomist = false, $loadDetails = true) {
        $config = PhlebotomistSchedule::find($this->id)->scheduleConfig;
        $routes = $config->phlebotomistSchedules->pluck("id");

        $orders = Order::whereIn("phlebotomist_schedule_id", $routes)
            ->where("order_state_id", "!=", OrderState::CANCELED)->get();

        $breakFasts = $config->breakfastSchedules->map(fn ($bf) => [
            "start_date" => Carbon::parse($bf->start_date),
            "end_date" => Carbon::parse($bf->end_date)->subMinute(),
            "duration" => $bf->duration,
        ]);

        $start = Carbon::parse($config->start_date);
        $end = Carbon::parse($config->end_date);
        $duration = $config->appointment_duration;
        $schedule = [];

        $index = 0;

        /** Construir el listado de horarios disponibles */
        do {
            $areInBreakFast = false;
            $isReserved = false;
            $reservedOrder = null;
            /// Validamos sí está en el almuerzo ese horario
            for ($i = 0, $e = $breakFasts->count(); $i < $e; $i++) {
                $bf = $breakFasts[$i];

                if ($start->between($bf["start_date"], $bf["end_date"])) {
                    $areInBreakFast = true;
                    break;
                }
            }

            /// Validamos sí ese horario ya está reservado
            if (!$orders->isEmpty() && !$areInBreakFast) {
                for ($i = 0, $e = $orders->count(); $i < $e; $i++) {
                    $order = $orders[$i];
                    $isReserved = $start->between(
                        Carbon::parse($order->start_date),
                        Carbon::parse($order->end_date)->subMinute(),
                    ) && $order->user_id == $this->user_id;

                    if ($isReserved) {
                        $reservedOrder = $order;
                        break;
                    }
                }
            }

            $appointment = [
                "index" => $index++,
                "start_date" => $start->toDateTimeString(),
                "end_date" => $start->copy()->addMinutes($duration)->toDateTimeString(),
                "isReserved" => $isReserved,
                "isBreakFast" => $areInBreakFast
            ];
            
            if(!is_null($reservedOrder) && $loadDetails){
                $appointment["order_id"] = $reservedOrder?->id;
                
                $appointment["customer"] = [
                    "id" => $reservedOrder?->customer->user->id,
                    "name" => $reservedOrder?->customer->user->fullName(),
                    "email" => $reservedOrder?->customer->user->email,
                ];

                $appointment["address"] = $reservedOrder?->address;

                if($showPhlebotomist) {
                    $appointment["phlebotomist"] = [
                        "id" => $reservedOrder?->user->id,
                        "name" => $reservedOrder?->user->fullName(),
                        "email" => $reservedOrder?->user->email,
                    ];
                }
            }

            array_push($schedule, $appointment);

            $start->addMinutes($duration);
        } while ($start->isBefore($end));

        return $schedule;
    }
    
}
