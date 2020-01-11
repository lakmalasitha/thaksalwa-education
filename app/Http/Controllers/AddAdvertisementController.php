<?php

namespace App\Http\Controllers;

use App\AddAdvertisement;
use Illuminate\Http\Request;

class AddAdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layout.advertisment.addadvertisement');
    }
    public function requst()
    {
        return view('layout.advertisment.studentrequest.studentrequest');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function olevel(){
        return view('layout.advertisment.ordinaryleveladd');
    }
    public function alevel(){
        return view('layout.advertisment.advanceleveladd');
    }
    public function olevelreq(){
        return view('layout.advertisment.studentrequest.olevelrequest');
    }
    public function alevelreq(){
        return view('layout.advertisment.studentrequest.alevelrequest');
    } 

    
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
     * @param  \App\AddAdvertisement  $addAdvertisement
     * @return \Illuminate\Http\Response
     */
    public function show(AddAdvertisement $addAdvertisement)
    {
        
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AddAdvertisement  $addAdvertisement
     * @return \Illuminate\Http\Response
     */
    public function edit(AddAdvertisement $addAdvertisement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AddAdvertisement  $addAdvertisement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AddAdvertisement $addAdvertisement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AddAdvertisement  $addAdvertisement
     * @return \Illuminate\Http\Response
     */
    public function destroy(AddAdvertisement $addAdvertisement)
    {
        //
    }

}
