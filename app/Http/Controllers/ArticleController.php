<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Statamic\Facades\Collection;
use Statamic\Facades\Entry;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Entry::query()
            ->where('collection', 'articles')
            ->where('published', true)
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('articles.index', [
            'articles' => $articles,
        ]);
    }

    public function show($slug)
    {
        $article = Entry::findBySlug($slug, 'articles');

        if (! $article->published()) {
            return abort(404);
        }

        return view('articles.show', [
            'article' => $article,
        ]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
