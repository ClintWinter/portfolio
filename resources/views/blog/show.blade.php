@extends('blog.master')

@section('title', $blogPost->title)

@section('content')

<div class="py-16">
    <div class="mb-8">
        <a class="text-blue-500 underline" href="{{ route('blog') }}">Back to Blog</a>
    </div>

    <div class="mb-16">
        <h1 class="text-3xl font-bold">{{ $blogPost->title }}</h1>
        <p class="font-normal text-gray-600 text-sm">{{ \Carbon\Carbon::parse($blogPost->published_at)->format('n/j/Y') }}</p>
    </div>

    <div class="text-lg leading-loose">
    {{ $blogPost->body }}
    </div>
</div>

@endsection