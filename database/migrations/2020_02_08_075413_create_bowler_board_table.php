<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBowlerBoardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bowler_board', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('match_id');
            $table->unsignedBigInteger('bowler_id');
            $table->unsignedBigInteger('extra_type_id')->nullable();

            $table->integer('over_id');
            $table->integer('ball_id');
            $table->integer('maiden')->nullable();
            $table->integer('wickets');
            $table->integer('innings_no');

            $table->foreign('match_id')->references('match_id')->on('match');
            $table->foreign('bowler_id')->references('player_id')->on('player');
            $table->foreign('extra_type_id')->references('extra_id')->on('extra_type');

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
        Schema::dropIfExists('bowler_board');
    }
}
