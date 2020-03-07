<?php

namespace App\Http\Controllers;

use App\Student;
use App\TeacherPost;
use Illuminate\Http\Request;
use App\StudentPost;
use Auth;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function studentprofile(){
        return view('layout.studentprofile.studentprofile');
    }
    public function changedetails(){
        return view('layout.studentprofile.studentprofile');
    }
    public function editetails(){
        return view('layout.studentprofile.studentprofile');
    }
    public function findteacher(){
        $ShowAds = TeacherPost::orderBy('created_at','desc')->get();
        return view('layout.advertisment.teachpost',compact('ShowAds'));
    }

    public function showrequest(StudentPost $StudentPost){

        $studentID = Auth::user()->id;
        $StudentPost=StudentPost::where(function($query) use($studentID){
            $query->where('student_id','=',$studentID);
        })->paginate(3);
     

        return view('layout.studentprofile.studentprofile',compact('StudentPost'));
    }
    public function editrequest(StudentPost $id){
        
        $studentPost = StudentPost::find($id->id);
        return view('layout.studentprofile.studentprofile', compact('studentPost'));
    }
    public function storeeditrequest(Request $request){
        $request->validate([
            'name' => 'required|max:50|min:3',
            'language' => 'required',
            'subject' => 'required',
            'district' => 'required',
            'postalCode' => 'required',
            'province' => 'required',
            'discription' => 'required|min:3',
            'contactNumber' => 'required',
            'email' => 'email|required',
            // 'filename' => 'required',
            // 'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ]);
        $advertisement = StudentPost::find(request('id'));

        $advertisement->student_id = request('student_id');
        $advertisement->name = request('name');
        $advertisement->language = request('language');
        $advertisement->subject = request('subject');
        $advertisement->province = request('province');
        $advertisement->postalCode = request('postalCode');
        $advertisement->district = request('district');
        $advertisement->contactNumber = request('contactNumber');
        $advertisement->email = request('email');

        if($request->has('monday')){
            $advertisement->monday=1;
        }else{
            $advertisement->monday=0;
        }

        if($request->has('tuesday')){
            $advertisement->tuesday=1;
        }else{
            $advertisement->tuesday=0;
        }

        if($request->has('wednesday')){
            $advertisement->wednesday=1;
        }else{
            $advertisement->wednesday=0;
        }

        if($request->has('thursday')){
            $advertisement->thursday=1;
        }else{
            $advertisement->thursday=0;
        }

        if($request->has('friday')){
            $advertisement->friday=1;
        }else{
            $advertisement->friday=0;
        }

        if($request->has('saturday')){
            $advertisement->saturday=1;
        }else{
            $advertisement->saturday=0;
        }

        if($request->has('sunday')){
            $advertisement->sunday=1;
        }else{
            $advertisement->sunday=0;
        }

        if($request->has('morning')){
            $advertisement->morning=1;
        }else{
            $advertisement->morning=0;
        }

        if($request->has('afternoon')){
            $advertisement->afternoon=1;
        }else{
            $advertisement->afternoon=0;
        }

        if($request->has('evening')){
            $advertisement->evening=1;
        }else{
            $advertisement->evening=0;
        }

        if($request->has('night')){
            $advertisement->night=1;
        }else{
            $advertisement->night=0;
        }
        if($request->has('group')){
            $advertisement->group=1;
        }else{
            $advertisement->group=0;
        }
        if($request->has('individual')){
            $advertisement->individual=1;
        }else{
            $advertisement->individual=0;
        }
        if($request->has('hall')){
            $advertisement->hall=1;
        }else{
            $advertisement->hall=0;
        }

        $advertisement->discription = request('discription');
        $advertisement->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
