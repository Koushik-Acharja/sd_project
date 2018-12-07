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
            $table->string('description', 150);->nullable();
            $table->string('day', 10);
            $table->string('hour', 10);
            $table->string('min', 10)->nullable();
            $table->string('location', 100);
            $table->string('sponsors', 200)->nullable();
            $table->string('guest', 10);
            $table->string('event_type', 60)->nullable();
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
