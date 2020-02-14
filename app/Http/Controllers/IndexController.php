<?php

namespace App\Http\Controllers;

use App\Http\Requests\newUserNewletterRequest;
use App\Mail\mailAdmin;
use App\Mail\mailUser;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function showView(){
        return view('index');
    }

//    Envoie de mail lors de l'inscription à la newletters d'un nouvel utilisateur
//    Mail envoyer à l'admin du site web + Envoye des dernier pronostiques à l'utilisateur venant de s'inscrire
    public function sendMail(newUserNewletterRequest $request){
        $emailNewUserEmail  = $request->input('email');
        Mail::to('levis.pronos@gmail.com')->send(new mailAdmin());
        Mail::to($emailNewUserEmail)->send(new mailUser());
        return view('validation');
    }
}
