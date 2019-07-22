<?php

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

// Route::get('about', function(){

//     // $tasks = "Name";

//     // $hello = "This is my first example";

//     $names = 

//     return view('about', compact('names'));
// });


    Route::get('about', function(){
        $names = DB::Table('tasks')->get();
        return view('about', compact('names'));
    });

    Route::get('/tasks', function(){
        $names = DB::Table('tasks')->latest()->get();
        return view('tasks.index', compact('names'));
    });

    Route::get('/tasks/{id}', function($id){
    $task = DB::Table('tasks')->find($id);
    return view('tasks.tasks', compact('task'));
    });


