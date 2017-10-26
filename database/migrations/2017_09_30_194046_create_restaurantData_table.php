<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurantDatas', function (Blueprint $table) {
            $table->increments('restDat_id');
            $table->integer('restDat_rest_id');
            $table->string('restDat_name');
            $table->string('restDat_detail');
            $table->integer('restDat_language_id');
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
        Schema::drop('restaurantDatas');
    }
}
