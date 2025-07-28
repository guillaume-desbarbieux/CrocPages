@extends('layouts.backoffice')
@section('title', 'backoffice')


@section('content')


    <div class="row">
        <h1>Bienvenue sur votre accès Administrateur</h1>
    </div>

    <div class="row justify-content-center mt-5">

        @foreach ($products as $product)
            <div class="col-2">
                @include('components.card-back-office', ['product' => $product] )
            </div>
        @endforeach

    </div>

@endsection
