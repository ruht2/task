<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $task = Task::all();//traendo todos los datos de task

        return view('task', compact('task')); //llevando datos a la vista task
    }
}
