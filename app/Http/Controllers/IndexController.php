<?php

namespace App\Http\Controllers;

use App\Http\Requests\newUserNewletterRequest;
use App\Mail\MailtrapExample;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function test(){
        return view('index');
    }
    public function sendMail(newUserNewletterRequest $request){
//        dd($request->input('email'));
        Mail::to('newuser@example.com')->send(new MailtrapExample());
        return 'A message has been sent to Mailtrap!';
    }
}
