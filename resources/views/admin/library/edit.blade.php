<x-layouts.admin>
    <div class="px-5 py-8">
        <h1 class="hidden">Edit Resource: {{ $resource->name }}</h1>

        <form class="w-full max-w-prose mx-auto flex flex-col" method="POST" action="{{ route('admin.resources.update', $resource) }}">
            @csrf
            @method('PATCH')
            <div class="mb-4">
                <label for="type" class="mb-2 text-lg font-display font-bold text-purple">Type</label>
                <input type="text" id="type" name="type" placeholder="Type (Book, Resource, etc.)" class="w-full mb-1 px-3 py-1 placeholder:text-dark text-regular border-2 border-dark bg-darkbg focus:outline-none focus:border-teal" value="{{ old('type', $resource->type) }}" />
                @error('type')<p class="text-red mb-2">{{ $message }}</p>@enderror
            </div>
            <div class="mb-4">
                <label for="name" class="mb-2 text-lg font-display font-bold text-purple">Name</label>
                <input type="text" id="name" name="name" placeholder="Name" class="w-full mb-1 px-3 py-1 placeholder:text-dark text-regular border-2 border-dark bg-darkbg focus:outline-none focus:border-teal" value="{{ old('name', $resource->name) }}" />
                @error('name')<p class="text-red mb-2">{{ $message }}</p>@enderror
            </div>
            <div class="mb-4">
                <label for="url" class="mb-2 text-lg font-display font-bold text-purple">URL</label>
                <input type="url" id="url" name="url" placeholder="URL" class="w-full mb-1 px-3 py-1 placeholder:text-dark text-regular border-2 border-dark bg-darkbg focus:outline-none focus:border-teal" value="{{ old('url', $resource->url) }}" />
                @error('url')<p class="text-red mb-2">{{ $message }}</p>@enderror
            </div>
            <div class="mb-8">
                <label for="languages" class="mb-2 text-lg font-display font-bold text-purple">Languages</label>
                <input type="text" id="languages" name="languages" placeholder="Languages (&quot;HTML,CSS,PHP&quot;)" class="w-full mb-1 px-3 py-1 placeholder:text-dark text-regular border-2 border-dark bg-darkbg focus:outline-none focus:border-teal" value="{{ old('languages', $resource->languagesStr) }}" />
                @error('languages')<p class="text-red mb-2">{{ $message }}</p>@enderror
            </div>

            <div class="flex justify-end">
                <button type="submit" class="px-2 py-1 font-display font-bold text-darkbg bg-orange focus:bg-teal hover:bg-teal focus:outline-none hover:outline-none">$update</button>
            </div>
        </form>
    </div>
</x-layouts.admin>
