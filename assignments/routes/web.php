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

Route::get('/', 'GamesController@index');
Route::get('/about', 'GamesController@about');
Route::get('/contact', 'GamesController@contact');
Route::get('/{game}/detail', 'GamesController@show');
Route::get('/{category}/category', 'CategoriesController@show');

Route::middleware('auth')->group(function(){

Route::get('/members', function (){
    $data['title'] = 'Members Only';
    return view('members',$data);
    });

});

Route::middleware(['auth','admin'])->group(function(){

    Route::get('/admin/posts', 'Admin\PostsController@index');
    Route::get('/admin', 'AdminController@home');
    Route::get('admin/posts/create', 'Admin\PostsController@create');
    Route::post('admin/posts/create', 'Admin\PostsController@store');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


