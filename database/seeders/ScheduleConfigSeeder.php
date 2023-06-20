<?php

namespace Database\Seeders;

use App\Http\Controllers\ScheduleConfigController;
use Illuminate\Database\Seeder;

class ScheduleConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $config = new ScheduleConfigController();
        $config->createScheduleConfig();
    }
}
