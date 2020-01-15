<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\MessageBag;
use App\Mail\ContactFormMail;
use App\Contact;


class ContactFormController extends Controller
{
    public function create()
    {
        return view('layout.contactus');
    }
    
    public function store(Request $request)
    {
        $data =  request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // dd($data);

        $contact = new Contact();
        $contact->name = request('name');
        $contact->email = request('email');
        $contact->message = request('message');
        $contact->save();

        //send email

        Mail::to($contact->email)->send(new ContactFormMail($data));
        return view('contact.thankYou');

       
        
    }

    public function messages()
{
        return [
            'name.required' => 'Your Name is Required',
            'email.required'  => 'Your Email is Required',
            'message.required'  => 'Your Message is Required',
        ];
}
}
 