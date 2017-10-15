<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('category_id')->unsigned();
            $table->string('image');
            $table->longText('description');
            $table->integer('nm_tickets');
            $table->decimal('nm_tickets_amt', 6, 2);
            $table->integer('eb_tickets');
            $table->decimal('eb_tickets_amt', 6, 2);
            $table->dateTime('start_date_time');
            $table->dateTime('end_date_time');
            $table->string('room_no');
            $table->integer('participants')->unsigned();
            $table->timestamps();
        });
        Schema::table('events', function($table){
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('events');
    }
}
