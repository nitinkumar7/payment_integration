<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
//use App\Mail\SendMail;

class mailController extends Controller
{
    public function send(Request $request){
    	 $request->validate([
                'email'=>'required'
            ]);
        $data = [
               'email'=>$request->email,
               'amount'=>$request->get('amount'), 
        ];

        Mail:: send('front.mail',$data, function($message) use ($data){
        		$message->from('donate@gmail.com', 'Donation');
        		$message->to($data['email']);
        		$message->subject('Invoice');
        });
    	//Mail:: send(new sendMail());
    	return view('front.home');
    } 

    public function email(){
        return view('front.email');
    }
}
