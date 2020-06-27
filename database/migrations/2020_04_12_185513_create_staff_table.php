<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->string('fname');
            $table->string('lname');
            $table->string('phone');
            $table->string('email');
            $table->string('nationalid');
            $table->string('gender');
            $table->string('birth');
            $table->string('nationality');
            $table->string('image');
            $table->string('accountholder');
            $table->string('account');
            $table->string('bank');
            $table->string('branch');
            $table->string('id');
            $table->string('department');
            $table->string('designation');
            $table->string('joindate');
            $table->string('basic');
            $table->string('transport');
            $table->string('medical');
            $table->string('house');
            $table->string('nssf');
            $table->string('nhif');
            $table->string('county');
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
        Schema::dropIfExists('staff');
    }
}
