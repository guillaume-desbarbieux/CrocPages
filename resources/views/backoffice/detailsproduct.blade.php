@extends('layouts.backoffice')
@section('title', 'detailproduct')


@section('content')
<div class="d-flex gap-3">
    <img src="{{ $product->img_url }}" alt="{{ $product->title }}" width="350">
    <div>
        <h1>{{ $product->title }}</h1>
        <h3>{{ $product->author }}</h3>

        <p>Tag : <span class="badge bg-primary">{{ $product->tag->name ?? 'Aucun' }}</span></p>
        <p>Disponibilités: 
            @if($product->stock > 0)
                En stock ({{ $product->stock }})
            @else
                <span class="text-danger">Rupture de stock</span>
            @endif
        </p>
        <p>Prix : {{ $product->price }} €</p>
        <div class="mt-3">
         <a href="{{ route('products.edit', ['id' => $product->id]) }}" class="btn btn-danger btn-lg">Éditer</a>
        </div>
    </div>
</div>
<div class="mt-3">
    <h2>- Déscription -</h2>
    <p>{{ $product->description }}</p>
</div>
@endsection