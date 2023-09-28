<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title') </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite('resources/css/app.css')
</head>
<body class="bg-gray-200 min-h-screen">
<header class="bg-white">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="/" class="-m-1.5 p-1.5">
                <span class="sr-only">GYM Management</span>
                <img class="h-16 w-auto" src="{{ asset("assets/img/icon.png") }}" alt="">
            </a>
        </div>
        @auth()
            <div class="lg:flex lg:gap-x-12">
                <a href="{{ route("main") }}" class="text-sm font-semibold leading-6 text-gray-900">Dashboard</a>
                <a href="{{ route("members.index") }}" class="text-sm font-semibold leading-6 text-gray-900">Members</a>
                <a href="{{ route("trainers.index") }}" class="text-sm font-semibold leading-6 text-gray-900">Trainers</a>
            </div>
            <div class="lg:flex lg:flex-1 lg:justify-end">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-sm font-semibold leading-6 text-gray-900">Log out <span aria-hidden="true">&rarr;</span></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        @endauth
    </nav>
</header>
<div class="">
    @yield("content")
</div>
@vite('resources/js/app.js')
</body>
</html>
