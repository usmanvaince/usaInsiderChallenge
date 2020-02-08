<?php

use App\Http\Controllers\MatchesController;
use App\Http\Controllers\ScoreBoardController;

Route::get('/',[MatchesController::class,'index'])->name('index');
Route::get('scoreboard/{match?}',[ScoreBoardController::class,'showScoreBoard'])->name('scoreboard');
