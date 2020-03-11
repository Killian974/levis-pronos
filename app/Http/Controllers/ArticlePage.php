<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class ArticlePage extends Controller
{
    public function showArticle(int $id) {
        $article = Articles::find($id);
        return view('articlePage', ['article' => $article]);
    }
}
