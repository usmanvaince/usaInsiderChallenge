<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBallByBallMatch extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Match_Id, Over_Id, Ball_Id, Innings_No, Team_Batting, Team_Bowling, Striker_Batting_Position, Striker, Non_Striker, Bowler
        Schema::create('ball_by_ball_match', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->unsignedBigInteger('match_id');
            $table->integer('over_id');
            $table->integer('ball_id');
            $table->integer('innings_no');
            $table->unsignedBigInteger('batting_team_id');
            $table->unsignedBigInteger('bowling_team_id');
            $table->unsignedBigInteger('striker_batsman_id');
            $table->unsignedBigInteger('non_striker_batsman_id');
            $table->unsignedBigInteger('bowler_id');

            $table->foreign('batting_team_id')->references('team_id')->on('team');
            $table->foreign('bowling_team_id')->references('team_id')->on('team');
            $table->foreign('striker_batsman_id')->references('player_id')->on('player');
            $table->foreign('non_striker_batsman_id')->references('player_id')->on('player');
            $table->foreign('bowler_id')->references('player_id')->on('player');

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
        Schema::dropIfExists('ball_by_ball_match');
    }
}
