<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubOptionMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subOptionMenus', function (Blueprint $table) {
            $table->increments('subOpMenu_id');            
            $table->string('subOpMenu_image');
            $table->string('subOpMenu_price');
            $table->integer('subOpMenu_opMenu_id');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('subOptionMenus');
    }
}
