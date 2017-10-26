<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubOptionMenuDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subOptionMenuDatas', function (Blueprint $table) {
            $table->increments('subOpMenuDat_id');
            $table->integer('subOpMenuDat_subOpMenu_id');
            $table->string('subOpMenuDat_name');
            $table->integer('subOpMenuDat_language_id');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('subOptionMenuDatas');
    }
}
