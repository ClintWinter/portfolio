<x-layouts.master title="Library | Clint Winter" metadescription="My library of relevant resources, courses, and reference material related to programming and web development.">
<h1 class="hidden">Library</h1>
<div class="px-2 md:px-6 pt-12 grid grid-cols-4">
    <aside class="h-fit sm:sticky top-8 col-span-full sm:col-span-1 mb-12 sm:mb-0 mr-4">
        <h2 class="uppercase text-dark text-lg mb-4 leading-none">Sections</h2>
        <ul>
            @foreach($groupedResources->keys() as $section)
                <li class="mb-2 last:mb-0"><a href="#{{ $section }}" class="capitalize text-orange hover:underline font-display">{{ \Illuminate\Support\Str::plural($section) }}</a></li>
            @endforeach
        </ul>
    </aside>

    <main class="col-span-full sm:col-span-3">
        <div class="w-full max-w-prose mx-auto">
            @foreach($groupedResources as $type => $group)
                <section class="mb-12 last:mb-0">
                    <h2 id="{{ $type }}" class="uppercase text-purple text-lg font-semibold mb-6">{{ \Illuminate\Support\Str::plural($type) }}</h1>
                    <ul>
                        @foreach ($group as $resource)
                            <li class="mb-6 last:mb-0">
                                <p class="mb-2"><a href="{{ $resource->url }}" class="text-yellow hover:underline font-display" rel="noopener noreferer" target="_blank">{{ $resource->name }}</a><p>
                                <ul class="flex gap-x-2">
                                    @foreach ($resource->languages as $language)
                                        <li class="border border-teal text-xs px-1 bg-darkbg">{{ $language->name }}</li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </section>
            @endforeach
        </div>
    </main>
</div>
</x-layout>
