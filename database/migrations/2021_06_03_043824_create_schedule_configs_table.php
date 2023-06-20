<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScheduleConfigsTable extends Migration
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
        Schema::create('schedule_configs', function (Blueprint $table) {
            $table->id();
            $table->integer("appointment_duration");
            $table->timestamp("start_date");
            $table->timestamp("end_date")->nullable();
            $table->integer("quantity_zones");
            $table->softDeletes();
            $table->timestamps();
        });

        /**
         * Creamos la tabla que servirá para guardar la configuración de los horarios de comida
         */
         Schema::create('breakfast_schedules', function (Blueprint $table) {
            $table->id();
            $table->integer('duration');
            $table->timestamp("start_date");
            $table->timestamp("end_date");
            $table->foreignId("schedule_config_id")->constrained();
            $table->softDeletes();
            $table->timestamps();
        });

        /**
         * Creamos la tabla que servirá para guardar la configuración de los flebotomistas
         */
        Schema::create('phlebotomist_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId("schedule_config_id")->constrained();
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
        Schema::table("phlebotomist_schedules", function (Blueprint $table){
            $table->dropIfExists('schedule_config_id');
            $table->dropIfExists('zone_id');
            $table->dropIfExists('user_id');
        });

        Schema::dropIfExists('phlebotomist_schedules');
        Schema::dropIfExists('breakfast_schedules');
        Schema::dropIfExists('schedule_configs');
    }
}
