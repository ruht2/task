<?php

namespace App\Http\Controllers;
use App\Models\book;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function book(){
        $book = Book::all(); //primero creo una variable para obtener los datos "$book"
        //obtengo datos del modelo Book y por ultimo ->all()->me trae todo los datso de la BD.

        //dd($book);// se visualiza que información estoy obteniendo.
        //compact() -> es un array
        return view('book', compact('book'));
    }
}
