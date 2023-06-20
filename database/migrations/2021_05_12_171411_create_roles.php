<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        /** Creamos la tabla de roles */
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->softDeletes();
            $table->timestamps();
        });


        /** Añadimos la referencia para que cada usuario tenga un rol */
        Schema::table("users", function (Blueprint $table){
            $table->foreignId("role_id")->constrained();            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("users", function (Blueprint $table){
            $table->dropIfExists("users_role_id_foreign");
        });

        Schema::dropIfExists('roles');
    }
}
