<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\TeacherPost;
use App\StudentPost;
use App\Teacher;
use Intervention\Image\Facades\Image;

class PageController extends Controller
{
    public function aboutus(){
        return view('layout.aboutus');
    }
    public function live(){
        return view('layout.liveform');
    }
    public function contactus(){
        return view('layout.contactus');
    }
    public function myadvertisment(TeacherPost $TeacherPost){

        $teacherID = Auth::user()->id;
        $TeacherPost=TeacherPost::where(function($query) use($teacherID){
            $query->where('teacher_id','=',$teacherID);
        })->paginate(3);

        return view('layout.teacherprofile.profilehome',compact('TeacherPost'));
        

    }
    public function studentrequest(StudentPost $StudentPost){

        $studentID = Auth::user()->id;
        $StudentPost=StudentPost::where(function($query) use($studentID){
            $query->where('student_id','=',$studentID);
        })->paginate(3);

        return view('layout.studentprofile.studentprofile',compact('StudentPost'));
        

    }
    public function editprofile(){
        // return view('layout.teacherprofile.profilehome');

        // $userid = Auth::user()->id;
        // dd(Auth::user()->id);
        if ((Auth::user()->role)=='teacher') {
            $teacherID = Auth::user()->id;
            $details=Teacher::where(function($query) use($teacherID){
                $query->where('user_id','=',$teacherID);
            });

            return view('layout.teacherprofile.profilehome',compact('details'));
        }
    }
    public function changepassword(){
        return view('layout.teacherprofile.profilehome');
    }

    public function myprofile(){
        return view('layout.teacherprofile.profilehome');
    }

    public function profilehome(){
        return view('layout.teacherprofile.profilehome');
    }

    public function findstudent(){
        // $ShowAdvertisment = StudentPost::orderBy('created_at','desc')->paginate(6);
        // return view('layout.advertisment.studentrequest.studentpost',compact('ShowAdvertisment'));

        $ShowAdvertisment = StudentPost::orderBy('created_at','desc')->paginate(6);
        return view('layout.advertisment.studentrequest.showrequest',compact('ShowAdvertisment'));
    }

    public function editadvertisment(TeacherPost $id){
        
        $teacherPost = TeacherPost::find($id->id);
        //dd($teacherPost);
        return view('layout.teacherprofile.profilehome', compact('teacherPost'));
    }
    public function editteacherprofile(TeacherPost $id){
        
        $teacherdetails = TeacherPost::find($id->id);
        //dd($teacherPost);
        return view('layout.teacherprofile.profilehome', compact('teacherPost'));
    }

    public function storeeditads(Request $request){


    $request->validate([
        'name' => 'required|max:50|min:3',
        'language' => 'required',
        'subject' => 'required',
        'institude' => 'required',
        'district' => 'required',
        'postalCode' => 'required',
        'province' => 'required',
        'discription' => 'required|min:3',
        'contactNumber' => 'required',
        'email' => 'email|required',
        // 'filename' => 'required',
        'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
        
    ]);


        $advertisement = TeacherPost::find(request('id'));

        if($request->hasfile('filename'))
         {
                $image = $request->file('filename');
                $name= uniqid('thaksalawa_') . '.' . $image->getClientOriginalExtension();
                Image::make($image)->resize(1280,876)->save(\public_path('/uploads/img/' . $name));  

         }

        
        $advertisement->teacher_id = request('teacher_id');
        $advertisement->name = request('name');
        $advertisement->language = request('language');
        $advertisement->subject = request('subject');
        $advertisement->institude = request('institude');
        $advertisement->province = request('province');
        $advertisement->postalCode = request('postalCode');
        $advertisement->district = request('district');
        $advertisement->contactNumber = request('contactNumber');
        $advertisement->email = request('email');    
       

        // $advertisement->images = $name;

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
        
        $advertisement->discription = 'discription';
        $advertisement->save();
        return back();
       // return view('layout.teacherprofile.profilehome', compact('TeacherPost'));


    }

 }
