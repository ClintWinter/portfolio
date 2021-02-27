@props([
    'title' => 'Clint Winter | Software Developer',
    'metadescription' => 'Clint Winter\'s hub for projects, blog posts, resources and more. Clint is a web/software developer in New Jersey currently working at DirectLync. He works with PHP, Laravel, Javascript, VueJS, Tailwind CSS, AlpineJS, Laravel Livewire, MySQL, etc.',
])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="{{ $metadescription }}">
    <title>{{ $title }}</title>

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Inter:400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="font-body bg-darkbg text-regular">
        <header>
            <div class="container mx-auto flex justify-between items-center sm:items-end px-2 sm:px-4 py-6">
                <div>
                    <h1 class="text-4xl md:text-5xl text-red leading-none uppercase"><strong><a href="/">$Clint_Winter</a></strong></h1>
                </div>
            </div>
        </header>

        <nav class="text-orange font-display">
            <div class="container mx-auto flex px-0 sm:px-4">
                <div class="pr-10">
                    <a class="block py-4 px-2 text-base sm:text-xl font-bold uppercase hover:underline {{ \Request::is('projects') ? 'underline' : '' }}" href="{{ route('projects') }}">$Projects</a>
                </div>

                <div class="pr-10">
                    <a class="block py-4 px-2 text-base sm:text-xl font-bold uppercase hover:underline {{ \Request::is('articles*') ? 'underline' : '' }}" href="{{ route('articles') }}">$Blog</a>
                </div>

                <div class="pr-10">
                    <a class="block py-4 px-2 text-base sm:text-xl font-bold uppercase hover:underline {{ \Request::is('library*') ? 'underline' : '' }}" href="{{ route('library') }}">$Library</a>
                </div>
            </div>
        </nav>

        <div class="h-20"></div>

        <div id="app">
            {{ $slot }}
        </div>

        <div class="h-20"></div>

        <hr class="container mx-auto border-b border-dark">

        <div class="h-4"></div>

        <footer class="bg-gray-900 px-2 md:px-16 py-12">
            <div class="flex justify-center container mx-auto font-display">
                <div class="flex flex-col pr-12 md:pr-32">
                    <p class="uppercase text-purple"><strong>Resources</strong></p>

                    <div class="h-4"></div>

                    <a class="text-sm hover:underline" href="{{ route('projects') }}">Projects</a>

                    <div class="h-6"></div>

                    <a class="text-sm hover:underline" href="{{ route('articles') }}">Blog</a>

                    <div class="h-6"></div>

                    <a class="text-sm hover:underline" href="{{ route('library') }}">Library</a>
                </div>

                <div class="flex flex-col pr-12 md:pr-32">
                    <p class="uppercase text-purple"><strong>Contact</strong></p>

                    <div class="h-4"></div>

                    <a class="text-sm hover:underline" href="mailto:cwinter.web@gmail.com">Email</a>
                </div>

                <div class="flex flex-col">
                    <p class="uppercase text-purple"><strong>Links</strong></p>

                    <div class="h-4"></div>

                    <a
                        aria-label="Github in new tab"
                        href="https://github.com/clintwinter"
                        class="mb-6 flex items-center hover:text-yellow"
                        target="_blank"
                        rel="noopener noreferrer"
                    ><i class="text-2xl fab fa-github mr-2"></i><span class="text-sm">Github</span></a>

                    <a
                        aria-label="LinkedIn in new tab"
                        href="https://linkedin.com/in/clint-winter"
                         class="mb-6 flex items-center hover:text-yellow"
                         target="_blank"
                         rel="noopener noreferrer"
                        ><i class="text-2xl fab fa-linkedin-in mr-2"></i><span class="text-sm">LinkedIn</span></a>

                    <a
                        aria-label="View PDF resume in new tab"
                        href="{{ Storage::url('ClintWinterResume.pdf') }}"
                        class="mb-6 flex items-center hover:text-yellow"
                        target="_blank"
                        rel="noopener noreferrer"
                    ><i class="text-2xl fas fa-user-tie mr-2"></i><span class="text-sm">Resume</span></a>

                    <a
                        aria-label="Clint Winter's DEV profile"
                        href="https://dev.to/clintwinter"
                        class="mb-6 flex items-center hover:text-yellow"
                        target="_blank"
                        rel="noopener noreferrer"
                    ><i class="text-2xl fab fa-dev mr-2"></i><span class="text-sm">More Blogging</span></a>

                    <a
                        aria-label="View PDF resume in new tab"
                        href="https://twitter.com/ClintGWinter"
                        class="mb-6 flex items-center hover:text-yellow"
                        target="_blank"
                        rel="noopener noreferrer"
                    ><i class="text-2xl fab fa-twitter mr-2"></i><span class="text-sm">Twitter</span></a>

                    <a
                        aria-label="View PDF resume in new tab"
                        href="https://www.codementor.io/@clintwinter?refer=badge"
                        class="flex items-center hover:text-yellow"
                        target="_blank"
                        rel="noopener noreferrer"
                    ><img src="https://www.codementor.io/m-badges/clintwinter/im-a-cm-g.svg"></a>
                </div>
            </div>

            <div class="h-12"></div>

            <div class="text-center">
                <p class="text-xs"> This website is being designed and produced by Clint Winter &nbsp;&bullet;&nbsp; Website stats that don't track your personal data by <a class="font-bold underline" href="https://usefathom.com/ref/Y84A28">Fathom Analytics</a> &nbsp;&bullet;&nbsp; Proudly hosted with <a class="font-bold underline" href="https://m.do.co/c/1bd7d55ee985">Digital Ocean</a></p>
            </div>
        </footer>

    @if (\Request::is('portfolio'))
        <script src="/js/app.js"></script>
    @elseif (\Request::is('articles*'))
        <script src="/js/blog.js"></script>
    @elseif (\Request::is('*helper'))
        <script src="/js/helper.js"></script>
    @elseif (\Request::is('library*'))
        <script src="/js/library.js"></script>
    @endif

    <script src="https://caribou.clintgwinter.com/script.js" site="YFXFFNIJ" excluded-domains="localhost" included-domains="clintgwinter.com" defer></script>
</body>
</html>
