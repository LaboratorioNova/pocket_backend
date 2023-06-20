<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
         /** Creamos la tabla de Solicitudes */
         Schema::create('order_states', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->softDeletes();
            $table->timestamps();
        });

        /** Creamos la tabla de Solicitudes */
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->double("cost");            
            $table->double("patient_cost");            
            $table->double("visit_cost");            
            
            $table->boolean("survey_answered")->default(false);
            $table->timestamp("start_date");
            $table->timestamp("end_date");

            $table->timestamps();
            $table->softDeletes();
            
            $table->timestamp("start_time")->nullable();
            $table->timestamp("arrive_time")->nullable();
            $table->timestamp("end_time")->nullable();
            $table->text("comments")->nullable();

            $table->foreignId("phlebotomist_schedule_id")->constrained();
            $table->foreignId("address_id")->constrained();
            $table->foreignId("customer_info_id")->constrained();
            $table->foreignId("user_id")->constrained();
            $table->foreignId("order_state_id")->nullable()->constrained();
        });

        Schema::create("order_order_state", function (Blueprint $table) {
            $table->foreignId("order_id")->constrained();
            $table->foreignId("order_state_id")->constrained();
            $table->timestamps();
        });
        
        Schema::create("order_patient", function (Blueprint $table){
            $table->id();
            $table->foreignId("order_id")->constrained();
            $table->foreignId("patient_id")->constrained();
        });

        /** Creamos la tabla pivote para que las ordenes puedan tener varios servicios */
        Schema::create("historical_service_order_patient", function (Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('order_patient_id');
            $table->foreign("order_patient_id")->references("id")->on("order_patient");
            $table->foreignId("historical_service_id")->constrained();
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   
        Schema::table("order_order_state", function (Blueprint $table){
            $table->dropIfExists("order_id");
            $table->dropIfExists("order_state_id");
        });

        Schema::table("historical_service_order_patient", function (Blueprint $table){
            $table->dropIfExists("order_patient_id");
            $table->dropIfExists("historical_service_id");
        });
        
        Schema::table("order_patient", function (Blueprint $table){
            $table->dropIfExists("order_id");
            $table->dropIfExists("patient_id");
        });

      

        Schema::table("orders", function (Blueprint $table){
            $table->dropIfExists("phlebotomist_schedule_id");
            $table->dropIfExists("customer_info_id");
            $table->dropIfExists("user_id");
            $table->dropIfExists("order_state_id");
            $table->dropIfExists("address_id");
        });

        Schema::dropIfExists('historical_service_order_patient');
        Schema::dropIfExists('order_patient');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('order_states');
        Schema::dropIfExists('order_order_state');
        Schema::dropIfExists('order_service');
    }
}


