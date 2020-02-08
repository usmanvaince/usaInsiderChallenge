<?php

namespace App\Http\Controllers;

use App\Models\Match;
use Illuminate\Http\Request;

class ScoreBoardController extends Controller
{
   public function showScoreBoard(Match $match)
   {
      $data['batsManScoreBoard'] = $match->with('batsManScoreBoard','batsManScoreBoard.player')->first();
      $data['bowlerBoard']       = $match->with('bowlerBoard','bowlerBoard.player')->first();

      return $data;
      return view('scoreBoard', $data);
   }
}
