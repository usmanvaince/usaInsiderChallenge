<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team', function (Blueprint $table) {

            $table->bigIncrements('team_id');
            $table->string('team_name')->unique();
            $table->unsignedBigInteger('country_id');
            $table->integer('highest_total');
            $table->integer('lowest_total');
            $table->string('captain');
            $table->integer('rank');
            $table->integer('wins');
            $table->integer('loses');

            $table->foreign('country_id')->references('country_id')->on('country');
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
        Schema::dropIfExists('team');
    }
}
