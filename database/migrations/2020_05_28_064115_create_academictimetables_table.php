<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademictimetablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academictimetables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('day');
            $table->string('lessontwo');
            $table->string('lessonthree');
            $table->string('lessonfive');
            $table->string('lessonsix');
            $table->string('lessoneight');
            $table->string('lessonnine');
            $table->string('lessoneleven');
            $table->string('lessontwelve');
            $table->string('lessonthirteen');
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
        Schema::dropIfExists('academictimetables');
    }
}
