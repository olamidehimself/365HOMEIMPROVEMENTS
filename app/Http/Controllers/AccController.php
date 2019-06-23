<?php

namespace App\Http\Controllers;
use Session;
//use App\Notifications\SendContactNotification;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Notification;
//use Illuminate\Notifications\Notifiable;
use Mail;

class AccController extends Controller
{
    //use Notifiable;

    public function showform(){
        return view('career.acc');

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

        Mail::send('emails.acc', $data, function($cv) use ($data){
            $cv->from($data['email']);
            $cv->to ('egundeyiolamide@gmail.com'); //the client's email address will go here
            $cv->subject("Accountant");
            $cv->attach($data['file']->getRealPath(), array(
                'as'=> 'accountant'.'.'.$data['name'].$data['file']->getClientOriginalExtension(),
                'mime'=> $data['file']->getMimeType()
            ));

        });
        

        Session::flash('success', 'Your CV was succesfully submitted');
        return redirect()->route('career.career');
    }



        /*public function uploadDocument(Request $request) {
            $title = $request->file('title');
            
            // Get the uploades file with name document
            $document = $request->file('document');
        
            // Required validation
            $request->validate([
                'title' => 'required|max:255',
                'document' => 'required'
            ]);
        
            // Check if uploaded file size was greater than 
            // maximum allowed file size
            if ($document->getError() == 1) {
                $max_size = $document->getMaxFileSize() / 1024 / 1024;  // Get size in Mb
                $error = 'The document size must be less than ' . $max_size . 'Mb.';
                return redirect()->back()->with('flash_danger', $error);
            }
            
            $data = [
                'document' => $document
            ];
            
            // If upload was successful
            // send the email
            $to_email = 'test@example.com';
            \Mail::to($to_email)->send(new \App\Mail\Upload($data));
            return redirect()->back()->with('flash_success', 'Your document has been uploaded.');
        }
        */
        /*Notification::route('email', 'test@gmail.com')->notify(new SendContactNotification($request));

        Session::flash('success', 'Your CV was succesfully submitted');
        return redirect()->route('career.career');*/
    
}
