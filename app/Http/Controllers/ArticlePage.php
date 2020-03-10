<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlePage extends Controller
{
    public function showView(){
        return view('articlePage');
    }
}
