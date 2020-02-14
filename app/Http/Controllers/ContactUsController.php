<?php

namespace App\Http\Controllers;

use App\Http\Requests\newMessageContactRequest;
use App\Mail\mailAdminContact;
use App\Mail\mailUserContact;
use App\Object\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use phpDocumentor\Reflection\Types\Object_;

class ContactUsController extends Controller
{
    var $messageObject;
    public function showView(){
        return view('contactUs');
    }

    public function createMessageObject(newMessageContactRequest $request){
        $message = new Message();
        $message->lastname = $request->get('lastname');
        $message->firstname = $request->get('firstname');
        $message->email = $request->get('email');
        $message->subject = $request->get('subject');
        $message->content = $request->get('content');
        return $message;
    }

    public function sendForm(newMessageContactRequest $request){
        $message = $this->createMessageObject($request);
        Mail::to('levis.pronos@gmail.com')->send(new mailAdminContact($message));
        Mail::to('test@gamial.com')->send(new mailUserContact($message));
        return view('validation');
    }
}
