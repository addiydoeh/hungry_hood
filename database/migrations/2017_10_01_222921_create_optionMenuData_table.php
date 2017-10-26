<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptionMenuDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('optionMenuDatas', function (Blueprint $table) {
            $table->increments('opMenuDat_id');
            $table->integer('opMenuDat_opMenu_id');
            $table->string('opMenuDat_name');
            $table->integer('opMenuDat_language_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('optionMenuDatas');
    }
}
