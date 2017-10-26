<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresss', function (Blueprint $table) {
            $table->increments('address_id');            
            $table->string('address_postCode',16);
            $table->string('address_phone_1',32);
            $table->string('address_phone_2',32);  
            $table->string('address_email',256);
            $table->string('address_floor',16);
            $table->string('address_lat',32);
            $table->string('address_lon',32);            
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
        Schema::drop('addresss');
    }
}

