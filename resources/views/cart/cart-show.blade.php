@extends('cart.cart')

@php
    $totalPrice = 0;
@endphp
@section(section: 'products')
    @if (empty($productsList))
        <p>Aucun produit dans le panier.</p>
    @else
        @foreach ($productsList as $product)
            @include('cart.card', [
                'id' => $product->id,
                'title' => $product->title,
                'author' => $product->author,
                'price' => $product->price,
                'quantity' => $product->quantity,
                'urlImg' => $product->img_url
            ])
                    @php
                        $totalPrice += $product->price * $product->quantity; 
                    @endphp
        @endforeach
    @endif

@endsection
@section('total-cart')
    @include('cart.total-cart', [
        'totalPrice' => $totalPrice,
    ])
@endsection