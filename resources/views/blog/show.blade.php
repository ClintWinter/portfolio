<x-layout title="{{$post->title}}" metadescription="{{\Illuminate\Support\Str::limit($post->body, 150)}}">
<main class="px-2 md:px-4 pt-12">
    <div class="mb-8 mx-auto w-full max-w-prose">
        <h1 class="mb-4 leading-tight text-2xl md:text-3xl text-purple">
            <strong>{{ $post->title }}</strong>
        </h1>

        <p class="text-dark text-sm">
            <em>{{ $post->published_at->format('M jS, Y') }}</em>
        </p>
    </div>

    <x-markdown class="post">{!! $post->body !!}</x-markdown>
</main>
</x-layout>
