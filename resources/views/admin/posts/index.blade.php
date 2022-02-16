<x-layouts.admin>
    <div class="px-5 py-8">
        <h1 class="hidden">Posts</h1>

        @if (session()->has('status'))
            <div class="max-w-prose mx-auto mb-6 px-4 py-2 bg-teal text-darkbg font-display text-sm">
                {{ session('status') }}
            </div>
        @endif

        <a href="{{ route('admin.posts.create') }}" class="inlinse px-6 py-2 font-display font-bold text-darkbg bg-orange">$new_blog_post</a>

        <div class="flex flex-col pt-8">
            @foreach ($posts as $post)
            <div class="overflow-hidden relative mb-6 px-2 md:px-8 py-4 md:py-6 border-2 border-teal">
                @if ($post->isPublished())
                    <div class="border-b-2 border-teal text-yellow absolute pt-4 px-12" style="top: 0; left: 0; transform: rotate(-45deg) translate(-27px, -40px)"><i class="fas fa-star"></i></div>
                @endif

                <header class="px-5 py-2 flex justify-between items-center">
                    {{-- @TODO: go to "show" - @click="getBlogPost" --}}
                    <h2 class="text-2xl font-bold cursor-pointer text-yellow hover:underline">
                        <a href="{{ route('admin.posts.edit', $post) }}">{{ $post->title }}</a>
                    </h2>
                </header>

                <div class="px-5 py-2 leading-loose mb-8">
                    {{ Illuminate\Support\Str::limit($post->body, 200) }}
                </div>

                <div class="flex items-center gap-x-4 px-5">
                    @if ($post->isPublished())
                        <x-btn.form method="DELETE" :action="route('admin.published-posts.destroy', $post)" class="block text-xs px-4 py-2 font-bold leading-none text-darkbg bg-red">$unpublish</x-btn.form>

                        <div class="text-xs text-dark whitespace-no-wrap">
                            <em>{{ $post->published_at->format('n/j/Y g:ia') }} &nbsp;//&nbsp; Reads: {{ $post->reads }}</em>
                        </div>
                    @else
                        <x-btn.form method="POST" :action="route('admin.published-posts.store', $post)" class="block text-xs px-4 py-2 font-bold leading-none text-darkbg bg-purple">$publish</x-btn.form>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layouts.admin>
