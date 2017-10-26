<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relation_menu_optionMenus', function (Blueprint $table) {
            $table->increments('reMenu_id');
            $table->integer('reMenu_menu_id');
            $table->integer('reMenu_opMenu_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('relation_menu_optionMenus');
    }
}
