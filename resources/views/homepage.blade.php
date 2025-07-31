@extends('layouts.app')

@section('content')
    <style>
        .hero-image {
            background-image: url('https://asso.librairies-nouvelleaquitaine.com/wp-content/uploads/2020/07/librairie-le-passeur-vitrine-1-2000x1318.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
            height: 100vh;
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #ffffff;
            font-size: 1.5rem; 

        }

        .content-wrapper {
            background-color: white;
            padding: 3rem 1rem;
            position: relative;
            z-index: 1;
        }

        .bandeau {
            background-color: #F3E7A7;
            border: 4px solid #3E9838;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            margin-top: 20px;
        }

        .bandeau h1 {
            font-weight: bold;
            margin: 0;
        }

        .card {
            margin-bottom: 20px;
        }

        .scroll-btn {
            margin-top: 20px;
            background-color: #198754;
            border: 2px solid #3E9838;
            padding: 10px 20px;
            color: #ffffff;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .scroll-btn:hover {
            background-color: #3E9838;
            color: white;
        }
        .hero-text-bg {
  background-color: rgba(0, 0, 0, 0.7); 
  padding: 0.5rem 1rem;
  border-radius: 8px;
}
    </style>


    <div class="hero-image">
        <div class='hero-text-bg'>
        <h1 class="display-4">Bienvenue dans notre boutique</h1>
        </div>
        <a href="{{ route('map') }}" class="scroll-btn">Découvrir</a>
    </div>

    <div class="content-wrapper container mt-5">
        <div class="bandeau">
            <h1 class="fs-2">Meilleures Ventes</h1>
        </div>

        <div class="row justify-content-center mt-5">
            @foreach ($products as $product)
                @if ($product->stock > 0)
                    <div class="card hover-card col-12 col-sm-5 col-md-5 col-lg-2 text-center mx-2 mb-3">
                        <x-card :product="$product" />
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection
