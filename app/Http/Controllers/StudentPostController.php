<?php

namespace App\Http\Controllers;

use App\StudentPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentPostController extends Controller
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

    public function addstudentrequest(Request $request){

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
            'filename' => 'required',
            'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ]);

        $advertisement = new StudentPost;
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

      //  dd ($request);
    }


    public function showads(){
        $ShowAdvertisment = StudentPost::orderBy('created_at','desc')->paginate(6);
        return view('layout.advertisment.studentrequest.showrequest',compact('ShowAdvertisment'));
    }

    public function showrequest(StudentPost $id){
        $StudentPost = $id;
        return view('layout.advertisment.studentrequest.studentdetail',compact('StudentPost'));
    }

    public function searchrequest(Request $request)
    {
        $keyword = $request->input('searchquery');
        $subject = $request->input('subject');
        $medium =$request->input('medium');
        $stream=$request->input('stream');
        
        

        $ShowAdvertisment = StudentPost::where(function ($query) use ($keyword) {
            $query->orwhere('district', 'LIKE', $keyword)
                  ->orWhere('province', 'LIKE', $keyword);
            })->where(function ($query) use ($subject) {

                $query->where('subject', 'LIKE', $subject);
            })->where(function ($query) use ($medium) {

                $query->where('language', 'LIKE', $medium);
            })->whereHas('student', function ($query) use ($stream) {

                $query->where('stream', 'LIKE', $stream);
    
            })->get();

            return view('layout.advertisment.studentrequest.showrequest',compact('ShowAdvertisment'));
        
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
     * @param  \App\StudentPost  $studentPost
     * @return \Illuminate\Http\Response
     */
    public function show(StudentPost $studentPost)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StudentPost  $studentPost
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentPost $studentPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StudentPost  $studentPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentPost $studentPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StudentPost  $studentPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentPost $studentPost)
    {
        //
    }
}
