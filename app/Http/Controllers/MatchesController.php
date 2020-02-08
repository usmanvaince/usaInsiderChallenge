<?php

namespace App\Http\Controllers;

use App\Models\Match;
use Illuminate\Http\Request;

class MatchesController extends Controller
{
    public function index(Request $request)
    {

        $matches = Match::with('team1','team2','tossWinner','tossDecision')->get();
        return view('matches', compact('matches', $matches));
    }
}
