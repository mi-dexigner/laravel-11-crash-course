<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Termwind\render;

class Welcome extends Controller
{
    public function welcome(){
        return view('welcome');
    }
}
