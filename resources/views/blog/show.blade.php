@extends('layouts.master')

@section('title', $blogPost->title)

@section('metadescription', Str::limit($blogPost->body, 150))

@section('content')

<div class="px-2 md:px-4 w-full xl:w-2/3 container mx-auto">
    <view-blog blogpost="{{ $blogPost->toJson() }}"></view-blog>

    <div class="h-12"></div>

    <div class="mb-12">
        <a class="text-yellow font-display text-lg hover:underline" href="{{ route('blog') }}">&lt;- Back</a>
    </div>
</div>

@endsection