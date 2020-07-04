<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\Category;
class GamesController extends Controller
{
    

    public function index(){
        $games = Game::with('category')->latest()->get();
        $categories = Category::all();
        
        return view('home', compact('games', 'categories'));
    }

    public function show($id){
        
        $game=Game::find($id);
        $games=Game::limit(4)->offset(4)->get();;
        //get with user its related to 
        // $comments = $post->comments()->with('user')->get();
        $title = $game->title;

        return view('/detail', compact('game','title','games'));
    }

    public function about(){
        $categories = Category::all();
        return view('about',compact('categories'));
    }

     public function contact(){
        $categories = Category::all();
        return view('contact',compact('categories'));
    }

}
