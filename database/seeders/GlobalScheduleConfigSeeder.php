<?php

namespace Database\Seeders;

use App\Models\GlobalScheduleConfig;
use Illuminate\Database\Seeder;

class GlobalScheduleConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $globalScheduleConfigs = [
            [
                'id' => 1,   
                'appointment_duration' => 40,
                'start_date' => '7:20:00',
                'end_date' => '14:20:00',
                'quantity_zones' => 0,
            ],
            [
                'id' => 2,   
                'appointment_duration' => 40,
                'start_date' => '08:20:00',
                'end_date' => '15:20:00',
                'quantity_zones' => 1,
            ],
            [
                'id' => 3,
                'appointment_duration' => 60,
                'start_date' => '9:30:00',
                'end_date' => '15:00:00',
                'quantity_zones' => 2,
            ],
            [
                'id' => 4,
                'appointment_duration' => 40,
                'start_date' => '7:20:00',
                'end_date' => '14:20:00',
                'quantity_zones' => 3,
            ],
            [
                'id' => 5,
                'appointment_duration' => 35,
                'start_date' => '9:00:00',
                'end_date' => '14:00:00',
                'quantity_zones' => 4,
            ],
            [
                'id' => 6,
                'appointment_duration' => 30,
                'start_date' => '10:00:00',
                'end_date' => '15:00:00',
                'quantity_zones' => 5,
            ]
        ];

        foreach($globalScheduleConfigs as $globalScheduleConfig) {
            GlobalScheduleConfig::create($globalScheduleConfig);
        }
    }
}
