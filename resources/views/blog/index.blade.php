@extends('layouts.master')

@section('title', 'Blog Posts | Clint G Winter')

@section('content')

{{-- <div class="flex justify-center mb-8">
    <h1
        class="px-0 md:px-16 font-black text-pink-800 bg-pink-300 text-6xl uppercase mb-8 tracking-widest inline-block"
        style="text-shadow: 6px 3px 0px #f687b3; transform: skewX(-30deg); box-shadow: 8px 6px 0 #b2f5ea;">Blog</h1>
</div> --}}

<div class="w-full md:w-2/3 xl:w-1/2 mx-auto flex flex-col px-2 md:px-4 py-16">
    <div class="mb-8">
        <h2 class="font-bold text-gray-700 uppercase text-xl">Latest Posts</h2>
    </div>
    @foreach ($blog as $post)

        <div class="mb-12">
            <h2 class="text-xl font-bold leading-tight mb-2"><a href="{{ route('blog.show', $post->slug) }}" class="text-blue-500 hover:underline">{{ $post->title }}</a></h2>
            <div class="font-normal text-gray-600 text-sm">{{ \Carbon\Carbon::parse($post->published_at)->format('l, F jS, Y') }}</div>
        </div>

    @endforeach
</div>

@endsection