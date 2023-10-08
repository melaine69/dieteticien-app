<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="font-sans antialiased">
<header class=" flex items-center mx-auto px-6 lg:px-8 py-4 max-w-7xl">
    <div class="text-lg font-bold">
        <a href="{{ route('welcome') }}">
       <img src="assets/logo.png" class="w-40 h-40 fill-current" alt="logo"/>
    </a>
    </div>

    @if (Route::has('login'))
        <div class="flex items-center gap-4 ml-auto">
            @auth
                <a href="{{ url('/dashboard') }}"
                   class="bg-fuchsia-200 p-3 rounded-xl font-semibold text-gray-900 hover:text-gray-500">{{ __('Dashboard') }}</a>
            @else
                <a href="{{ route('login') }}"
                   class="bg-fuchsia-200 p-3 rounded-xl font-semibold text-gray-900 hover:text-gray-500">{{ __('Log in') }}</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                       class="bg-fuchsia-200 p-3 rounded-xl font-semibold text-gray-900 hover:text-gray-500">{{ __('Register') }}</a>
                @endif
            @endauth
        </div>
    @endif
</header>

<!-- Page Content -->
<main>
    {!!  $slot !!}
</main>

@include('layouts.footer')
</body>
</html>
