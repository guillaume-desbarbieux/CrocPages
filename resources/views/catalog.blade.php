@extends('layouts.app')
@section('title', 'Catalogue')
@section('content')


     <style>
      .bandeau {
        background-color: #F3E7A7;
        border: 4px solid #3E9838;
        padding: 20px;
        border-radius: 8px;
        text-align: center;
        margin-top: 30px;
    }
    .bandeau h1 {
        font-weight: bold;
        margin: 0;
    }
    .card {
        margin-bottom: 20px;
    }
        
    </style>
                <div class="bandeau">
                    <h1>TOUTES LES PUBLICATIONS</h1>
                </div>
       
                <div class="row">
    @foreach($articles as $article)
        <div class="col-md-4">
            <div class="card">
                <img src="{{ $article['imgUrl'] }}" class="card-img-top" alt="{{ $article['title'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $article['title'] }}</h5>
                    <p class="card-text">Auteur : {{ $article['author'] }}</p>
                    <p class="card-text">Prix : {{ $article['price'] }} €</p>
                </div>
            </div>
        </div>
    @endforeach
</div>

    @endsection
