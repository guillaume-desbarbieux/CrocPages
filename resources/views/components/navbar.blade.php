<nav class="navbar gradient-header navbar-expand-lg">
    <div class="container-fluid align-item-center d-flex justify-content-between">
        <div class="dropdown-center">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('images/menuburger.svg') }}" alt="menu burger" height="30">
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('homepage') }}">Page d'accueil</a></li>
                <li><a class="dropdown-item" href="{{ route('catalog') }}">Catalogue</a></li>
                <li><a class="dropdown-item" href="#">Evenements</a></li>
                <li><a class="dropdown-item" href="{{ route('backoffice.product.index') }}">Accès Admin</a></li>

            </ul>
        </div>
        <div class="d-flex align-items-center justify-content-center gap-2">
            <h1 class="m-0">Croc</h1>
            <a href="{{ route('homepage') }}" class="mx-auto">
                <img src="{{ asset('images/logosite.svg') }}" alt="CrocPages" style="height: 10em">
            </a>
            <h1 class="m-0">Page</h1>
        </div>
        <a href="{{ route('cart') }}">
            <img src="{{ asset('images/logobasket.svg') }}" alt="logo panier" style="height: 3em">
        </a>
        @include('components.button-profil')
    </div>
</nav>
<x-search></x-search>