<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
       
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>@yield('title', 'Mon site')</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
            .gradient-header {
                background: linear-gradient(to bottom, #f7e89b 0%, #ffffff 100%);
            }
    </style>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <header>
            <x-promo-banner>Promo du jour</x-promo-banner>
        </header>
        @if(session('isAdded') === true)
            <div class="alert alert-success text-center m-0">Produit ajouté au panier !</div>
        @elseif(session('isAdded') === false)
            <div class="alert alert-danger text-center m-0">Ce produit est en rupture de stock.</div>
        @endif



        <div class="container">
            <x-navbar></x-navbar>
        </div>
        <div class="container mt-4">
            @yield('content')
        </div>

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
            @if(isset($slot))
                {{ $slot }}
            @endif
        </main> 
    </div>
    <footer class="bg-dark text-white text-center py-3 mt-4">
        © 2025 - Mon site
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>