<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menuImages', function (Blueprint $table) {
            $table->increments('menuImg_id');
            $table->integer('menuImg_menu_id');
            $table->string('menuImg_path',512);            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('menuImages');
    }
}
