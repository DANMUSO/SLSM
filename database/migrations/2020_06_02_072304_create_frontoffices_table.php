<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrontofficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontoffices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('enquiry');
            $table->string('enquirytype');
            $table->string('clientname');
            $table->string('class');
            $table->string('gender');
            $table->string('equirydate');
            $table->string('name');
            $table->string('phone');
            $table->string('followdate');
            $table->string('followup');
            $table->string('remark');
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
        Schema::dropIfExists('frontoffices');
    }
}
