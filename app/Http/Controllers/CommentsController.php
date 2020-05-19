<?php

namespace App\Http\Controllers;

use App\LiveVideo\Comment;
use App\LiveVideo\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Teacher;
use DB;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    public function getTeacherData(){
        //get teacher data
        $teacherData = DB::table('teachers')->select('user_id','medium','stream')->first();
        // dd($teacherData);
    }

    public function show(){
        
    }

    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
