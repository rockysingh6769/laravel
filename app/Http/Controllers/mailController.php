<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendMail;

class mailController extends Controller
{
    public function send()
    {
       Mail::send(new sendMail());
       // Mail::send(['text'=>'mail'],['name','michael'],function($message){
       //     $message->to('rocky@cybertrontechnologies.com','To Laravel')->subject('Test Email');
       //     $message->from('rocky@cybertrontechnologies.com','Laravel'); 
       // });
    }
    public function email()
    {
    	 return view('email');
    }
}
