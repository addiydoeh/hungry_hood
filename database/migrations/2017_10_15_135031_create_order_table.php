<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('order_id');
            $table->string('order_number');
            $table->string('order_countCustomer');
            $table->string('order_price');
            $table->string('order_tax');
            $table->integer('order_promotion_id');
            $table->integer('order_payment_id');
            $table->integer('order_orderStatus_id');
            $table->dateTime('order_startTime');
            $table->dateTime('order_stopTime');
            $table->integer('order_user_id');
            $table->integer('order_rest_id');
            $table->string('order_detail');
            $table->string('order_edit_id');
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
        Schema::drop('orders');
    }
}
