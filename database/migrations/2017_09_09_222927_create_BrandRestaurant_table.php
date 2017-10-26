<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandRestaurantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brandrestaurants', function (Blueprint $table) {
            $table->increments('brandRest_id');
            $table->string('brandRest_name',256);
            $table->string('brandRest_image',256);
            $table->integer('brandRest_language_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('brandrestaurants');
    }
}
