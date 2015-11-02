<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrewTable extends Migration
{
    /**
     * Run the migrations.
     * ........ Столбцы таблицы ........ 
     * Name - имя участника
     * Photo - его фото, указывается путь в public/img/photos
     * Info - обычно - информация о участнике, его стаж и так далее
     * ........ Столбцы таблицы ........ 
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('crew', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name",50);
            $table->string("photo",60);
            $table->string("info",200);
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
