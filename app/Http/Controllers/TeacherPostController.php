<?php

namespace App\Http\Controllers;

use App\TeacherPost;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherPostController extends Controller
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


    public function addteacherpost(Request $request){

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
             'filename' => 'required',
            'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            
        ]);

        if($request->hasfile('filename'))
         {
                $image = $request->file('filename');
                $name= uniqid('thaksalawa_') . '.' . $image->getClientOriginalExtension();
                Image::make($image)->resize(1280,876)->save(\public_path('/uploads/img/' . $name));  

         }

        $advertisement = new TeacherPost;
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
       

        $advertisement->images = $name;

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
        
        $advertisement->discription = request('discription');
        $advertisement->save();
        return back();

      //  dd ($request);
    }

    public function showpost(){
        
        $ShowAds = TeacherPost::orderBy('created_at','desc')->get();
        return view('layout.advertisment.teacheradvertisement',compact('ShowAds'));
    }

    public function showmore(TeacherPost $id){
        $TeacherPost = $id;
        return view('layout.advertisment.moreinfo',compact('TeacherPost'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function searchadvertisment(Request $request)
    {
        $keyword = $request->input('searchquery');
        $subject = $request->input('subject');
        $medium =$request->input('medium');
        $stream=$request->input('stream');
        
        

        $ShowAds = TeacherPost::where(function ($query) use ($keyword) {
            $query->orwhere('district', 'LIKE', $keyword)
                  ->orWhere('province', 'LIKE', $keyword);
            })->where(function ($query) use ($subject) {

                $query->where('subject', 'LIKE', $subject);
            })->where(function ($query) use ($medium) {

                $query->where('language', 'LIKE', $medium);
            })->whereHas('teacher', function ($query) use ($stream) {

                $query->where('stream', 'LIKE', $stream);
    
            })->get();
            // dd($ShowAds);

            return view('layout.advertisment.teacheradvertisement',compact('ShowAds'));
        
            
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
     * @param  \App\TeacherPost  $teacherPost
     * @return \Illuminate\Http\Response
     */
    public function show(TeacherPost $teacherPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TeacherPost  $teacherPost
     * @return \Illuminate\Http\Response
     */
    public function edit(TeacherPost $teacherPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TeacherPost  $teacherPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeacherPost $teacherPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TeacherPost  $teacherPost
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        // dd($teacherPost);
        DB::table('teacher_posts')->where('id', '=',request('id'))->delete();
        return back();
        
    }
}
