<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   

        Schema::create("historical_services", function(Blueprint $table){
            $table->id();

            $table->string("name");
            $table->text("request");
            $table->double("public_cost");
            $table->integer("process_time");
            $table->boolean("enable")->default(true);

            $table->unsignedBigInteger("service_id")->nullable();

            $table->timestamps();
            $table->softDeletes();
        });

        /**
         * Tabla para servicios, estos son los estudios que el laboratorio ofrece a los clientes
         */
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->text("request");
            $table->double("public_cost");
            $table->integer("process_time");
            $table->boolean("enable")->default(true);
            
            $table->foreignId("historical_service_id")->constrained();

            $table->timestamps();
            $table->softDeletes();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   
        Schema::table('services', function(Blueprint $table){
            $table->dropIfExists("historical_service_id");
        });

        Schema::dropIfExists('services');
        Schema::dropIfExists('historical_services');
    }
}
