<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function aboutus(){
        return view('layout.aboutus');
    }
    public function contactus(){
        return view('layout.contactus');
    }
 }
