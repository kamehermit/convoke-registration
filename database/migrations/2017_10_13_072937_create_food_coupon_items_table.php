<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodCouponItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_coupon_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('food_coupon_id')->unsigned();
            $table->integer('food_item_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('food_coupon_items', function($table){
            $table->foreign('food_coupon_id')->references('id')->on('food_coupons');
            $table->foreign('food_item_id')->references('id')->on('food_items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('food_coupon_items');
    }
}
