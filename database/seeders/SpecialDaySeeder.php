<?php

namespace Database\Seeders;

use App\Models\SpecialDay;
use Illuminate\Database\Seeder;

class SpecialDaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specialDays = [
            [
                "date" => "06-04",
                "day_type" => "Holiday"
            ],
            [
                "date" => "07-04",
                "day_type" => "NoWorkday"
            ],
            [
                "date" => "08-10",
                "day_type" => "Holiday"
            ]
        ];

        foreach($specialDays as $specialDay) {
            SpecialDay::create($specialDay);
        }
    }
}
