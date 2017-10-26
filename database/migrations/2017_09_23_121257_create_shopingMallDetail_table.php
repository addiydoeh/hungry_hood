<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopingMallDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoping_mall_details', function (Blueprint $table) {
            $table->increments('shopDetail_id');
            $table->text('shopDetail_detail');
            $table->integer('shopDetail_shop_id');
            $table->integer('shopDetail_language_id');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('shoping_mall_details');
    }
}
