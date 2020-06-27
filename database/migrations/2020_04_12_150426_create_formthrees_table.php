<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormthreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formthrees', function (Blueprint $table) {
            $table->string('id');
            $table->string('fname');
            $table->string('status');
            $table->string('lname');
            $table->string('phone');
            $table->string('email');
            $table->string('KCPEKCSEmarks');
            $table->string('form');
            $table->string('stream')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('cell')->nullable();
            $table->string('kin_email')->nullable();
            $table->string('nationalid')->nullable();
            $table->string('kin_relationship')->nullable();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('kin_cell')->nullable();
            $table->string('kinemail')->nullable();
            $table->string('national_id')->nullable();
            $table->string('kinrelationship')->nullable();
            $table->string('sweater')->nullable();
            $table->string('shoes')->nullable();
            $table->string('sock')->nullable();
            $table->string('shirt')->nullable();
            $table->string('t_shirt')->nullable();
            $table->string('jacket')->nullable();
            $table->string('scout')->nullable();
            $table->string('health')->nullable();
            $table->string('east')->nullable();
            $table->string('west')->nullable();
            $table->string('south')->nullable();
            $table->string('north')->nullable();
            $table->string('discipline')->nullable();
            $table->string('image');
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
        Schema::dropIfExists('formthrees');
    }
}
