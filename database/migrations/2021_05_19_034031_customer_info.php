<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CustomerInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        /** 
         * Creamos tabla que contiene la información del cliente
        */
        Schema::create('customer_infos', function (Blueprint $table) {
            $table->id();
            $table->timestamp("birthdate");
            $table->string("gender");

            $table->softDeletes();
            $table->timestamps();
        }); 
        
        Schema::create('patients', function (Blueprint $table){
            $table->id();
            $table->string("name", 60);
            $table->string("last_name_father", 60);
            $table->string("last_name_mother", 60)->nullable();
            $table->string("gender", 20);
            $table->date("birthdate");
           
            $table->foreignId("customer_info_id")->constrained();
            
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('customer_infos', function (Blueprint $table) {
            $table->unsignedBigInteger("patient_id")->nullable();
            $table->foreign("patient_id")->references("id")->on("patients");
        });

        /**
         * Añadimos el tipo para cada usuario, este nos permitirá tener la capacidad de añadir 
         * más información del usuario por cáda rol diferente. Apoyandonos en la relaciones polimóficas
         * 
         * Ref. https://laravel.com/docs/8.x/eloquent-relationships#one-to-one-polymorphic-relations
         */
        Schema::table("users", function(Blueprint $table){
            $table->string('info_type')->nullable();
            $table->unsignedBigInteger("info_id")->nullable();
        });

        /**
         * Creamos la tabla para direcciones, esta se encargará de guardar todas las 
         * direcciones para el usuario cliente
         */
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string("street");
            $table->string("neighborhood");
            $table->string("num_ext", 10);
            $table->string("num_int")->nullable();
            $table->string("state");
            $table->string("city");
            $table->string("references")->nullable();
            $table->string("zip_code", 7);
            $table->double("latitude"); 
            $table->double("longitude"); 
            $table->softDeletes();
            $table->timestamps();
            
            $table->foreignId("customer_info_id")->constrained();
        }); 

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   
        Schema::table('addresses', function (Blueprint $table){
            $table->dropIfExists("addresses_customer_info_id_foreign");
        });

        Schema::table("users", function(Blueprint $table){
            $table->dropIfExists('info_type');
            $table->dropIfExists("info_id");
        });

        Schema::table("customer_infos", function(Blueprint $table){
            $table->dropForeign('customer_infos_patient_id_foreign');
            $table->dropColumn('patient_id');
        });

        Schema::table('patients', function (Blueprint $table){
            $table->dropIfExists("customer_info_id");
        });
        Schema::dropIfExists("customer_infos");
        Schema::dropIfExists("addresses");
        Schema::dropIfExists("patients");
    }
}
