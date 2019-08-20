<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CMS Panel | ClintGWinter</title>
    
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="font-body text-gray-800 bg-gray-100">

    <nav class="bg-white shadow-md mb-16">
        <ul class="px-16 py-6 flex">
            <li class="px-5">
                <a class="text-blue-500 font-bold uppercase" href="{{ route('portfolio') }}">Portfolio</a>
            </li>
            <li class="px-5">
                <a class="text-blue-500 font-bold uppercase" href="{{ route('blog') }}">Blog</a>
            </li>
        </ul>
    </nav>

    <div id="app" class="container mx-auto">
        @yield('content')
    </div>
    
    <script src="/js/blog.js"></script>

</body>
</html>