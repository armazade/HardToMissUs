<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleUpdateRequest;
use App\Models\Article;
use Inertia\Inertia;

class ArticleAdminController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return Inertia::render('Admin/Article/Index', [
            'articles' => $articles,
            'flash' => [
                'success' => session('success'),]
        ]);
    }

    public function create()
    {
        return Inertia::render('Admin/Article/Create');
    }

    public function store(ArticleUpdateRequest $request)
    {
        $validated = $request->validated();

        $article = Article::create($validated);

        return redirect()
            ->route('admin.articles.index')
            ->with('success', 'Article created!');
    }
}
