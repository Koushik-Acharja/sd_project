<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookeventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookevents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customer_id', 500);
            $table->string('title', 500);
            $table->string('description', 3000)->nullable();
            $table->string('day', 50);
            $table->string('hour', 50);
            $table->string('min', 50)->nullable();
            $table->string('location', 500);
            $table->string('sponsors', 500)->nullable();
            $table->string('guest', 250)->nullable();
            $table->string('event_type', 250)->nullable();
            $table->string('special_requirements', 800)->nullable();
            $table->string('describe', 3000)->nullable();
            $table->string('catering_info', 800)->nullable();
            $table->string('type_of_catering', 800)->nullable();
            $table->string('special_catering', 800)->nullable();
            $table->string('time_of_food', 100)->nullable();
            $table->string('catered_numbers', 60)->nullable();
            $table->string('total_amount')->nullable();
            $table->string('after_discount')->nullable();
            $table->string('booking_status',30)->nullable();
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
        Schema::dropIfExists('bookevents');
    }
}
