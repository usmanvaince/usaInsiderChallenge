<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player', function (Blueprint $table) {

            $table->bigIncrements('player_id');
            $table->string('player_name');
            $table->date('dob');
            $table->date('debut_date');

            $table->unsignedBigInteger('batsman_id')->nullable();
            $table->unsignedBigInteger('bowler_id')->nullable();
            $table->unsignedBigInteger('team_id')->nullable();


            $table->foreign('batsman_id')->references('batsman_id')->on('batsman');
            $table->foreign('bowler_id')->references('bowler_id')->on('bowler');
            $table->foreign('team_id')->references('team_id')->on('team');

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
        Schema::dropIfExists('player');
    }
}
