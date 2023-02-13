<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class TaskController extends Controller
{
    public function index(){ //ESTA FUNCION NOS TRAE TODA LA INFORMACIÓN DE LA BD
        $task = Task::all();//traendo todos los datos de task

        return view('Task.index', compact('task')); //llevando datos a la vista task
    }

    public function create(){

        return view('Task.create');
    }

}
