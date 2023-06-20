<?php

namespace Database\Seeders;

use App\Models\GlobalBreakfastSchedule;
use Illuminate\Database\Seeder;

class GlobalBreakfastScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $globalBreakfastSchedules = [
            // Cero Zonas
            [
                'duration' => 60,
                'start_date' => '10:00:00',
                'end_date' => '11:00:00',
                'global_schedule_config_id' => 1
            ],
            // Una Zona
            [
                'duration' => 60,
                'start_date' => '11:00:00',
                'end_date' => '12:00:00',
                'global_schedule_config_id' => 2
            ],
            // Dos Zonas
            [
                'duration' => 30,
                'start_date' => '12:30:00',
                'end_date' => '13:00:00',
                'global_schedule_config_id' => 3
            ],
            // Tres Zonas
            [
                'duration' => 60,
                'start_date' => '10:00:00',
                'end_date' => '11:00:00',
                'global_schedule_config_id' => 4
            ],
            // Cuatro Zonas
            [
                'duration' => 30,
                'start_date' => '12:00:00',
                'end_date' => '12:30:00',
                'global_schedule_config_id' => 5
            ],
            // Cinco Zonas
            [
                'duration' => 30,
                'start_date' => '12:20:00',
                'end_date' => '12:50:00',
                'global_schedule_config_id' => 6
            ],
        ];

        foreach($globalBreakfastSchedules as $globalBreakfastSchedule) {
            GlobalBreakfastSchedule::create($globalBreakfastSchedule);
        }
    }
}
