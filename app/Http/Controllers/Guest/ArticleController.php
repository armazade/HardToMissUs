<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Inertia\Inertia;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return Inertia::render('Guest/Home', [
            'articles' => $articles,
        ]);
    }

    public function show(Article $article)
    {
        return Inertia::render('Guest/Article', [
            'article' => $article,
            'imageUrl' => $article->getFirstMediaUrl('images')
        ]);
    }
}
