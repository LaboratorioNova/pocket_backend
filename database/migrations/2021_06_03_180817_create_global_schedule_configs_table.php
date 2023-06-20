<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGlobalScheduleConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Creamos la tabla que contiene la configuración de los horarios de los flebotomistas por un día
         */
        Schema::create('global_schedule_configs', function (Blueprint $table) {
            $table->id();
            $table->integer("appointment_duration");
            $table->string("start_date");
            $table->string("end_date");
            $table->integer("quantity_zones");
            $table->softDeletes();
            $table->timestamps();
        });

        /**
         * Creamos la tabla que servirá para guardar la configuración de los horarios de comida
         */
        Schema::create('global_breakfast_schedules', function (Blueprint $table) {
            $table->id();
            $table->integer('duration');
            $table->string("start_date");
            $table->string("end_date");
            $table->foreignId("global_schedule_config_id")->constrained();
            $table->softDeletes();
            $table->timestamps();
        });

        /**
         * Creamos la tabla que servirá para guardar la configuración de los flebotomistas
         */
        Schema::create('global_phlebotomist_schedules', function (Blueprint $table) {
            $table->id();
            $table->integer("phlebotomist_number_configuration");
            $table->foreignId("global_schedule_config_id")->constrained();
            $table->foreignId("zone_id")->nullable()->constrained();
            $table->foreignId("user_id")->nullable()->constrained();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('global_breakfast_schedules');
        Schema::dropIfExists('global_phlebotomist_schedules');
        Schema::dropIfExists('global_schedule_configs');
    }
}
