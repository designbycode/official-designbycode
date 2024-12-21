<!doctype html>
<html lang="en" dir="ltr" class="h-full scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? config('app.name') }}</title>

    <!--fonts-->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:300,500,600i,700,800i,900,900i" rel="stylesheet" />

    <!-- styles -->
    @vite(['resources/css/app.css', 'resources/ts/app.ts'])

</head>
<body class="antialiased h-full dark:bg-gray-900 bg-white text-gray-900 dark:text-white flex flex-col ">

<a class="sr-only  focus:not-sr-only focus:fixed top-4 left-4 z-50 focus:px-2 focus:py-1 rounded hover:bg-white/20" href="#main">Skip to main</a>
<a class="sr-only  focus:not-sr-only focus:fixed top-4 left-4 z-50 focus:px-2 focus:py-1 rounded hover:bg-white/20" href="#footer">Skip to footer</a>

<x-layout::navigation />

<main id="main">
    {{ $slot }}
</main>

<x-layout::footer />
</body>
</html>
