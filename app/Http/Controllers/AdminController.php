<?php

namespace App\Http\Controllers;


use App\Admin;
use Illuminate\Http\Request;
use App\Complain;
use App\Student;
use App\User;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $complains = Complain::orderBy('created_at','desc')->get();
        return view('admin.dashboard', compact('complains'));
       
    }

    public function complains()
    {
        $complains = Complain::orderBy('created_at','desc')->get();
        return view('admin.complainsView', compact('complains'));
    }

    public function students()
    {
        $students = User::Where('role','=','student')->get();
        return view('admin.studentView', compact('students'));
    }
    public function teachers()
    {
        $teachers = User::Where('role','=','teacher')->get();
        return view('admin.teacherView', compact('teachers'));
    }
    public function studentRemove($id)
    {
        $student = User::find($id);
        $student->delete();
        return back()->with('success', 'Student removed successfully');
    }
    public function teacherRemove($id)
    {
        $teacher = User::find($id);
        $teacher->delete();
        return back()->with('success', 'Teacher removed successfully');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
