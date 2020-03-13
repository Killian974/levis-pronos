<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function showView(){
        $articles = Articles::all();
        foreach ($articles as $article) $article->created_date = Carbon::parse($article->created_date)->format('d/m/Y');
        return view('blogPage', ['articles' => $articles]);
    }
}
