<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trackings', function (Blueprint $table) {
            $table->id();

            $table->double("lat");
            $table->double("lng");
            
            $table->foreignId("user_id")->constrained();
            $table->foreignId("order_id")->constrained();
            
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
        Schema::table("trackings", function (Blueprint $table){
            $table->dropIfExists("user_id");
            $table->dropIfExists("order_id");
        });

        Schema::dropIfExists('trackings');
    }
}
