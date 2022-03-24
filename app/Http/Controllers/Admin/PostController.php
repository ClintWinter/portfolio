<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of posts.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('admin.posts.index', [
            'posts' => Post::latest()->get()
        ]);
    }

    /**
     * Create a new post.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.posts.new');
    }

    /**
     * Store a new post.
     *
     * @param  Illuminate\Http\Request  $request
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => [
                'required',
                'max:255',
                Rule::unique('posts')
            ],
            'body' => 'required',
            'slug' => 'nullable|max:255',
            'cover_img_url' => 'max:255'
        ]);

        $post = Post::create([
            'title' => $request->title,
            'body' => $request->body,
            'slug' => $request->slug ?? Str::slug($request->title),
            'cover_img_url' => $request->cover_img_url,
        ]);

        return redirect()->route('admin.posts.edit', $post);
    }

    /**
     * Edit the given post.
     *
     * @param  Request $request
     * @param  App\Models\Post  $post
     * @return \Illuminate\Contracts\View\View
     */
    public function edit(Request $request, Post $post)
    {
        return view('admin.posts.edit', ['post' => $post]);
    }

    /**
     * Update the given post.
     *
     * @param  Illuminate\Http\Request  $request
     * @param  App\Models\Post  $post
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $validData = $request->validate([
            'title' => [
                'required',
                'max:255',
                Rule::unique('posts')->ignore($post)
            ],
            'body' => 'required',
            'cover_img_url' => 'max:255'
        ]);

        $post->fill($validData)->save();

        return back()->with('status', 'Post updated.');
    }
}
