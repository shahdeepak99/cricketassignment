<?php
namespace App\Traits;

use App\Match;
use App\Team;
use Illuminate\Database\Eloquent\Builder;

trait UserTrait
{
    public function getTeamDetails($q)
    {
        $row = Team::select('teams.*')
            ->where('teams.id', '=', $q)
            ->first();
        return $row;
    }

    public function getTeamWins($q)
    {
        $row = Match::all()
            ->where('winner_id', '=', $q)
            ->count();
        return $row;
    }

    public function getTeamLoses($var)
    {
        $row = Match::where('winner_id','!=', null)
            ->where('winner_id','!=',$var)
            ->where(function($q) use ($var){
                $q->where('team1', $var)
                    ->orWhere('team2', $var);
            })
            ->count();
        return $row;
    }
}
