<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/task', function(){
//     return view('task');
// });

Route::get('/ruht', function () {
    return view('ruht');
});


Route::get('task', [TaskController::class,'index'])->name('task.index');



    