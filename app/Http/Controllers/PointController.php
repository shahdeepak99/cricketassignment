<?php

namespace App\Http\Controllers;

use App\Team;

class PointController extends Controller
{
    public function index(){
        $teams = Team::with(['match_as_team_1' => function($q){
            return $q->whereNotNull('winner_id');
        },'match_as_team_2'=> function($q){
            return $q->whereNotNull('winner_id');
        },'match_as_winner'])->get();
        $result = $teams->map(function($team){
            $total = $team->match_as_team_1->count() + $team->match_as_team_2->count();
            $wins = $team->match_as_winner->count();
            return [
                'name' => $team->name,
                'logo' => $team->logo,
                'club' => $team->club,
                'total' => $total,
                'wins' => $wins,
                'loses' => $total - $wins,
                'points' => $wins * 2,

            ];
        });
        return view('points')->with(compact('result'));
    }

}
