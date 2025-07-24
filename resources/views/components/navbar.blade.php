<nav class="navbar bg-body-secondary">
    <div class="container-fluid align-item-center d-flex justify-content-between">
        <div class="dropdown-center">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('images/menuburger.svg') }}" alt="menu burger" height="30">
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('homepage') }}">Page d'accueil</a></li>
                <li><a class="dropdown-item" href="{{ route('catalog') }}">Catalogue</a></li>
                <li><a class="dropdown-item" href="#">Evenements</a></li>
            </ul>
        </div>


        <a href="{{ route('homepage') }}" class="mx-auto">
            <img src="{{ asset('images/logosite.svg') }}" alt="CrocPages" style="height: 10em">
        </a>
        <a href="{{ route('cart') }}">
            <img src="{{ asset('images/logobasket.svg') }}" alt="logo panier" style="height: 3em">
        </a>
        <a href="#">
            <img src="{{ asset('images/Profil.svg') }}" alt="Profil utilisateur" style="height: 3em">
        </a>
    </div>
</nav>
<x-search></x-search>