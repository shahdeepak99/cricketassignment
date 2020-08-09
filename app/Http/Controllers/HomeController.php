<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $teams = Team::all();
        return view('homepage')->with(compact('teams'));
    }

    public function show(Request $request){
        $squad = Team::with('users')->find($request->id);
        return view('squad')->with(compact('squad'));
    }
}
