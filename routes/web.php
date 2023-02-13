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
Route::get('task/create', [TaskController::class, 'create'])->name('task.create');

// creando una ruta para la vista ruht
Route::get('keanu', [KeanuController::class,'index'])->name('keanu.index');
Route::get('keanu/create',[KeanuController::class, 'create'])->name('keanu.create');
Route::post('keanu',[KeanuController::class, 'store'])->name('keanu.store');

Route::get('book', [BookController::class, 'index'])->name('book.index');
Route::get('book/create', [BookController::class, 'create'])->name('book.create'); 
Route::post('book',[BookController::class, 'store'])->name('book.store');
Route::delete('book/{book}',[BookController::class, 'destroy'])->name('book.destroy');
//para crear un controlador -> php artisan make:controller WorkController
//creas vista - y función publica. 333333