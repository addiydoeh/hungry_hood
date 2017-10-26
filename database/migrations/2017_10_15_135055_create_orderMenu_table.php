<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderMenus', function (Blueprint $table) {
            $table->increments('orderMenu_id');
            $table->integer('orderMenu_order_id');
            $table->integer('orderMenu_menu_id');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orderMenus');
    }
}
