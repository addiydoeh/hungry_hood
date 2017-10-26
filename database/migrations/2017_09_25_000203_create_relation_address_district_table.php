<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationAddressDistrictTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relation_addr_districts', function (Blueprint $table) {
            $table->increments('reAddr_id');
            $table->integer('reAddr_address_id');
            $table->integer('reAddr_district_id');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('relation_addr_districts');
    }
}
