<?php

namespace App\Http\Controllers;
use Session;
//use App\Notifications\SendContactNotification;
//use Illuminate\Support\Facades\Notification;
//use Illuminate\Notifications\Notifiable;
use Mail;

use Illuminate\Http\Request;

class SeoController extends Controller
{
    
    public function showform(){
        return view('career.seo');

    }
    public function sendmail(Request $request){
        $this->validate($request, [
            'name'=> 'required|string',
            'email'=>'required|email',
            'file' => 'required|mimes:doc,pdf,docx',
            ]
        );

        $data = array(
            'name'=>$request->name,
            'email'=>$request->email,
            'file'=>$request->file

        );

        Mail::send('emails.seo', $data, function($cv) use ($data){
            $cv->from($data['email']);
            $cv->to ('egundeyiolamide@gmail.com'); //the client's email address will go here
            $cv->subject("SEO Experts and Marketers");
            $cv->attach($data['file']->getRealPath(), array(
                'as'=> 'SEO Experts and Marketers'.'.'.$data['name'].$data['file']->getClientOriginalExtension(),
                'mime'=> $data['file']->getMimeType()
            ));

        });
        

        Session::flash('success', 'Your CV was succesfully submitted');
        return redirect()->route('career.career');
    }

}
