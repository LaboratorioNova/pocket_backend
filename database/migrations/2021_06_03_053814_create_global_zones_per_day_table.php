<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGlobalZonesPerDayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Creamos la tabla que servirá para saber la cantidad de rutas que tendrá cada tipo de día (Días de entre semana, sábados, domingos, días festivos).
         */
        Schema::create('global_zones_per_days', function (Blueprint $table) {
            $table->id();
            $table->string("type_day"); // weekday, saturday, sunday, holiday
            $table->integer("phlebotomist_number_configuration"); // Cantidad de rutas
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
        Schema::dropIfExists('global_zones_per_days');
    }
}
