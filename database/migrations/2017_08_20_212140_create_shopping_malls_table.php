<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoppingMallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoping_malls', function (Blueprint $table) {
            $table->increments('shop_id');            
            //$table->integer('shop_brandShopingMall_id');
            //$table->foreign('shop_brandShopingMall_id')->references('brandShop_id')->on('brandShopingMalls');                            
            $table->integer('shop_address_id');
            $table->integer('shop_edit_id');
            //$table->foreign('shop_edit_id')->references('id')->on('users');            
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
        Schema::drop('shoping_malls');
    }
}
