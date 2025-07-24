<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>@yield('title', 'Mon site')</title>
    <style>
    .gradient-header {
        background: linear-gradient(to bottom, #f7e89b 0%, #ffffff 100%);
    }
    </style>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<header>

</header>
    <x-promo-banner>Promo du jour</x-promo-banner>
    <div class="container">
        <x-navbar></x-navbar>
    </div>

<div class="container mt-4">
    @yield('content')
</div>

<footer class="bg-dark text-white text-center py-3 mt-4">
    © 2025 - Mon site
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>