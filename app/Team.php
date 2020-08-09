<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function users(){
        return $this->hasMany(User::class);
    }

    public function match_as_team_1(){
        return $this->hasMany(Match::class,'team1','id');
    }
    public function match_as_team_2(){
        return $this->hasMany(Match::class,'team2','id');
    }
    public function match_as_winner(){
        return $this->hasMany(Match::class,'winner_id','id');
    }
}
