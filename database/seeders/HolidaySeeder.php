<?php

namespace Database\Seeders;

use App\Models\Holiday;
use Illuminate\Database\Seeder;

class HolidaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $holidays = ['2021-05-01', '2021-12-25', '2021-07-28'];
        
        foreach($holidays as $holiday) {
            Holiday::create(['holiday' => $holiday]);
        }
    }
}
