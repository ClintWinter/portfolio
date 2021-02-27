<x-master :title="$blogPost->title" :metadescription="\Illuminate\Support\Str::limit($blogPost->body, 150)">
    <div class="px-2 md:px-4 w-full xl:w-2/3 container mx-auto">

        <div class="flex flex-col items-center">

            <div class="w-full">
                <div class="">
                    <h1 class="mb-2 leading-tight text-2xl md:text-3xl text-purple"><strong>{{ $blogPost->title }}</strong></h1>
                    <p class="text-dark text-sm"><em>Published {{ $blogPost->published_at->diffForHumans() }}</em></p>
                </div>
            </div>

            <div class="h-16"></div>

            <div id="blog-body" class="blogpost text-base leading-relaxed w-full">{!! $blogPost->body !!}</div>
        </div>

        <div class="h-12"></div>

        <div class="mb-12">
            <a class="text-yellow font-display text-lg hover:underline" href="{{ route('blog') }}">&lt;- Back</a>
        </div>
    </div>
</x-master>
