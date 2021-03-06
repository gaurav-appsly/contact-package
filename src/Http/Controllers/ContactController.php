<?php

namespace Appsly\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Appsly\Contact\Models\Contact;

use Illuminate\support\facades\Mail;
use Appsly\Contact\Mail\ContactMailable;

class ContactController extends Controller
{
    public function index(){
        return view('contact::contact');
    }
    
    public function send(Request $request){
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message, $request->name));
        // Mail::to($request->user())->send(new MailableClass);
        Contact::create($request->all());
        return redirect( route('contact') );
    }
}
