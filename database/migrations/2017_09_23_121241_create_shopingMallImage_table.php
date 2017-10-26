<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopingMallImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoping_mall_images', function (Blueprint $table) {
            $table->increments('shopImage_id');
            $table->integer('shopImage_shop_id');
            $table->string('shopImage_path');            
            $table->integer('shopImage_language_id');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('shoping_mall_images');
    }
}
