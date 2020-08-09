<?php

namespace App\Http\Controllers;

use App\Match;
use App\Team;
use App\Traits\UserTrait;
use App\User;
use Illuminate\Http\Request;

class PointController extends Controller
{
    use UserTrait;
    public function index(){
        $teams = Team::all();
        $allpoints = [];
        if($teams->count()>0){
        foreach ($teams as $team) {
            $wins = 0;
            $wins = $this->getTeamWins($team->id);
            $allpoints[] = [
                'id' => $team->id,
                'name' => $team->name,
                'logo' => $team->logo,
                'club' => $team->club,
                'wins' => $this->getTeamWins($team->id),
                'loses' => $this->getTeamLoses($team->id),
                'points' => isset($wins) ? $wins*2 : 0,
            ];
        }
        }
        return view('points')->with(compact('allpoints'));
    }

}
