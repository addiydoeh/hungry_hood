<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_datas', function (Blueprint $table) {
            $table->increments('addrDat_id');
            $table->integer('addrDat_address_id');
            $table->string('addrDat_addr');
            $table->string('addrDat_detail');
            $table->integer('addrDat_language_id');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('address_datas');
    }
}
