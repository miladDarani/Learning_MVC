<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\Category;
class GamesController extends Controller
{
    
    /**
     * return the main page with ALL records
     * @return arrays
     */
    public function index(){
        $games = Game::with('category')->latest()->get();
        $categories = Category::all();
        $title = "Home";
        return view('home1', compact('games', 'categories', 'title'));
    }

    /**
     * return the detail page with ONE record
     * @param  integer
     * @return array
     */
    public function show($id){
        
        $game=Game::find($id);
        $games=Game::limit(4)->offset(4)->get();
        $categories = Category::all();
        $title = 'Detail';

        return view('/detail', compact('game','title','games', 'categories'));
    }

    /**
     * returns about page
     * @return array
     */
    public function about(){
        $categories = Category::all();
        $title = 'About';
        return view('about',compact('categories', 'title'));
    }

    /**
     * return the contact page
     * @return array
     */
    public function contact(){
        $title = 'Contact';
        $categories = Category::all();
        return view('contact',compact('categories', 'title'));
    }

}
