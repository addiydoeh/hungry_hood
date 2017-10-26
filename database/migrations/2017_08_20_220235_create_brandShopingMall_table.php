<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandShopingMallTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brandShopingMalls', function (Blueprint $table) {
            $table->increments('brandShop_id');
            $table->string('brandShop_name',256);
            $table->string('brandShop_image',256);            
            $table->integer('brandShop_language_id');           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('brandShopingMalls');
    }
}
