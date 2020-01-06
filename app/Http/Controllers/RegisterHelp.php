<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterHelp extends Controller
{
    public function registerStudent(){
        return view('auth.registerstu');
    }
    public function registerTeacher(){
        return view('auth.registertea');
    }
}
