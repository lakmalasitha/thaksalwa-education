<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\User;
use App\Complain;
class ComplainsController extends Controller
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
        /*$this->validate($request,[
            'complain' => 'required'
        ]);*/

        $com = new Complain;
        $com->email = Auth::user()->email;
        $com->complain = $request->input('complain');
        $com->user_id = Auth::user()->id;
        $com->status = 'Pending';   
        $com->save();
        return redirect()->back()->with('success', 'Complain submitted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
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
    public function complainRemove($id)
    {
        $complain = Complain::find($id);
        $complain->delete();
        return back()->with('success', 'Complain addressed');
    }

    public function complainApprove($id)
    {
        $complain = Complain::find($id);
        $complain->status = 'Approved';
        $complain->save();
        return back()->with('success', 'Complain Approved');
    }



    public function destroy($id)
    {
        //
    }
}
