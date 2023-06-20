<?php

namespace Database\Seeders;

use App\Models\HistoricalService;
use App\Models\Order;
use App\Models\OrderPatient;
use App\Models\OrderState;
use App\Models\Role;
use App\Models\ScheduleConfig;
use App\Models\Service;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currentDate = Carbon::now()->addDays(5);
        $limitDate = $currentDate->copy()->addDays(9);

        do {
            /// Obtener la configuración del día
            $config = ScheduleConfig::whereDate("start_date", $currentDate)->first();

            /// Obtener las zonas
            $phlebotomistSchedules = $config->phlebotomistSchedules;

            /// Iterar las zonas
            for ($i = 0, $e = count($phlebotomistSchedules); $i < $e; $i++) { 
                /// Obtener los horarios
                $startDate = Carbon::parse($config->start_date); 
                $endDate = Carbon::parse($config->end_date); 

                do {
                    /// agregar las citas. 
                    $customer = User::where("role_id", 3)->inRandomOrder()->first();
                    $address = $customer->info->addresses()->inRandomOrder()->first();
                    $services = Service::inRandomOrder()->take(3)->get();
                    $data =  [
                        "cost" => $services->sum->public_cost,                        
                        "customer_info_id" => $customer->info_id,
                        "order_state_id" => OrderState::CREATED,
                        "start_date" => $startDate,
                        "end_date" => $startDate->copy()->addMinutes($config->appointment_duration),
                        "phlebotomist_schedule_id" => $phlebotomistSchedules[$i]->id,
                        "user_id" => $phlebotomistSchedules[$i]->user_id,
                        "address_id" => $address->id,
                        
                    ];
                    
                    $order = Order::create($data);
                    
                    $order->history()->attach([OrderState::CREATED]);
                    $patient = $customer->info->patients()->inRandomOrder()->first();
                    $order->patients()->attach([$patient->id]);

                    $orderPatient = OrderPatient::where("order_id", $order->id)->where("patient_id", $patient->id)->first();
                    $historicalServices = HistoricalService::select(["id", "public_cost"])
                        ->whereIn("id", $services->pluck("id"))->get();
                    $orderPatient->historicalServices()->attach($historicalServices);

                    $startDate->addMinutes($config->appointment_duration);
                } while ($startDate->isBefore($endDate));
            }

           



            /**
             * Registrar cita
             * 
             * "start_date": "2021-09-21 9:00:00",
                "end_date": "2021-09-21 10:20:00",
                "phlebotomist_schedule_id": 5,
                "customer_info_id": 1,
                "address_id": 1,
                "patients": [
                    {
                        "id": 1,
                        "services": [1]
                    },
                    {
                        "id": 10,
                        "services": [1,2]
                    },
                    {
                        "id": 11,
                        "services": [1,2]
                    }
                ]
             */
            $currentDate->addDays(2);
        }while($currentDate->isBefore($limitDate));

    }
}
