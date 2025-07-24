@extends('home.base')

@section('promotionnalBanner')
    <div class="row bg-danger text-center p-0 m-0">
        <div class="col">
            <p>Bandeau promo</p>
        </div>
    </div>
@endsection

@section('header')
    <div class="row m-0">
        <nav class="navbar navbar-expand-lg bg-success">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('homepage') }}">Croc Pages</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('catalog') }}" >Catalogue</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('cart') }}">Panier</a>
                        </li>
                    </ul>
                </div>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>
@endsection


@section('content')
    <div class="row">
        <h2>Meilleures Ventes</h2>
    </div>

    @php
        $articles = [
            [
                'title' => "Ravage",
                'author' => "Barjavel",
                'price' => 10,
                'imgUrl' => "https://m.media-amazon.com/images/I/81--VV+ZXrL.jpg",
                'id' => 1
            ],
            [
                'title' => "1984",
                'author' => "George Orwell",
                'price' => 12,
                'imgUrl' => "https://static.fnac-static.com/multimedia/PE/Images/FR/NR/10/35/01/79120/1507-1/tsp20250103092736/1984.jpg",
                'id' => 2
            ],
            [
                'title' => "Fahrenheit 451",
                'author' => "Ray Bradbury",
                'price' => 11,
                'imgUrl' => "https://m.media-amazon.com/images/I/71OFqSRFDgL.jpg",
                'id' => 3
            ],
            [
                'title' => "Le Meilleur des mondes",
                'author' => "Aldous Huxley",
                'price' => 13,
                'imgUrl' => "https://m.media-amazon.com/images/I/61v7bRPlQPL._UF1000,1000_QL80_.jpg",
                'id' => 4
            ],
            [
                'title' => "La Nuit des temps",
                'author' => "Barjavel",
                'price' => 14,
                'imgUrl' => "https://m.media-amazon.com/images/I/51agfIYIv3L._UF1000,1000_QL80_.jpg",
                'id' => 5
            ],
            [
                'title' => "Fondation",
                'author' => "Isaac Asimov",
                'price' => 15,
                'imgUrl' => "https://www.gallimard.fr/system/files/styles/medium/private/migrations/ouvrages/couvertures/A36053.jpg.webp?itok=F4kBRbnD",
                'id' => 6
            ],
            [
                'title' => "Dune",
                'author' => "Frank Herbert",
                'price' => 16,
                'imgUrl' => "https://m.media-amazon.com/images/I/61HLU-TCZ8L.jpg",
                'id' => 7
            ],
            [
                'title' => "Les Robots",
                'author' => "Isaac Asimov",
                'price' => 10,
                'imgUrl' => "https://m.media-amazon.com/images/I/51DcyR3DuwL._UF1000,1000_QL80_.jpg",
                'id' => 8
            ],
            [
                'title' => "Ubik",
                'author' => "Philip K. Dick",
                'price' => 9,
                'imgUrl' => "https://m.media-amazon.com/images/I/61N9jehRGHL._UF1000,1000_QL80_.jpg",
                'id' => 9
            ],
            [
                'title' => "Solaris",
                'author' => "Stanislas Lem",
                'price' => 12,
                'imgUrl' => "https://m.media-amazon.com/images/I/61+kEy9J6eL._UF1000,1000_QL80_.jpg",
                'id' => 10
            ]
        ];
    @endphp

    <div class="row">
        @foreach ($articles as $article)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <x-home.card :article="$article" />
            </div>
        @endforeach
    </div>
@endsection

@section('footer')
    <h4 class="text-center bg-success">footer</h4>
@endsection