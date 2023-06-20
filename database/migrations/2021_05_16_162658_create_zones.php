<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Creamos la tabla de zonas, que contendrá nombre y el polígono que delimitará su función. 
         */
        Schema::create('zones', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->boolean("enable")->default(true);
            $table->json("polygon");
            $table->integer("phlebotomist_number_configuration");
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
        Schema::dropIfExists('zones');
    }
}
