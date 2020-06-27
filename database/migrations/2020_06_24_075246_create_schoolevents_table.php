<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchooleventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schoolevents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('typevent');
            $table->string('venue');
            $table->string('startdate');
            $table->string('endate');
            $table->string('numberp');
            $table->string('participants');
            $table->string('duration');
            $table->string('resources');
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
        Schema::dropIfExists('schoolevents');
    }
}
