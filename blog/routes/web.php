<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/milad', function () {
    $data['subtitle'] = "This is my subtitle";
    return view('milad', $data );
});

Route::get('/about', function(){
    return 'Hello Worlds';
});

Route::get('/posts', 'PostsController@index');
Route::get('/posts/{post}/show', 'PostsController@show');

Route::get('/test', function(){
    $results = App\Post::all();
    return $results;
});
