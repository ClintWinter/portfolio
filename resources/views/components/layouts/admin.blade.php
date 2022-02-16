<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'CMS Panel | ClintGWinter')</title>

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>
<body class="font-body bg-darkbg text-regular">
    <div class="flex flex-col md:flex-row items-stretch">
        <div class="h-screen flex flex-col justify-between min-w-40 py-8 border-r border-dark">
            <div>
                <h1 class="mb-6 px-4 font-bold font-display text-xl text-red">clintwinter.me</h1>

                <nav>
                    <ul class="flex flex-col sm:flex-row md:flex-col text-lg">
                        <li class="font-display font-bold cursor-pointer hover:bg-yellow hover:text-darkbg {{ Request::is('admin/posts*') ? 'text-darkbg bg-orange' : '' }}">
                            <a class="w-full inline-block py-3 px-4" href="{{ route('admin.posts.index') }}">$Blog_Posts</a>
                        </li>
                        <li class="font-display font-bold cursor-pointer hover:bg-yellow hover:text-darkbg {{ Request::is('admin/resources*') ? 'text-darkbg bg-orange' : '' }}">
                            <a class="w-full inline-block py-3 px-4" href="{{ route('admin.resources.index') }}">$Library</a>
                        </li>
                        {{-- <li class="font-display font-bold cursor-pointer hover:bg-yellow hover:text-darkbg {{ Request::is('admin/projects*') ? 'text-darkbg bg-orange' : '' }}">
                            <a class="w-full inline-block py-3 px-4" href="#">$Projects</a>
                        </li> --}}
                    </ul>
                </nav>
            </div>

            <div class="px-4 flex">
                <a class="flex-grow px-2 py-1 text-center font-display font-bold bg-orange text-darkbg focus:outline-none focus:bg-teal hover:bg-teal transition-colors duration-200" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">$logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>

        <main class="overflow-scroll flex-grow h-screen">
            {{ $slot }}
        </main>
    </div>

    <script src="/js/admin.js"></script>
</body>
</html>
