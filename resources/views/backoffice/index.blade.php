@extends('layouts.backoffice')
@section('title', 'backoffice')


@section('content')


    <div>
        <h1>Bienvenue sur votre accès Administrateur</h1>
    </div>

    <div class="row justify-content-center mt-5">
        @foreach ($products as $product)
            <div class="card hover-card col-12 col-sm-5 col-md-5 col-lg-2 text-center mx-2 mb-3">
                <x-card-admin :product="$product" />
            </div>
        @endforeach
    </div>

@endsection
