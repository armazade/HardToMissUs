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

        if ($request->hasFile('image')) {
            $article
                ->addMediaFromRequest('image')
                ->toMediaCollection('images', 'public');
        }

        return redirect()
            ->route('admin.articles.index')
            ->with('success', 'Article created!');
    }

    public function show(Article $article)
    {
        return Inertia::render('Admin/Article/Show', [
            'article' => $article,
            'imageUrl' => $article->getFirstMediaUrl('images'),
        ]);
    }

    public function update(ArticleUpdateRequest $request, Article $article)
    {
        $validated = $request->validated();

        $article->update(attributes: $validated);

        if ($request->hasFile('image')) {
            $article->clearMediaCollection('images');
            $article->addMediaFromRequest('image')->toMediaCollection('images');
        }

        return redirect()->route('admin.article.index')->with('success', 'Article updated successfully.');
    }
}
