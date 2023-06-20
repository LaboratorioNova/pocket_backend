<?php

namespace Database\Seeders;

use App\Models\GlobalPhlebotomistSchedule;
use Illuminate\Database\Seeder;

class GlobalPhlebotomistScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $globalPhlebotomistSchedules = [
            // Flebotomista asignado cuando hay 1 zona disponible
            [
                'phlebotomist_number_configuration' => 1,
                'global_schedule_config_id' => 2,
                'zone_id' => 1,
                'user_id' => 5,
            ],
            // Flebotomistas asignados cuando hay 2 zonas disponibles
            [
                'phlebotomist_number_configuration' => 2,
                'global_schedule_config_id' => 3,
                'zone_id' => 2,
                'user_id' => 2,
            ],
            [
                'phlebotomist_number_configuration' => 2,
                'global_schedule_config_id' => 3,
                'zone_id' => 3,
                'user_id' => 3,
            ],
            // Flebotomistas asignados cuando hay 3 zonas disponibles
            [
                'phlebotomist_number_configuration' => 3,
                'global_schedule_config_id' => 4,
                'zone_id' => 4,
                'user_id' => 2,
            ],
            [
                'phlebotomist_number_configuration' => 3,
                'global_schedule_config_id' => 4,
                'zone_id' => 5,
                'user_id' => 3,
            ],
            [
                'phlebotomist_number_configuration' => 3,
                'global_schedule_config_id' => 4,
                'zone_id' => 6,
                'user_id' => 4,
            ],
            // Flebotomistas asignados cuando hay 4 zonas disponibles
            [
                'phlebotomist_number_configuration' => 4,
                'global_schedule_config_id' => 5,
                'zone_id' => 7,
                'user_id' => 2,
            ],
            [
                'phlebotomist_number_configuration' => 4,
                'global_schedule_config_id' => 5,
                'zone_id' => 8,
                'user_id' => 3,
            ],
            [
                'phlebotomist_number_configuration' => 4,
                'global_schedule_config_id' => 5,
                'zone_id' => 9,
                'user_id' => 4,
            ],
            [
                'phlebotomist_number_configuration' => 4,
                'global_schedule_config_id' => 5,
                'zone_id' => 10,
                'user_id' => 5,
            ],
            // Flebotomistas asignados cuando hay 5 zonas disponibles
            [
                'phlebotomist_number_configuration' => 5,
                'global_schedule_config_id' => 6,
                'zone_id' => 11,
                'user_id' => 2,
            ],
            [
                'phlebotomist_number_configuration' => 5,
                'global_schedule_config_id' => 6,
                'zone_id' => 12,
                'user_id' => 3,
            ],
            [
                'phlebotomist_number_configuration' => 5,
                'global_schedule_config_id' => 6,
                'zone_id' => 13,
                'user_id' => 4,
            ],
            [
                'phlebotomist_number_configuration' => 5,
                'global_schedule_config_id' => 6,
                'zone_id' => 14,
                'user_id' => 5,
            ],
            [
                'phlebotomist_number_configuration' => 5,
                'global_schedule_config_id' => 6,
                'zone_id' => 15,
                'user_id' => 6,
            ],
        ];

        foreach($globalPhlebotomistSchedules as $globalPhlebotomistSchedule) {
            GlobalPhlebotomistSchedule::create($globalPhlebotomistSchedule);
        }
    }
}
