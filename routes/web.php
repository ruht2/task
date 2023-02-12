<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\KeanuController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/task', function(){
//     return view('task');
// });

// Route::get('/ruht', function () {
//     return view('ruht');
// });


Route::get('task', [TaskController::class,'index'])->name('task.index');

// creando una ruta para la vista ruht
Route::get('ruht', [KeanuController::class,'index'])->name('keanu.index');

Route::get('book', [BookController::class, 'book'])->name('book.book');
//para crear un controlador -> php artisan make:controller WorkController
//creas vista - y función publica. 