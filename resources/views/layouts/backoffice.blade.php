<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <style>
        .gradient-header {
            background: linear-gradient(to bottom, #f7e89b 0%, #ffffff 100%);
        }
    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Mon site')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header class="">
        @include('layouts.navigation')
        <div class="row d-flex justify-content-center text-center">
            <div class="col-4">
                <a class="btn btn-secondary"href='{{ route('homepage') }}'>Retour au site</a>
            </div>
            <div class="col-4">
                <a class="btn btn-secondary" href="{{ route('backoffice.product.index') }}">Accès a l'inventaire</a>
            </div>
            <div class="col-4">
                <a class="btn btn-secondary" href="{{ route('backoffice.product.create') }}">Ajouter un livre</a>
            </div>
        </div>

    </header>

    <main>
        @yield('content')
    </main>


    <footer class="bg-dark text-white text-center py-3 mt-4">
        Mon Backoffice
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>