<x-layout title="Library | Clint Winter" metadescription="Clint Winter has a library that he keeps up-to-date with relevant resources, courses, and reference material that he actively uses or has used in the past. Quickly filter through the resources, you may find something truly helpful.">
<main class="w-full max-w-prose mx-auto px-2 md:px-4 pt-12">
    @foreach($groupedResources as $type => $group)
        <section class="mb-12">
            <h1 class="uppercase text-purple text-lg font-semibold mb-6">{{ \Illuminate\Support\Str::plural($type) }}</h1>
            <ul>
                @foreach ($group as $resource)
                    <li class="mb-6">
                        <p class="mb-2"><a href="{{ $resource->url }}" class="text-yellow hover:underline font-display">{{ $resource->name }}</a><p>
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
</x-layout>
