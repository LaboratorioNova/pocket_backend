<?php

namespace Database\Seeders;

use App\Models\GlobalZonesPerDay;
use App\Models\Holiday;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            ZoneSeeder::class,
            ServiceSeeder::class,
            UserSeeder::class,
            OrderStateSeeder::class,
            SpecialDaySeeder::class,
            GlobalScheduleConfigSeeder::class,
            GlobalBreakfastScheduleSeeder::class,
            GlobalPhlebotomistScheduleSeeder::class,
            GlobalZonesPerDaySeeder::class,
            HolidaySeeder::class,
            ScheduleConfigSeeder::class,
        ]);
    }
}
