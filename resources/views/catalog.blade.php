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
                    <h1 class="fs-2">TOUTES LES PUBLICATIONS</h1>
                </div>
       


<div class="row justify-content-center mt-5">
        @foreach ($products as $product)
            <div class="card hover-card col-12 col-sm-5 col-md-5 col-lg-2 text-center mx-2 mb-3" >
                <x-card :product="$product" />
            </div>
        @endforeach
    </div>
@endsection
