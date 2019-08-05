<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class TasksController extends Controller
{

   //This is index method 
   public function index()
   {
    $names = Task::all(); //model name and call all function to fetch all data
    return view('tasks.index', compact('names'));
   }

   public function showAll($id)
   {
       $task = Task::find($id);
       return view ('tasks.tasks', compact('task'));
   }
  
}
