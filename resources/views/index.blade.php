@extends('.layouts.master')
@section('content')

<section class="container mx-auto px-2 sm:px-4">

    <div class="font-display text-sm md:text-lg leading-loose">
        <p>&nbsp;<span class="text-dark">1</span> <span class="text-purple"><em>var</em></span> <span class="text-red"><strong>clint_winter</strong></span> = {</p>
        <p>&nbsp;<span class="text-dark">2</span>&nbsp;&nbsp;&nbsp;<span class="text-red">name</span>: <span class="text-yellow">'Clint Winter'</span>,</p>
        <p>&nbsp;<span class="text-dark">3</span>&nbsp;&nbsp;&nbsp;<span class="text-red">age</span>: <span class="text-orange">27</span>,</p>
        <p>&nbsp;<span class="text-dark">4</span>&nbsp;&nbsp;&nbsp;<span class="text-red">location</span>: <span class="text-yellow">'New Jersey'</span>,</p>
        <p>&nbsp;<span class="text-dark">5</span>&nbsp;&nbsp;&nbsp;<span class="text-red">employer</span>: <span class="text-yellow">'<a rel="noopener noreferer" href="https://directlync.com" class="underline">DirectLync</a>'</span>,</p>
        <p>&nbsp;<span class="text-dark">6</span>&nbsp;&nbsp;&nbsp;<span class="text-red">title</span>: <span class="text-yellow">'Software Engineer II'</span>,</p>
        <p>&nbsp;<span class="text-dark">7</span>&nbsp;&nbsp;&nbsp;<span class="text-red">technologies</span>: [</p>
        <p>&nbsp;<span class="text-dark">8</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-yellow">'<a rel="noopener noreferer" class="underline" href="https://laravel.com">Laravel</a>'</span>,</p>
        <p>&nbsp;<span class="text-dark">9</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-yellow">'<a rel="noopener noreferer" class="underline" href="https://tailwindcss.com">Tailwind CSS</a>'</span>, <span class="text-dark">// <em>My favorite!</em></span></p>
        <p><span class="text-dark">10</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-yellow">'<a rel="noopener noreferer" class="underline" href="https://vuejs.org">VueJS</a>'</span>,</p>
        <p><span class="text-dark">11</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-yellow">'<a rel="noopener noreferer" class="underline" href="https://github.com/alpinejs/alpine/">AlpineJS</a>'</span>, <span class="text-dark">// <em>Really fun!</em></span></p>
        <p><span class="text-dark">12</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-yellow">'<a rel="noopener noreferer" class="underline" href="https://laravel-livewire.com/">Laravel Livewire</a>'</span>,</p>
        <p><span class="text-dark">13</span>&nbsp;&nbsp;&nbsp;],</p>
        <p><span class="text-dark">14</span>&nbsp;&nbsp;&nbsp;<span class="text-red">activities</span>: [<span class="text-yellow">'<a href="{{ route('blog') }}" class="underline">Blogging</a>'</span>],</p>
            {{-- <p>15&nbsp;&nbsp;&nbsp;<span class="text-red">uses</span>: [<span class="text-yellow">'<a href="{{ route('uses') }}" class="underline">/uses'</span>],</p> --}}
        <p><span class="text-dark">15</span>&nbsp;};</p>
    </div>

    <div class="h-20"></div>

    <div class="mx-auto w-full md:w-3/4 lg:w-2/3 xl:w-1/2 flex justify-between">
        <div>
            <h4 class="text-xl text-purple"><strong>Front-end</strong></h4>

            <div class="h-4"></div>

            <ul class="">
                <li class="mb-2"><i class="fas fa-check mr-3 text-teal"></i>Vue.js</li>
                <li class="mb-2"><i class="fas fa-check mr-3 text-teal"></i>JavaScript</li>
                <li class="mb-2"><i class="fas fa-check mr-3 text-teal"></i>Sass/SCSS</li>
                <li class="mb-2"><i class="fas fa-check mr-3 text-teal"></i>jQuery</li>
                <li class="mb-2"><i class="fas fa-check mr-3 text-teal"></i>Bootstrap</li>
                <li class="mb-2"><i class="fas fa-check mr-3 text-teal"></i>CSS3</li>
                <li class="mb-2"><i class="fas fa-check mr-3 text-teal"></i>HTML5</li>
            </ul>
        </div>
        <div>
            <h4 class="text-xl text-purple"><strong>Back-end</strong></h4>

            <div class="h-4"></div>

            <ul class="">
                <li class="mb-2"><i class="fas fa-check mr-3 text-teal"></i>Laravel</li>
                <li class="mb-2"><i class="fas fa-check mr-3 text-teal"></i>PHP</li>
                <li class="mb-2"><i class="fas fa-check mr-3 text-teal"></i>MySQL</li>
                <li class="mb-2"><i class="fas fa-check mr-3 text-teal"></i>Node.js</li>
                <li class="mb-2"><i class="fas fa-check mr-3 text-teal"></i>Express</li>
            </ul>
        </div>
        <div>
            <h4 class="text-xl text-purple"><strong>Other</strong></h4>

            <div class="h-4"></div>

            <ul class="">
                <li class="mb-2"><i class="fas fa-check mr-3 text-teal"></i>Git/GitHub</li>
                <li class="mb-2"><i class="fas fa-check mr-3 text-teal"></i>Webpack</li>
            </ul>
        </div>
    </div>

</section>

@endsection