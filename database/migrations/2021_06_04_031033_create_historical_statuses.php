<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoricalStatuses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::create('statuses', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('historical_statuses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();         
            $table->softDeletes();

            $table->foreignId("status_id")->constrained();
            $table->foreignId("order_id")->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("historical_statuses", function (Blueprint $table){
            $table->dropIfExists("status_id");
            $table->dropIfExists("order_id");
            
        });

        Schema::dropIfExists('historical_statuses');
        Schema::dropIfExists('statuses');
    }
}
