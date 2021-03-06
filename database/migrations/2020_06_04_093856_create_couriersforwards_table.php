<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouriersforwardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('couriersforwards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('receiveddate');
            $table->string('registerno');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('capacity');
            $table->string('particulars');
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
        Schema::dropIfExists('couriersforwards');
    }
}
