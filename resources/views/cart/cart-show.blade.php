@extends('cart.cart')

@php
    $articles = [
            [
                'title' => "Ravage",
                'author' => "Barjavel",
                'price' => 10,
                'quantity' => 2,
                'urlImg' => "https://m.media-amazon.com/images/I/81--VV+ZXrL.jpg"
            ],
            [
                'title' => "1984",
                'author' => "George Orwell",
                'price' => 12,
                'quantity' => 2,
                'urlImg' => "https://static.fnac-static.com/multimedia/PE/Images/FR/NR/10/35/01/79120/1507-1/tsp20250103092736/1984.jpg"
            ],
            [
                'title' => "Fahrenheit 451",
                'author' => "Ray Bradbury",
                'price' => 11,
                'quantity' => 2,
                'urlImg' => "https://m.media-amazon.com/images/I/71OFqSRFDgL.jpg"
            ]
        ];
@endphp

@section('products')
    @foreach ($articles as $product)
        @include('cart.card',[
                    'title' => $product['title'],
                    'author' => $product['author'],
                    'price' => $product['price'],
                    'quantity' => $product['quantity'],
                    'urlImg' => $product['urlImg']
        ]) 
    @endforeach
    
@endsection