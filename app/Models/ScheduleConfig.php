<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Modelo que guarda la configuración de cantidad de rutas disponibles y horarios y tiempos de atención de un día en específico
 */
class ScheduleConfig extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "appointment_duration",
        "start_date",
        "end_date",
        "quantity_zones"
    ];

    public function breakfastSchedules() {
        return $this->hasMany(BreakfastSchedule::class, "schedule_config_id");
    }

    public function phlebotomistSchedules() {
        return $this->hasMany(PhlebotomistSchedule::class, "schedule_config_id");
    }

    public function makeExternalSchedule(int $userId) {
        $start = Carbon::parse($this->start_date);
        $end = Carbon::parse($this->end_date);

        $orders = Order::whereDate("start_date", $start)
            ->where("user_id", $userId)
            ->where("order_state_id", "!=", OrderState::CANCELED)->get();

        $breakFasts = $this->breakfastSchedules->map(fn ($bf) => [
            "start_date" => Carbon::parse($bf->start_date),
            "end_date" => Carbon::parse($bf->end_date)->subMinute(),
            "duration" => $bf->duration,
        ]);
        
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

            /// Validamos sí ese horario ya es tá reservado
            if (!$orders->isEmpty() && !$areInBreakFast) {
                for ($i = 0, $e = $orders->count(); $i < $e; $i++) {
                    $order = $orders[$i];
                    $isReserved = $start->between(
                        Carbon::parse($order->start_date),
                        Carbon::parse($order->end_date)->subMinute(),
                    ) && $order->user_id == $userId;

                    if ($isReserved) {
                        $reservedOrder = $order;
                        break;
                    }
                }
            }

            $appointment = [
                "index" => $index++,
                "start_date" => $start->toDateTimeString(),
                "end_date" => $start->copy()
                    ->addMinutes($this->appointment_duration)
                    ->toDateTimeString(),
                "isReserved" => $isReserved,
                "isBreakFast" => $areInBreakFast
            ];

            if(!is_null($reservedOrder)){
                $appointment["order_id"] = $reservedOrder?->id;

                $appointment["customer"] = [
                    "id" => $order?->customer->user->id,
                    "name" => $order?->customer->user->fullName(),
                    "email" => $order?->customer->user->email,
                ];

                $appointment["phlebotomist"] = [
                    "id" => $order?->user->id,
                    "name" => $order?->user->fullName(),
                    "email" => $order?->user->email,
                ];
            }

            array_push($schedule, $schedule);

            $start->addMinutes($this->appointment_duration);
        } while ($start->isBefore($end));

        return $schedule;
    }

    public function hasAppointmentsEngaged() {
        $phelbotomistsIds = PhlebotomistSchedule::select("id")->where("schedule_config_id", $this->id);
        return Order::whereIn("phlebotomist_schedule_id", $phelbotomistsIds)->count() > 0;
    }
    
  
}