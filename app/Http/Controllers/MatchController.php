<?php

namespace App\Http\Controllers;

use App\Match;

class MatchController extends Controller
{
    public function index(){
        $matches = Match::with(['team_1','team_2','winner'])->orderBy('match_on','asc');
        $matches = $matches->paginate(5);
        return view('matches')->with(compact('matches'));
    }

}
