<x-layouts.admin>
    <div class="px-5 py-8">
        <h1 class="hidden">Library</h1>

        @if (session()->has('status'))
            <div class="max-w-prose mx-auto mb-6 px-4 py-2 bg-teal text-darkbg font-display text-sm">
                {{ session('status') }}
            </div>
        @endif

        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            <form class="flex flex-col p-4 border-2 border-teal" method="POST" action="{{ route('admin.resources.store') }}">
                @csrf
                <div class="mb-2">
                    <input type="text" id="type" name="type" placeholder="Type (Book, Resource, etc.)" class="w-full mb-1 px-3 py-1 text-xs placeholder:text-dark text-regular border-2 border-dark bg-darkbg focus:outline-none focus:border-teal" value="{{ old('type') }}" />
                    @error('type')<p class="text-red text-xs mb-2">{{ $message }}</p>@enderror
                </div>
                <div class="mb-2">
                    <input type="text" id="name" name="name" placeholder="Name" class="w-full mb-1 px-3 py-1 text-xs placeholder:text-dark text-regular border-2 border-dark bg-darkbg focus:outline-none focus:border-teal" value="{{ old('name') }}" />
                    @error('name')<p class="text-red text-xs mb-2">{{ $message }}</p>@enderror
                </div>
                <div class="mb-2">
                    <input type="url" id="url" name="url" placeholder="URL" class="w-full mb-1 px-3 py-1 text-xs placeholder:text-dark text-regular border-2 border-dark bg-darkbg focus:outline-none focus:border-teal" value="{{ old('url') }}" />
                    @error('url')<p class="text-red text-xs mb-2">{{ $message }}</p>@enderror
                </div>
                <div class="mb-2">
                    <input type="text" id="languages" name="languages" placeholder="Languages (&quot;HTML,CSS,PHP&quot;)" class="w-full mb-1 px-3 py-1 text-xs placeholder:text-dark text-regular border-2 border-dark bg-darkbg focus:outline-none focus:border-teal" value="{{ old('languages') }}" />
                    @error('languages')<p class="text-red text-xs mb-2">{{ $message }}</p>@enderror
                </div>
                <button type="submit" class="px-2 py-1 text-sm font-display font-bold text-darkbg bg-orange focus:bg-teal hover:bg-teal focus:outline-none hover:outline-none">$create</button>
            </form>



            @foreach ($resources as $resource)
                <section class="flex flex-col justify-between p-4 border-2 border-teal">
                    <div class="mb-4">
                        <p class="mb-1 uppercase text-dark text-xs">{{ $resource->type }}</p>
                        <h2 class="leading-snug text-sm text-purple">{{ $resource->name }}</h2>
                    </div>

                    <div>
                        <div class="flex items-stretch flex-wrap gap-2">
                            @foreach ($resource->languages as $lang)
                                <div class="text-xs px-1 border border-teal">{{ $lang->name }}</div>
                            @endforeach
                        </div>

                        <div class="flex justify-end gap-x-4">
                            <x-btn.form method="DELETE" :action="route('admin.resources.destroy', $resource)" class="block cursor-pointer px-3 py-1 text-sm font-bold font-display text-red hover:bg-red hover:text-darkbg">$delete</x-btn.form>

                            <a href="{{ route('admin.resources.edit', $resource) }}" class="block cursor-pointer px-3 py-1 text-sm font-bold font-display bg-orange text-darkbg hover:bg-yellow hover:text-darkbg">$edit</a>
                        </div>
                    </div>
                </section>
            @endforeach
        </div>
    </div>
</x-layouts.admin>
