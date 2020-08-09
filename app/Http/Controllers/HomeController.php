<?php

namespace App\Http\Controllers;

use App\Team;

class HomeController extends Controller
{
    public function index(){
        $teams = Team::all();
        return view('homepage')->with(compact('teams'));
    }

    public function show($id){
        $id = base64_decode($id);
        $squad = Team::with('users')->findOrFail($id);
        return view('squad')->with(compact('squad'));
    }
}
