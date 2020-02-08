<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('match', function (Blueprint $table) {

            $table->bigIncrements('match_id');
            $table->date('match_date');

            $table->unsignedBigInteger('team_1');
            $table->unsignedBigInteger('team_2');
            $table->unsignedBigInteger('venue_id');
            $table->unsignedBigInteger('toss_winner');
            $table->unsignedBigInteger('toss_decide');
            $table->unsignedBigInteger('win_type')->nullable();
            $table->integer('win_margin')->nullable();
            $table->unsignedBigInteger('outcome_type')->nullable();
            $table->unsignedBigInteger('match_winner')->nullable();
            $table->unsignedBigInteger('man_of_the_match')->nullable();

            $table->foreign('team_1')->references('team_id')->on('team');
            $table->foreign('team_2')->references('team_id')->on('team');
            $table->foreign('venue_id')->references('venue_id')->on('venue');
            $table->foreign('toss_winner')->references('team_id')->on('team');
            $table->foreign('toss_decide')->references('toss_id')->on('toss_decision');
            $table->foreign('win_type')->references('win_id')->on('win_type');
            $table->foreign('outcome_type')->references('outcome_id')->on('out_come');
            $table->foreign('match_winner')->references('team_id')->on('team');
            $table->foreign('man_of_the_match')->references('player_id')->on('player');
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
        Schema::dropIfExists('match');
    }
}
