<?php

namespace App\Http\Controllers;
use App\Models\book;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){//Va a mostrar todos lo datos 
        $book = Book::all(); //primero creo una variable para obtener los datos "$book"
        //obtengo datos del modelo Book y por ultimo ->all()->me trae todo los datso de la BD.

        //dd($book);// se visualiza que información estoy obteniendo.
        //compact() -> es un array
        return view('Book.index', compact('book')); 
    }

    public function create(){//Va ir a una vista de crear, o formulario 
        return view('Book.create');
    }

    public function store(Request $request){//Enviar algo a la base de datos 
        $request->validate([
            'autor'=>'required',
            'nombre'=>'required',
            'color'=>'required',
            'pagina'=>'required',
        ]);

        $book = new Book();
        $book->autor = $request->autor;
        $book->nombre = $request->nombre;
        $book->color = $request->color;
        $book->pagina = $request->pagina;

        $book->save();
        return redirect()->route('book.index');
    }
    public function destroy(Book $book){
        $book->delete();
        return back();
    }
}
