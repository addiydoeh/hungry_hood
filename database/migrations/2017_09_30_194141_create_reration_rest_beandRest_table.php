<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRerationRestBeandRestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relation_rest_brandRest', function (Blueprint $table) {
            $table->increments('reRest_id');
            $table->integer('reRest_rest_id');
            $table->integer('reRest_brandRest_id');
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
        Schema::drop('relation_rest_brandRest');
    }
}
