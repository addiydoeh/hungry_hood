<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptionmenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('optionmenus', function (Blueprint $table) {
            $table->increments('opMenu_id');            
            $table->integer('opMenu_min');
            $table->integer('opMenu_max');
            $table->integer('opMenu_default');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('optionmenus');
    }
}
