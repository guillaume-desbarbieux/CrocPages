@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="row text-center">
            <h1>Ma boutique</h1>
        </div>
        <div class="row">
            <img class="img-fluid"
                src="https://asso.librairies-nouvelleaquitaine.com/wp-content/uploads/2020/07/librairie-le-passeur-vitrine-1-2000x1318.jpg"
                alt="ma super boutique">
        </div>
        <div class="row text-center">
            <p> Nous vous attendons ! </p>
        </div>
    </div>


    <div class="row mx-0 my-2 text-center bg-warning-subtle ">
        <h2>Meilleures Ventes</h2>
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
@endsection