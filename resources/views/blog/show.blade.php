@extends('layouts.master')

@section('title', $blogPost->title)

@section('content')

<div class="px-2 md:px-4 py-8 w-full md:w-2/3 xl:w-1/2 mx-auto">
    <view-blog blogpost="{{ $blogPost->toJson() }}"></view-blog>

    <div class="w-full h-1 border-b-2 border-gray-200 mb-6"></div>

    <div class="mb-12">
        <a class="text-blue-500 text-lg" href="{{ route('blog') }}"><i class="fas fa-chevron-left"></i> Back</a>
    </div>
</div>

@endsection