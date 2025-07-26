@extends('cart.cart')

@php
    $totalPrice = 0;
    $shippingPrice = 10.50;
@endphp
@section(section: 'products')
    @foreach ($productsList as $product)
        @include('cart.card',[
                    'title' => $product -> name,
                    'author' => $product -> author,
                    'price' => $product -> price,
                    'quantity' => $product -> quantity,
                    'urlImg' => $product -> img_url
        ])
        @php
            $totalPrice += $product -> price * $product -> quantity; 
        @endphp
    @endforeach
@endsection
@section('total-cart')
    @include('cart.total-cart',[
        'totalPrice' => $totalPrice + $shippingPrice,
        'shippingPrice' => $shippingPrice,
    ])
@endsection