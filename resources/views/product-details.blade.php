@extends('layouts.app')

@section('title', 'Produits')

@section('content')
    <div class="d-flex gap-3">
        <img src="{{ $product->img_url }}" alt="{{ $product->title }}" width="350">
        <div>
            <h1>{{ $product->title }}</h1>
            <h3>{{ $product->author }}</h3>
            @if($product->tag_id != 1)
                <p>Tag : <span class="badge bg-primary">{{ $product->tag->name}}</span></p>
            @endif
            <p>Disponibilités:
                @if($product->stock > 0)
                    En stock ({{ $product->stock }})
                @else
                    <span class="text-danger">Rupture de stock</span>
                @endif
            </p>
            <p>Favoris: (à implémenter)</p>
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