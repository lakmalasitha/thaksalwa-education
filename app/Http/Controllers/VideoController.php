<?php

namespace App\Http\Controllers;

use App\LiveVideo\Comment;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::latest('created_at')->get();
        return view('liveStream.videoHome', ['comments' => $comments]);
    }
}
