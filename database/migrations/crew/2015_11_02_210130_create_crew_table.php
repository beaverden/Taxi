<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrewTable extends Migration
{
    /**
     * Run the migrations.
     * ........ Columns ........ 
     * Name - member's name
     * Photo - his photo located in /img/photos
     * Info - additional info
     * ........ Columns ........ 
     * @return void
    */
    public function up()
    {
        Schema::create('crew', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->string('photo',60);
            $table->string('info',200);
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
        Schema::drop('crew');
    }
}
