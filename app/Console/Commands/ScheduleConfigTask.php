<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\ScheduleConfig;
use App\Models\GlobalScheduleConfig;
use App\Models\BreakfastSchedule;
use App\Models\PhlebotomistSchedule;
use App\Http\Controllers\ScheduleConfigController;
use Carbon\Carbon;

class ScheduleConfigTask extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'schedule:config';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $schedule_config = new ScheduleConfigController();
        $schedule_config->createScheduleConfig();
        /*
        // Obtener los registros de las configuraciones de los horarios de las próximas dos semanas
        $start_date = Carbon::now();
        $end_date = Carbon::now();
        $end_date = $end_date->addDays(14);
        $schedule_configs = ScheduleConfig::where("start_date", ">=", $start_date->toDateString())->where("start_date", "<=", $end_date->toDateString())->get();

        // Obtener los registros de las configuraciones globales
        $global_schedule_config = GlobalScheduleConfig::get();

        // Hacer un ciclo que tenga 14 iteraciones. Son 14 porque se van a configurar los próximos 14 días
        for ($i = 1; $i < 14; $i++) {
            $day_exists = false;
            // Incrementar un día
            $start_date = $start_date->addDay();

            // Comprobar si ya existe un registro de la configuración del horario con el día en que nos encontramos en esta iteración
            foreach($schedule_configs as $schedule_conf) {
                if (substr($schedule_conf->start_date, 0, 10) == $start_date->toDateString()){
                    $day_exists = true;
                }
            }
    
            // Si no existe un registro de ese día crear uno con la configuración global cargada en la base de datos
            if ($day_exists == false) {

                // Crear un registro con la configuración de un día
                $schedule_config_data = [
                    "appointment_duration" => $global_schedule_config[0]->appointment_duration,
                    "start_date" => $start_date->toDateString()." ".$global_schedule_config[0]->start_date,
                    "end_date" => $start_date->toDateString()." ".$global_schedule_config[0]->end_date,
                    "quantity_zones" => $global_schedule_config[0]->quantity_zones
                ];
                $schedule_config = ScheduleConfig::create($schedule_config_data);
    
                // Si se creó correctamente el registro de ScheduleConfig crear el horario de comida y asignar horarios de flebotomistas
                if ($schedule_config->id) {

                    // Crear horario de comida
                    $breakfast_data = BreakfastSchedule::create([
                        'start_date' => $start_date->toDateString()." ".$global_schedule_config[0]->global_breakfast_schedules[0]->start_date,
                        'end_date' => $start_date->toDateString()." ".$global_schedule_config[0]->global_breakfast_schedules[0]->end_date,
                        'schedule_config_id' => $schedule_config->id
                    ]);
                    $schedule_config->breakfastSchedules = $breakfast_data;
    
                    // Asignar horarios de flebotomistas
                    $phlebotomist_schedules = [];
                    foreach ($global_schedule_config[0]->global_phlebotomist_schedules as $phlebotomist_schedule) {
    
                        $phlebotomist_schedule_data = [
                            'schedule_config_id' => $schedule_config->id,
                            'user_id' => $phlebotomist_schedule->user_id,
                            'zone_id' => $phlebotomist_schedule->zone_id,
                        ];
                        array_push($phlebotomist_schedules, $phlebotomist_schedule_data);
                    }
                    
                    PhlebotomistSchedule::insert($phlebotomist_schedules);
                    $schedule_config->phlebotomist_schedules = $phlebotomist_schedules;
                }
            }
        }*/
    }
}
