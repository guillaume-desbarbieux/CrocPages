@extends('cart.cart')

@section(section: 'products')
    @foreach ($productsList as $product)
        @include('cart.card',[
                    'title' => $product -> name,
                    'author' => $product -> author,
                    'price' => $product -> price,
                    'quantity' => 1,
                    'urlImg' => $product -> img_url
        ]) 
    @endforeach
@endsection
@section('total-cart')
    @include('cart.total-cart',[
        'totalPrice' => 300.99,
        'shippingPrice' => 10.50
    ])
@endsection