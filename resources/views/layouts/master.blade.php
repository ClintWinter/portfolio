<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="My name is Clint G Winter and I am a Software Developer currently at DirectLync! This is my website, clintgwinter.com. You can also find me on github at github.com/clintwinter. Clint Gregory Winter ( a.k.a. clintgwinter, a.k.a. Clint G Winter, a.k.a. Clint Winter ) is a software developer (web developer) in New Jersey who specializes in LAMP/LEMP stack applications and prefers utilizing Laravel and Vue.js. Did I mention that my name is Clint Winter and I am a software developer and a web developer who loves to work on all kinds of projects, mostly using Laravel and Vue?">
    <title>@yield('title', 'Clint G Winter')</title>

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Inter:400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="font-body">

        <header class="col flex justify-between items-center sm:items-end px-2 sm:px-4 py-6 bg-gradient text-white">
            <div>
                <h1 class="text-5xl leading-none font-semibold text-shadow">Clint Winter</h1>
                <h2 class="text-2xl opacity-50 leading-none text-shadow"><small>cwinter.web@gmail.com</small></h2>
            </div>
            <p class="font-normal flex flex-col sm:flex-row items-center text-3xl leading-none text-shadow">
                <a aria-label="Github in new tab" href="https://github.com/clintwinter" class="mb-3 sm:mb-0 mr-0 sm:mr-6 hover:text-pink-200" target="_blank" rel="noopener noreferrer"><i class="fab fa-github-square"></i></a>
                <a aria-label="LinkedIn in new tab" href="https://linkedin.com/in/clint-winter" class="mb-3 sm:mb-0 mr-0 sm:mr-6 hover:text-pink-200" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
                <a aria-label="View PDF resume in new tab" href="{{ Storage::url('ClintWinterResume.pdf') }}" class="hover:text-pink-200" target="_blank" rel="noopener noreferrer"><i class="fas fa-file-pdf"></i></a>
            </p>
        </header>
        <nav class="px-0 sm:px-4 col flex bg-gray-100 shadow-md">
            <div class="pr-10">
                <a
                    class="block py-4 px-2 font-black text-md sm:text-xl font-bold uppercase hover:text-teal-400 text-gray-800 {{ \Request::is('portfolio') ? '' : '' }}"
                    href="{{ route('portfolio') }}"
                >Portfolio</a>
                <div class="h-1 {{ \Request::is('portfolio') ? 'bg-gradient' : '' }}"></div>
            </div>
            <div class="pr-10">
                <a
                    class="block py-4 px-2 font-black text-md sm:text-xl font-bold uppercase hover:text-teal-400 text-gray-800 {{ \Request::is('blog*') ? '' : '' }}"
                    href="{{ route('blog') }}"
                >Blog</a>
                <div class="h-1 {{ \Request::is('blog*') ? 'bg-gradient' : '' }}"></div>
            </div>
            <div class="pr-10">
                <a
                    class="block py-4 px-2 font-black text-md sm:text-xl font-bold uppercase hover:text-teal-400 text-gray-800 {{ \Request::is('library*') ? '' : '' }}"
                    href="{{ route('library') }}"
                >Library</a>
                <div class="h-1 {{ \Request::is('library*') ? 'bg-gradient' : '' }}"></div>
            </div>
        </nav>

        <div id="app" class="min-h-screen">
            @yield('content')
        </div>

        {{-- <footer class="bg-blue-900 text-white text-xl font-black px-2 md:px-16 py-4">
            &copy; {{ \Carbon\Carbon::now()->format('Y') }}
        </footer> --}}

    @if (\Request::is('portfolio'))
        <script src="/js/app.js"></script>
    @elseif (\Request::is('blog*'))
        <script src="/js/blog.js"></script>
    @elseif (\Request::is('*helper'))
        <script src="/js/helper.js"></script>
    @elseif (\Request::is('library*'))
        <script src="/js/library.js"></script>
    @endif

    <script src="https://caribou.clintgwinter.com/script.js" site="YFXFFNIJ" defer></script>
</body>
</html>
