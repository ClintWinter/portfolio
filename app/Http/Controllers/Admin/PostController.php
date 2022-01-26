<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Post::latest()->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validData = $request->validate([
            'title' => [
                'required',
                'max:255',
                Rule::unique('posts')
            ],
            'body' => 'required',
            'cover_img_url' => 'max:255'
        ]);

        $post = Post::create($validData);

        return $post->toJson();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();

        return $post->toJson();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $post = Post::where('slug', $slug)->first();

        $validData = $request->validate([
            'title' => [
                'required',
                'max:255',
                Rule::unique('posts')->ignore($post)
            ],
            'slug' => 'required',
            'body' => 'required',
            'cover_img_url' => 'max:255'
        ]);

        $post->fill($validData);

        $post->save();

        return $post->toJson();
    }

    public function publish(Request $request, $slug)
    {
        $validData = $request->validate([
            'published' => 'required|boolean'
        ]);

        $post = Post::firstWhere('slug', $slug);

        $post->published = $validData['published'];
        $post->published_at = $validData['published'] ? now() : null;

        $post->save();

        $post = $post->fresh();

        return $post->toJson();
    }
}
