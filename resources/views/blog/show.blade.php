<x-layouts.master title="{{$post->title}}" metadescription="{{\Illuminate\Support\Str::limit($post->body, 150)}}">
<main class="px-2 md:px-4 pt-12">
    <div class="mb-8 mx-auto w-full max-w-prose">
        <h1 class="mb-4 font-bold leading-tight text-2xl md:text-3xl text-purple">
            {{ $post->title }}
        </h1>

        <p class="text-dark text-sm">
            <em>{{ $post->published_at->format('M jS, Y') }}</em>
        </p>
    </div>

    <article class="post">
        @markdown($post->body)
    </article>
</main>
</x-layout>
