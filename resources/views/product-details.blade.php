@extends('layouts.app')

@section('title', 'Produits')

@section('content')
<div class="d-flex gap-3">
    <img src="{{ $product->img_url }}" alt="{{ $product->name }}" width="350">
    <div>
        <h1>{{ $product->name }}</h1>
        <h3>{{ $product->author }}</h3>
        <p>Disponibilités: </p>
        <p>Favoris: </p>
        <p>Prix : {{ $product->price }} €</p>
        <div class="mt-3">
            <input class="btn btn-success btn-lg" type="button" value="Ajouter au Panier">
        </div>
    </div>
</div>
<div class="mt-3">
    <p>{{ $product->description }}</p>
</div>
@endsection
