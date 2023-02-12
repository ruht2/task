<?php

namespace App\Http\Controllers;

use App\Models\Keanu;
use Illuminate\Http\Request;

class KeanuController extends Controller
{
    public function index(){
        $data = Keanu::all();

        return view('ruht',compact('data'));
    }
}
