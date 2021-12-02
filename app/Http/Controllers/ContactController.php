<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller{

    public function sendMail(Request $request){
        
        $this->validate($request,[
            'Name'      => 'required',
            'Email'     => 'required|email',
            'Subject'   => 'required',
            'Message'   => 'required'
        ]);

        Mail::send('emails.contact-us',
        array(
            'name' => $request->get('Name'),
            'email' => $request->get('Email'),
            'subject' => $request->get('Subject'),
            'msg' => $request->get('Message')
        ), function($message){
            $message->from('abed.work98@gmail.com');
            $message->to('abed.work98@gmail.com', 'Admin')->subject('New message from lozaty website!');
        });

        return redirect()
                ->route('contact')
                ->with('success','Your message has been sent!');
    }
}
