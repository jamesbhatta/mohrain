<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Software Company in Dhangadhi | Mohrain Websoft</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@400;500;700;900&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> --}}

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <meta name="facebook-domain-verification" content="1orxlusgf1k0agamfuolgevri5hmph" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MQQYV4EKSW"></script>
    <style>
        [x-cloak] {
            display: none;
        }
    </style>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-MQQYV4EKSW');

    </script>
    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <style>
        /* font-family: 'Red Hat Display',
        sans-serif;
        font-family: 'Rubik',
        sans-serif; */

    </style>
    @stack('styles')
    {{ $styles ?? '' }}
</head>
<body class="font-red-hat antialiased" style="color: #2f2e41;">
    <div class="min-h-screen">
        <x-app-header></x-app-header>

        <!-- Page Heading -->
        @isset($header)
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endisset

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
        <x-app-footer></x-app-footer>
    </div>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    @livewireScripts
    @stack('scripts')

</body>
</html>
