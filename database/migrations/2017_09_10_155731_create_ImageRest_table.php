<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageRestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ImageRestaurants', function (Blueprint $table) {
            $table->increments('imgRest_id');
            $table->string('imgRest_rest_id');
            $table->text('imgRest_path');       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ImageRestaurants');
    }
}
