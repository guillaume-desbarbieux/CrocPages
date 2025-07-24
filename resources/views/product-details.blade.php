@extends('home.app')

@section('title', 'Produits')

@section('content')
<div class="d-flex gap-3">
    <img src="{{ $article['imgUrl'] }}" alt="{{ $article['title'] }}" width="350">
    <div>
        <h1>{{ $article['title'] }}</h1>
        <h3>{{ $article['author'] }}</h3>
        <p>Disponibilités: </p>
        <p>Favoris: </p>
        <p>Prix : {{ $article['price'] }} €</p>
        <div class="mt-3">
            <input class="btn btn-success btn-lg" type="button" value="Ajouter au Panier">
        </div>
    </div>
</div>
<div class="mt-3">
    <p>{{ $article['description'] }}</p>
</div>

@endsection