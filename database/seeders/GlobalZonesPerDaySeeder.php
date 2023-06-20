<?php

namespace Database\Seeders;

use App\Models\GlobalZonesPerDay;
use Illuminate\Database\Seeder;

class GlobalZonesPerDaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $globalZonesPerDay = [
            [
                'type_day' => 'Weekday',
                'phlebotomist_number_configuration' => 3
            ],
            [
                'type_day' => 'Saturday',
                'phlebotomist_number_configuration' => 3
            ],
            [
                'type_day' => 'Sunday',
                'phlebotomist_number_configuration' => 1
            ],
            [
                'type_day' => 'Holiday',
                'phlebotomist_number_configuration' => 1
            ],
            [
                'type_day' => 'NoWorkday',
                'phlebotomist_number_configuration' => 0
            ],
        ];

        foreach($globalZonesPerDay as $zonePerDay) {
            GlobalZonesPerDay::create($zonePerDay);
        }
    }
}
