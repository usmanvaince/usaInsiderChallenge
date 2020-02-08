<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BatsManScoreBoard extends Model
{
    protected $table = 'bats_man_scored';

    public function player()
    {
        return $this->belongsTo('App\Models\Player','batsman_id');
    }
}
