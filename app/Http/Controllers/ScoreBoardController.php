<?php

namespace App\Http\Controllers;

use App\Models\Match;
use Illuminate\Http\Request;

class ScoreBoardController extends Controller
{
   public function showScoreBoard(Match $match)
   {
       return 'usman';
   }
}
