<?php

namespace App\Http\Controllers;

use App\Models\Keanu;
use Illuminate\Http\Request;

class KeanuController extends Controller
{
    public function index(){
        $data = Keanu::all();

        return view('Keanu.index',compact('data'));
    }
    public function create(){
        return view('Keanu.create');
    }

    public function store(Request $request){
        $request->validate([
            'nombre'=>'required',
            'genero'=>'required',
            'color'=>'required',
        ]);
        $keanu = new Keanu();
        $keanu->nombre = $request->nombre;
        $keanu->genero = $request->genero;
        $keanu->color = $request->color;

        $keanu->save();
        return redirect()->route('keanu.index');

    }
}
