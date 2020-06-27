<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffattendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffattendances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('staffno');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('checkin')->nullable();
            $table->string('checkout')->nullable();
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
        Schema::dropIfExists('staffattendances');
    }
}
