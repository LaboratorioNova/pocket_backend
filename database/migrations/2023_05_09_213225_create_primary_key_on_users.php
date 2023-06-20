<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrimaryKeyOnUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table("users", function(Blueprint $table){
           $table->string("primary_key")->unique()->nullable()->min(20);
       });
       Schema::table("patients", function(Blueprint $table){
        $table->string("primary_key")->unique()->nullable()->min(20);
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("users", function(Blueprint $table){
            $table->dropColumn("primary_key");
        });
        Schema::table("patients", function(Blueprint $table){
            $table->dropColumn("primary_key");
        });
    }
}
