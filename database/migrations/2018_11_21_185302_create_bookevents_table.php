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
            $table->string('title', 100);
            $table->string('description', 3000)->nullable();
            $table->string('day', 50);
            $table->string('hour', 50);
            $table->string('min', 50)->nullable();
            $table->string('location', 200);
            $table->string('sponsors', 200)->nullable();
            $table->string('guest', 150)->nullable();
            $table->string('event_type', 60)->nullable();
            $table->string('special_requirements', 100)->nullable();
            $table->string('describe', 3000)->nullable();
            $table->string('catering_info', 100)->nullable();
            $table->string('type_of_catering', 100)->nullable();
            $table->string('special_catering', 100)->nullable();
            $table->string('time_of_food', 60)->nullable();
            $table->string('catered_numbers', 60)->nullable();
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
