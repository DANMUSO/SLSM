<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormfourattendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formfourattendances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('student_id');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('morning')->nullable();
            $table->string('evening')->nullable();
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
        Schema::dropIfExists('formfourattendances');
    }
}
