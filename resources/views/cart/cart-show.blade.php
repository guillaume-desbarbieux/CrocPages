@extends('cart.cart')

@php
    $totalPrice = 0;
@endphp
@section(section: 'products')
    @foreach ($productsList as $product)
        <form method="POST" action="{{ route('cart.updateQuantity', ['productId' => $product->id]) }}" class="mt-2" >
            @csrf
            @method('PUT')
            @include('cart.card',[
                    'title' => $product -> name,
                    'author' => $product -> author,
                    'price' => $product -> price,
                    'quantity' => $product -> quantity,
                    'urlImg' => $product -> img_url
            ])
        </form>
        @php
            $totalPrice += $product -> price * $product -> quantity; 
        @endphp
    @endforeach
@endsection
@section('total-cart')
    @include('cart.total-cart',[
        'totalPrice' => $totalPrice,
    ])
@endsection