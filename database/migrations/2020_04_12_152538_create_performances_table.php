<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerformancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('performances', function (Blueprint $table) {
            $table->string('id');
            $table->string('mgrd');
            $table->string('position');
            $table->string('clsp');
            $table->string('marks');
            $table->string('point');
             $table->string('eng')->nullable();
            $table->string('kisw')->nullable();
            $table->string('math')->nullable();
            $table->string('chem')->nullable();
            $table->string('phy')->nullable();
            $table->string('bio')->nullable();
            $table->string('agr')->nullable();
            $table->string('bs')->nullable();
            $table->string('geo')->nullable();
            $table->string('hist')->nullable();
            $table->string('cre')->nullable();
            $table->string('ire')->nullable();
            $table->string('gen')->nullable();
            $table->string('hs')->nullable();
            $table->string('ad')->nullable();
            $table->string('ww')->nullable();
            $table->string('mw')->nullable();
            $table->string('bc')->nullable();
            $table->string('ele')->nullable();
            $table->string('dd')->nullable();
            $table->string('at')->nullable();
            $table->string('cs')->nullable();
            $table->string('french')->nullable();
            $table->string('german')->nullable();
            $table->string('arabic')->nullable();
            $table->string('ksl')->nullable();
            $table->string('music')->nullable();
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
        Schema::dropIfExists('performances');
    }
}
