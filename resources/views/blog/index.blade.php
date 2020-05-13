@extends('layouts.master')
@section('title', 'Blog Posts | Clint Winter')
@section('content')

<div class="w-full md:w-2/3 xl:w-1/2 mx-auto flex flex-col px-2 md:px-4">
    <div>
        <h2 class="text-purple uppercase text-xl"><strong>Latest Posts</strong></h2>
    </div>

    <div class="h-12"></div>

    @foreach ($blog as $post)
        <div class="mb-12">
            <h2 class="text-xl leading-tight"><a href="{{ route('blog.show', $post->slug) }}" class="text-yellow hover:underline"><strong>{{ $post->title }}</strong></a></h2>

            <div class="h-2"></div>

            <div class="font-normal text-dark text-sm"><em>{{ \Carbon\Carbon::parse($post->published_at)->format('l, F jS, Y') }}</em></div>
        </div>
    @endforeach
</div>

@endsection