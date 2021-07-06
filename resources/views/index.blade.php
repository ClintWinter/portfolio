@extends('layouts.master')

@section('content')

<main class="container mx-auto px-2 sm:px-4">

    <div class="flex flex-col lg:flex-row justify-between gap-x-8 mb-20">
        <section class="mb-20 lg:mb-0 p-4 bg-black border-2 border-teal font-display text-sm md:text-lg leading-loose shadow" style="flex-basis: 100%;">
            <p>&nbsp;<span class="text-dark">1</span> <span class="text-purple"><em>const</em></span> <span class="text-red"><strong>clint_winter</strong></span> = {</p>
            <p>&nbsp;<span class="text-dark">2</span>&nbsp;&nbsp;&nbsp;<span class="text-red">name</span>: <span class="text-yellow">'Clint Winter'</span>,</p>
            <p>&nbsp;<span class="text-dark">3</span>&nbsp;&nbsp;&nbsp;<span class="text-red">age</span>: <span class="text-orange">{{ \Carbon\Carbon::parse('1993-04-02 08:30:00')->diffInYears(\Carbon\Carbon::now('America/New_York')) }}</span>,</p>
            <p>&nbsp;<span class="text-dark">4</span>&nbsp;&nbsp;&nbsp;<span class="text-red">location</span>: <span class="text-yellow">'New Jersey'</span>,</p>
            <p>&nbsp;<span class="text-dark">5</span>&nbsp;&nbsp;&nbsp;<span class="text-red">employer</span>: <span class="text-yellow">'<a rel="noopener noreferer" target="blank" href="https://givebutter.com" class="underline">Givebutter</a>'</span>,</p>
            <p>&nbsp;<span class="text-dark">6</span>&nbsp;&nbsp;&nbsp;<span class="text-red">title</span>: <span class="text-yellow">'Full-stack Web Developer'</span>,</p>
            <p>&nbsp;<span class="text-dark">7</span>&nbsp;&nbsp;&nbsp;<span class="text-red">technologies</span>: [</p>
            <p>&nbsp;<span class="text-dark">8</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-yellow">'<a rel="noopener noreferer" class="underline" target="_blank" href="https://laravel.com">Laravel</a>'</span>,</p>
            <p>&nbsp;<span class="text-dark">9</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-yellow">'<a rel="noopener noreferer" class="underline" target="_blank" href="https://tailwindcss.com">Tailwind CSS</a>'</span>, <span class="text-dark"></span></p>
            <p><span class="text-dark">10</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-yellow">'<a rel="noopener noreferer" class="underline" target="_blank" href="https://vuejs.org">VueJS</a>'</span>,</p>
            <p><span class="text-dark">11</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-yellow">'<a rel="noopener noreferer" class="underline" target="_blank" href="https://github.com/alpinejs/alpine/">AlpineJS</a>'</span>, <span class="text-dark"></span></p>
            <p><span class="text-dark">12</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-yellow">'<a rel="noopener noreferer" class="underline" target="_blank" href="https://laravel-livewire.com/">Laravel Livewire</a>'</span>,</p>
            <p><span class="text-dark">13</span>&nbsp;&nbsp;&nbsp;],</p>
            <p><span class="text-dark">14</span>&nbsp;&nbsp;&nbsp;<span class="text-red">activities</span>: [<span class="text-yellow">'<a href="{{ route('blog') }}" class="underline">Blogging</a>'</span>],</p>
            <p><span class="text-dark">15</span>&nbsp;&nbsp;&nbsp;<span class="text-red">uses</span>: <span class="text-yellow">'<a href="{{ route('uses') }}" class="underline">/uses</a>'</span>,</p>
            <p><span class="text-dark">16</span>&nbsp;};</p>
        </section>

        <section style="flex-basis: 100%;">
            <h1 class="mb-8 font-display text-purple text-xl font-bold uppercase">Latest Posts</h1>

            @foreach ($latestPosts as $post)
                <div class="mb-12">
                    <h2 class="mb-2 text-xl leading-snug">
                        <a href="{{ route('blog.show', $post->slug) }}" class="text-yellow hover:underline">
                            <strong>{{ $post->title }}</strong>
                        </a>
                    </h2>
                    <div class="font-normal text-dark text-sm"><em>{{ $post->published_at->diffForHumans() }}</em></div>
                </div>
            @endforeach
        </section>
    </div>

</main>

@endsection
