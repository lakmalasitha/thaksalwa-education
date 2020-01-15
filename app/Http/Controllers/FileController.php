<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;
use App\Teacher;
use App\User;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = File::orderBy('created_at','desc')->get();
        //return view('inc.list')->with('teachers', $teachers);
        return view('layout.uplodefiles', compact('files'));
    }
    public function downloadFunc(){
        $files = File::orderBy('created_at','desc')->get();
        return view('layout.downloadfiles',compact('files'));
    }
    public function store(Request $request)
    {
       /* $this->validate($request,[
            'title'=>'required',
            'body'=>'required',
            'upload_file'=>'required|mimetypes:application/pdf|max:10000'
        ]);*/

        if($request->hasFile('upload_file')){
        $filenameWithExt = $request->file('upload_file')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('upload_file')->getClientOriginalExtension();
        $fileNameToStore = $filename.'-'.time().'.'.$extension;
        //$path = $request->file('upload_file')->store('toPath', ['disk' => 'my_files', $fileNameToStore]);
        $path = $request->file('upload_file')->storeAs('public/uploads', $fileNameToStore);

        $file = new File;
        $file->uploader = "teacher@gmail.com";
        $file->upload_file = $fileNameToStore;
       // $file->title = $request->input('title');
       // $file->description = $request->input('body');
        $file->save();

        return redirect()->back()->with('success', 'File uploaded successfully.');
    }
        else{
            return redirect('teachers')->with('error','No File Added');
        }

       

    //return dd($request);
        return redirect('teachers')->with('success','New File Added Successfully');
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
    


    /**
     * Display the specified resource.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, File $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $file = File::find($id);
        $file->delete();
        return back()->with('success', 'File Removed Successfully');
    }
}
