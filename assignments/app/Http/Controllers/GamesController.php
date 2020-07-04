<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
class GamesController extends Controller
{
    

    public function index(){
        $games = Game::all();
        
        return view('home', compact('games'));
    }
    
}
