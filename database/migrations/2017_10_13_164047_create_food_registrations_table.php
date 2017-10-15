<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_registrations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('registration_id')->unsigned();
            //$table->integer('food_coupon_id')->unsigned();
            $table->integer('food_item_id')->unsigned();
            $table->boolean('availed')->default(false);
            $table->timestamps();
        });
        Schema::table('food_registrations', function($table){
            $table->foreign('registration_id')->references('id')->on('registrations');
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
        Schema::drop('food_registrations');
    }
}
