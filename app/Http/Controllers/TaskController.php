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
    public function store(Request $request){
        $request->validate([
            'nombre'=>'required',//que se valide
            'direccion'=>'required',
        ]);
        $task = new Task();//nuevo registro
        $task->nombre = $request->nombre;//almacenar en la columna nombre, pero tiene que estar validado
        $task->direccion = $request->direccion;

        $task->save();//para que reciba la base de datos , que se guarde
        return redirect()->route('task.index');
    }
    public function destroy(Task $task){ //funcion para eliminar
        $task->delete();
        return back();
    }
}
