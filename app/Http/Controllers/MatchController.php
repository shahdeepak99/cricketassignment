<?php

namespace App\Http\Controllers;

use App\Match;
use App\Team;
use App\Traits\UserTrait;
use App\User;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    use UserTrait;
    public function index(){
        $matches = Match::with('team')->orderBy('match_on','asc');
        $matches = $matches->paginate(5);
        $allmatches = [];
        if($matches->count()>0){
        foreach ($matches as $match) {
            $allmatches[] = [
                'id' => $match->id,
                'team1' => $this->getTeamDetails($match->team1),
                'team2' => $this->getTeamDetails($match->team2),
                'winner' => isset($match->winner_id) ? $this->getTeamDetails($match->winner_id) : null,
                'match_on' => $match->match_on,
            ];
        }
        }
        return view('matches')->with(compact('allmatches','matches'));
    }

}
