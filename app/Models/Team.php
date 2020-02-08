<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table      = 'team';
    protected $primaryKey = 'team_id';

    public function players()
    {
        return $this->hasMany('App\Models\Player','team_id','team_id');
    }

}
