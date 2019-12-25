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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function olevel(){
        return view('layout.advertisment.ordinaryleveladd');
    }

    public function addadvertisement(Request $request){

        // $request->validate([
        //     'name' => 'required|max:50|min:3',
        //     'language' => 'required',
        //     'subject' => 'required|regex:/^\d+(\.\d{1,2})?$/',
        //     'district' => 'required',
        //     'postalcode' => 'required|integer',
        //     'province' => 'required',
        //     'discription' => 'required|min:100',
        //     'contactNumber' => 'required|regex:/^[0-9]{10}$/',
        //     'email' => 'email|required',
        //     // 'filename' => 'required',
        //     // 'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            
        // ]);

        if($request->hasfile('filename'))
         {

            foreach($request->file('filename') as $image)
            {
                $name= uniqid('real_') . '.' . $image->getClientOriginalExtension();
                //$image->move(public_path().'/uploads/property/house', $name);
                Image::make($image)->resize(1280,876)->save(\public_path('/uploads/olevel/' . $name));  
                $data[] = $name;  
            }
         }

        $advertisement = new addadvertisement;
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
        // $advertisement->images = json_encode($data);
        $advertisement->discription = request('discription');
        $advertisement->save();
        return back();
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
        //
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
