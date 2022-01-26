<?php

namespace App\Http\Controllers\Web;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PostController extends Controller
{
    /**
     * Show a list of blog posts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blog.index', [
            'posts' => Post::published()->latest('published_at')->get(),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        if (! $post->isPublished()) {
            throw new ModelNotFoundException;
        }

        $post->markAsRead();

        return view('blog.show', compact('post'));
    }
}
