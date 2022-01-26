@extends('layouts.master')

@section('title', $post->title)

@section('metadescription', \Illuminate\Support\Str::limit($post->body, 150))

@section('content')

<div class="px-2 md:px-4 container mx-auto">
    <div class="flex flex-col items-center">
        <div class="mb-16 w-full max-w-prose">
            <div>
                <h1 class="mb-2 leading-tight text-2xl md:text-3xl text-purple">
                    <strong>{{ $post->title }}</strong>
                </h1>

                <p class="text-dark text-sm">
                    <em>{{ $post->published_at->format('M j, Y') }}</em></p>
            </div>
        </div>

        {{-- <div class="blogpost w-full text-base leading-relaxed"> --}}
        <x-markdown class="blogpost w-full text-base leading-relaxed">{!! $post->body !!}</x-markdown>
    </div>
    {{-- <view-blog blogpost="{{ $post->toJson() }}"></view-blog> --}}

    <div class="my-12">
        <a class="text-yellow font-display text-lg hover:underline" href="{{ route('posts.index') }}">&lt;- Back</a>
    </div>
</div>

@endsection
