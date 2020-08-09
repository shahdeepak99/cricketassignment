<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    public function team_1(){
        return $this->belongsTo(Team::class,'team1','id');
    }
    public function team_2(){
        return $this->belongsTo(Team::class,'team2','id');
    }
    public function winner(){
        return $this->belongsTo(Team::class,'winner_id','id');
    }
}
