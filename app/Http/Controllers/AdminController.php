<?php

namespace App\Http\Controllers;


use App\Admin;
use Illuminate\Http\Request;
use App\Complain;
use App\Student;
use App\Teacher;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
        $Students = Student::orderBy('created_at','desc')->get();
        $Teachers = Teacher::orderBy('created_at','desc')->get();
        return view('admin.dashboard', compact('complains','Students','Teachers'));
       
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

    public function addStudent(Request $request){

        $user = User::create([
            'role' => 'student',
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        $student = new Student;
            $student->user()->associate($user);
            $student->stream = $request['stream'];
            $student->medium = $request['medium'];
            $student->save();
        
        return back()->with('success', 'Student added successfully');
    }

    public function studentView($id){
        $students = User::find($id)->get();
        $stds = Student::Where('user_id','=',$id)->get();
        return view('admin.studentProfileView', compact('students','stds'));
    }

    public function addTeacher(Request $request){
        $user = User::create([
            'role' => 'teacher',
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        
        $teacher = new Teacher;
        $teacher->user()->associate($user);
        $teacher->nic = $request['NIC'];
        $teacher->stream = $request['stream'];
        $teacher->medium = $request['medium'];
        $teacher->save();

        return back()->with('success', 'Student added successfully');    
    }

    public function teacherView($id){
        $teachers = User::Where('id','=',$id)->get();
        $tchs = Teacher::Where('user_id','=',$id)->get();
        return view('admin.teacherProfileView', compact('teachers','tchs'));
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
