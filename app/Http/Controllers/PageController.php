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
    public function myadvertisment(){
        return view('layout.teacherprofile.profilehome');
    }
    public function editprofile(){
        return view('layout.teacherprofile.profilehome');
    }
    public function changepassword(){
        return view('layout.teacherprofile.profilehome');
    }
    public function myprofile(){
        return view('layout.teacherprofile.profilehome');
    }

 }
