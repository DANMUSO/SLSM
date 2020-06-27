<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimetablethreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timetablethrees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('day');
            $table->string('lessontwo');
            $table->string('lessonthree');
            $table->string('shortbreak')->nullable();
            $table->string('lessonfive');
            $table->string('lessonsix');
            $table->string('longbreak')->nullable();
            $table->string('lessoneight');
            $table->string('lessonnine');
            $table->string('lunch')->nullable();
            $table->string('lessoneleven');
            $table->string('lessontwelve');
            $table->string('lessonthirteen');
            $table->string('lessonfourteen')->nullable();
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
        Schema::dropIfExists('timetablethrees');
    }
}
