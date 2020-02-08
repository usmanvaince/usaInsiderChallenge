<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BowlerBoard extends Model
{
    protected $table = 'bowler_board';

    public function player()
    {
        return $this->belongsTo('App\Models\Player','bowler_id');
    }
}
