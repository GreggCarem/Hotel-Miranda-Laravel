<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Hotel Miranda')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- CSS Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <!-- JS Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!-- Navigation -->
    <div class="center__nav">
        @include('partials.navigation') <!-- Include the navigation partial -->
    </div>

    <!-- Main Content Area -->
    <div class="content">
        @yield('content') <!-- Page-specific content will be injected here -->
    </div>

    <!-- Footer -->
    @include('partials.footer') <!-- Include the footer partial -->

    <script src="{{ asset('js/nav-bar.js') }}" defer></script>
    <script src="{{ asset('js/header-index.js') }}" defer></script>
    <script src="{{ asset('js/slider.js') }}" defer></script>
</body>
</html>