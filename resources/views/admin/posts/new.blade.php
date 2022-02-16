<x-layouts.admin>
    {{-- <div class="p-2 grid grid-cols-2"> --}}
        <div class="max-w-prose mx-auto p-4">
            <form method="POST" action="{{ route('admin.posts.store') }}">
                @csrf

                <div class="flex flex-col mb-8">
                    <label for="title" class="mb-2 text-lg font-display font-bold text-purple">Title</label>
                    <input class="w-full px-3 py-1 text-lg font-display font-bold border-2 border-dark bg-darkbg placeholder:text-dark text-regular focus:outline-none focus:border-teal" type="text" name="title" id="title" placeholder="Title" value="{{ old('title') }}">
                    @error('title') <p class="text-red font-semibold">{{ $message }}</p>@enderror
                </div>

                <div class="flex flex-col mb-8">
                    <label for="slug" class="mb-2 text-lg font-display font-bold text-purple">Slug</label>
                    <input class="w-full px-3 py-1 font-display text-sm border-2 border-dark bg-darkbg placeholder:text-dark text-regular focus:outline-none focus:border-teal" type="text" name="slug" id="slug" placeholder="Leave blank for default slug based on title" value="{{ old('slug') }}">
                    @error('slug') <p class="text-red font-semibold">{{ $message }}</p>@enderror
                </div>

                <div class="flex flex-col items-start mb-8">
                    <label for="body" class="mb-2 text-lg font-display font-bold text-purple">Body</label>
                    <textarea class="w-full px-3 py-1 h-96 font-display text-sm leading-normal flex-grow border-2 border-dark bg-darkbg placeholder:text-dark text-regular focus:outline-none focus:border-teal" style="resize:none;" name="body" id="body" placeholder="Body">{{ old('body') }}</textarea>
                    @error('body') <p class="text-red font-semibold">{{ $message }}</p>@enderror
                </div>

                <div class="flex justify-end">
                    <button class="cursor-pointer px-6 py-2 font-display font-bold bg-orange text-darkbg focus:outline-none focus:bg-teal hover:bg-teal transition-colors duration-200" type="submit">$save</button>
                </div>
            </form>
        </div>

        {{-- <div class="max-w-prose p-4 h-screen overflow-y-scroll">
            <h1 class="mb-4 font-bold leading-tight text-2xl md:text-3xl text-purple">
                {{ $post->title }}
            </h1>

            <x-markdown class="post">{!! old('body', $post->body) !!}</x-markdown>
        </div> --}}
    {{-- </div> --}}
</x-layouts.admin>
