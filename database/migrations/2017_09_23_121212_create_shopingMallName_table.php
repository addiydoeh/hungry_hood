<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopingMallNameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoping_mall_names', function (Blueprint $table) {
            $table->increments('shopName_id');
            $table->string('shopName_name');
            $table->integer('shopName_shop_id');
            $table->integer('shopName_language_id');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('shoping_mall_names');
    }
}
