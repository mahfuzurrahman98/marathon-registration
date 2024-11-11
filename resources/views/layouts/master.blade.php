<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Where creative ideas come to life."> <!-- Meta description for SEO -->
    <meta name="keywords" content="web, design, development, data, analytics, graphics"> <!-- Meta keywords for SEO -->
    <meta name="author" content="Global Creations & IT"> <!-- Author of the page -->

    <link rel="icon" href="https://globalcreationsit.co.uk/assets/images/meta/favicon.ico" type="image/x-icon">
    <!-- Favicon -->

    {{-- <title>@yield('title') - Global Creations & IT</title> <!-- Page title --> --}}

    <!-- Open Graph Meta Tags for Social Media -->
    <meta property="og:title" content="@yield('title') - Global Creations & IT">
    <meta property="og:description" content="Where creative ideas come to life.">
    <meta property="og:image" content="https://globalcreationsit.co.uk/assets/images/meta/og-image.jpg">
    <!-- URL to the Open Graph image -->
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col min-h-screen bg-white" x-data="hamburgerMenu"
    @scroll.window="isScrolled = (window.pageYOffset > 0)">
    @include('layouts.header')

    <main class="flex-grow">
        @yield('main-content')
    </main>

    {{-- @include('layouts.footer') --}}
</body>

</html>
