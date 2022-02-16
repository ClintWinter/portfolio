<x-layouts.admin>

    @if (session()->has('status'))
        <div class="max-w-prose mx-auto mb-6 px-4 py-2 bg-teal text-darkbg font-display text-sm">
            {{ session('status') }}
        </div>
    @endif

    <div class="p-2 grid grid-cols-2">
        <div class="p-4 border-r border-dark">
            <div>
                <form id="edit" method="POST" action="{{ route('admin.posts.update', $post) }}">
                    @csrf
                    @method('PUT')

                    <div class="flex flex-col mb-8">
                        <label for="title" class="mb-2 text-lg font-display font-bold text-purple">Title</label>
                        <input class="w-full px-3 py-1 text-lg font-display font-bold border-2 border-dark bg-darkbg placeholder:text-dark text-regular focus:outline-none focus:border-teal" type="text" name="title" id="title" placeholder="Title" value="{{ old('title', $post->title) }}">
                        @error('title') <p class="text-red font-semibold">{{ $message }}</p>@enderror
                    </div>

                    <div class="flex flex-col items-start mb-8">
                        <label for="body" class="mb-2 text-lg font-display font-bold text-purple">Body</label>
                        <textarea class="w-full px-3 py-1 h-96 font-display text-sm leading-normal flex-grow border-2 border-dark bg-darkbg placeholder:text-dark text-regular focus:outline-none focus:border-teal" style="resize:none;" name="body" id="body" placeholder="Body">{{ old('body', $post->body) }}</textarea>
                        @error('body') <p class="text-red font-semibold">{{ $message }}</p>@enderror
                    </div>
                </form>

                <div class="flex justify-end gap-x-4">
                    @if ($post->isPublished())
                        <a href="{{ route('posts.show', $post) }}" target="_blank" class="block cursor-pointer px-6 py-2 font-bold font-display text-yellow border-2 border-yellow hover:bg-yellow hover:text-darkbg">
                            $go_to_post
                        </a>

                        <x-btn.form method="DELETE" :action="route('admin.published-posts.destroy', $post)" class="cursor-pointer px-6 py-2 font-bold font-display text-yellow border-2 border-yellow hover:bg-yellow hover:text-darkbg">$unpublish</x-btn.form>
                    @else
                        <x-btn.form method="POST" :action="route('admin.published-posts.store', $post)" class="block cursor-pointer px-6 py-2 font-bold font-display text-yellow border-2 border-yellow hover:bg-yellow hover:text-darkbg">$publish</x-btn.form>
                    @endif

                    <button class="cursor-pointer px-6 py-2 font-display font-bold bg-orange text-darkbg focus:outline-none focus:bg-teal hover:bg-teal transition-colors duration-200" type="submit" form="edit">$save</button>
                </div>
            </div>
        </div>

        <div class="max-w-prose p-4 h-screen overflow-y-scroll">
            <h1 class="mb-4 font-bold leading-tight text-2xl md:text-3xl text-purple">
                {{ $post->title }}
            </h1>

            <x-markdown class="post">{!! old('body', $post->body) !!}</x-markdown>
        </div>
    </div>
</x-layouts.admin>
