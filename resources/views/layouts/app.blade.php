<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>@yield('title', 'Croc-Page')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

   <header>
    <nav>
        <a href="{{ route('homepage') }}">Accueil</a> |
        <a href="{{ route('catalog') }}">Catalogue</a>
    </nav>
</header>


  <div class="container mt-4">
        @yield('content')
    </div>

    <footer>
       footer
    </footer>

</body>
</html>
