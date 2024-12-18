<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:400,500,600,900&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/ts/app.ts'])
</head>
<body class="font-sans antialiased dark:bg-gray-900 dark:text-white/60 h-full flex flex-col">

    <x-navigation/>
    <main id="main">
        {{ $slot }}
    </main>
    <x-footer class="mt-auto"/>
</body>
</html>
