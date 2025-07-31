<header class="gradient-header sticky-top">
    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid d-flex justify-content-between align-items-center flex-wrap">

            {{-- Menu burger --}}
            <div class="dropdown-center">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('images/menuburger.svg') }}" alt="menu burger" height="30">
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('homepage') }}">Accueil</a></li>
                    <li><a class="dropdown-item" href="{{ route('catalog') }}">Catalogue</a></li>
                    <li><a class="dropdown-item" href="#">Événements</a></li>
                    <li><a class="dropdown-item" href="{{ route('map') }}">Trouver la boutique</a></li>

                    <li><a class="dropdown-item" href="{{ route('backoffice.product.index') }}">Admin</a></li>
                </ul>
            </div>

            {{-- Logo centré --}}
            <div class="d-flex align-items-center justify-content-center mx-auto">
                <h1 class="m-0">Croc</h1>
                <a href="{{ route('homepage') }}">
                    <img src="{{ asset('images/logosite.svg') }}" alt="CrocPages" style="height: 8em;">
                </a>
                <h1 class="m-0">Page</h1>
            </div>

            {{-- Icônes panier + profil --}}
            <div class="d-flex align-items-center gap-3">
                <a href="{{ route('cart') }}">
                    <img src="{{ asset('images/logobasket.svg') }}" alt="Panier" style="height: 3em;">
                </a>
                <a href="#">
                    <img src="{{ asset('images/Profil.svg') }}" alt="Profil" style="height: 3em;">
                </a>
            </div>
        </div>
    </nav>

    {{-- BARRE DE RECHERCHE CENTRÉE --}}
    <div class="container d-flex justify-content-center my-3">
        <form class="d-flex" role="search" style="max-width: 600px; width: 100%;">
            <input class="form-control me-2 mb-3" type="search" placeholder="Recherchez un livre..." aria-label="Search">
            <button class="btn btn-success mb-3" type="submit">Recherchez</button>
        </form>
    </div>
</header>
