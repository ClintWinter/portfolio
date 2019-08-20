@extends('blog.master')

@section('content')

<h1 class="font-black text-gray-800 text-3xl uppercase mb-8">Blog</h1>
<div class="flex flex-col px-0 md:px-4">
    @foreach ($blog as $post)

        <div class="mb-12">
            <h2 class="text-2xl font-bold leading-none mb-2"><a href="{{ route('blog.show', $post->slug) }}" class="text-blue-500">{{ $post->title }}</a></h2>
            <div class="font-normal text-gray-600 text-sm">{{ \Carbon\Carbon::parse($post->published_at)->format('n/j/Y') }}</div>
        </div>
        
    @endforeach
</div>

@endsection