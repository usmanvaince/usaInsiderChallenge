<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $table        = 'match';
    protected $primaryKey   = 'match_id';


    public function team1()
    {
        return $this->belongsTo('App\Models\Team','team_1');
    }

    public function team2()
    {
        return $this->belongsTo('App\Models\Team','team_2');
    }

    public function tossWinner()
    {
        return $this->belongsTo('App\Models\Team','toss_winner');
    }
    public function tossDecision()
    {
        return $this->belongsTo('App\Models\TossDecision','toss_decide');
    }
}
