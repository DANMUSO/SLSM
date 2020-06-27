<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventimetablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventimetables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('eventdate');
            $table->string('typevent');
            $table->string('venue');
            $table->string('audience');
            $table->string('guest');
            $table->string('duration');
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
        Schema::dropIfExists('eventimetables');
    }
}
