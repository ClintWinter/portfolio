<x-layout title="Blog | Clint Winter" metadescription="Blog posts written by Clint Winter. Clint enjoys writing content surrounding the Laravel ecosystem including guides, project updates, reading review, and more.">
<div class="w-full max-w-prose mx-auto flex flex-col px-2 md:px-6 pt-12">
    <div class="mb-8">
        <h1 class="uppercase text-purple text-lg font-semibold">Latest Posts</h2>
    </div>

    @foreach ($posts as $post)
        <div class="mb-6">
            <p class="mb-2 leading-tight font-display">
                <a href="{{ route('posts.show', $post->slug) }}" class="text-yellow hover:underline">
                    {{ $post->title }}
                </a>
            </p>

            <p class="font-normal text-dark text-sm">
                <em>{{ $post->published_at->diffForHumans() }}</em>
            </p>
        </div>
    @endforeach
</div>
</x-layout>
