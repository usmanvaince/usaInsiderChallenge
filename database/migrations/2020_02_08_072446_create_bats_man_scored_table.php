<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBatsManScoredTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bats_man_scored', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->unsignedBigInteger('match_id');
            $table->unsignedBigInteger('batsman_id');
            $table->integer('over_id');
            $table->integer('ball_id');
            $table->integer('runs_scored');
            $table->integer('innings_no');

            $table->foreign('match_id')->references('match_id')->on('match');
            $table->foreign('batsman_id')->references('player_id')->on('player');

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
        Schema::dropIfExists('bats_man_scored');
    }
}
