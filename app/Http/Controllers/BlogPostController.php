<?php

namespace App\Http\Controllers;

use App\BlogPost;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BlogPost::latest()->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
                Rule::unique('blog_posts')
            ],
            'body' => 'required',
            'cover_img_url' => 'max:255'
        ]);

        $blogPost = BlogPost::create($validData);

        return $blogPost->toJson();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {   
        $blogPost = BlogPost::where('slug', $slug)->first();
        
        return $blogPost->toJson();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogPost $blogPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $blogPost = BlogPost::where('slug', $slug)->first();

        $validData = $request->validate([
            'title' => [
                'required',
                'max:255',
                Rule::unique('blog_posts')->ignore($blogPost)
            ],
            'slug' => 'required',
            'body' => 'required',
            'cover_img_url' => 'max:255'
        ]);

        $blogPost->fill($validData);

        $blogPost->save();

        return $blogPost->toJson();
    }

    public function publish(Request $request, $slug)
    {
        $validData = $request->validate([
            'published' => 'required|boolean'
        ]);

        $blogPost = BlogPost::where('slug', $slug)->first();

        $blogPost->published = $validData['published'];
        $blogPost->published_at = $validData['published'] ? Carbon::now() : null;

        $blogPost->save();

        $blogPost = $blogPost->fresh();

        return $blogPost->toJson();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogPost $blogPost)
    {
        //
    }
}
