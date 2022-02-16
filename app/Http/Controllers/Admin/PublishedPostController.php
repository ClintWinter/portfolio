<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PublishedPostController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $post->fill([
            'published_at' => now(),
        ])->save();

        return back()->with('status', 'Post published.');
    }

    public function destroy(Request $rqeuest, Post $post)
    {
        $post->fill([
            'published_at' => null,
        ])->save();

        return back()->with('status', 'Post unpublished.');
    }
}
