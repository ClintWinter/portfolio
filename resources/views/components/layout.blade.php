<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="{{ $metadescription ?? 'Clint Winter\'s hub for projects, blog posts, resources and more. Clint is a web/software developer in New Jersey currently working at DirectLync. He works with PHP, Laravel, Javascript, VueJS, Tailwind CSS, AlpineJS, Laravel Livewire, MySQL, etc.' }}">

    <meta property="og:title" content="{{ $title ?? 'Clint Winter | Software Developer' }}">
    <meta property="og:description" content="{{ $metadescription ?? 'Clint Winter\'s hub for projects, blog posts, resources and more. Clint is a web/software developer in New Jersey currently working at DirectLync. He works with PHP, Laravel, Javascript, VueJS, Tailwind CSS, AlpineJS, Laravel Livewire, MySQL, etc.' }}">
    <meta property="og:image" content="{{ asset('storage/images/meta_image.png') }}">
    <meta property="og:image:width" content="1100">
    <meta property="og:image:height" content="568">
    <meta property="og:url" content="{{ url()->full() }}">
    <meta name="twitter:card" content="summary_large_image">

    <title>{{ $title ?? 'Clint Winter | Software Developer' }}</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&family=JetBrains+Mono:ital,wght@0,400;0,700;0,800;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <script src="https://minnow.clintwinter.me/script.js" data-site="POEWOFVX" defer></script>
</head>
<body class="font-body bg-darkbg text-regular">
    <x-header />

    <div class="mb-20">{{ $slot }}</div>

    <x-footer />
</body>
</html>
