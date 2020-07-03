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

// Route::get('/', function () {
//     $data['title'] = "Home Page";
//     return view('main', $data);
// });


// Route::get('/students', function(){
//     $data['title'] = "Student List";
//     return view('/students', $data);
// });

// Route::get('/detail', function(){
//     $data['title'] = "Student Detail";
//     return view('/students/student', $data);
// });

Route::get('/students', 'StudentController@allStudents');
Route::get('/', 'StudentController@index');
Route::get('/students/{student}/student', 'StudentController@show');
