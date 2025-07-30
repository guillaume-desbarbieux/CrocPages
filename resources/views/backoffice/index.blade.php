@extends('layouts.backoffice')
@section('title', 'backoffice')


@section('content')


    <div class="row text-center mt-4">
        <h1>Bienvenue sur votre accès Administrateur</h1>
    </div>
    @if($isDeleted == 1)
        <div class="row justify-content-center">
                <div class="col-4 alert alert-success">
                    <p class="text-center">Le produit a été supprimé.</p>
                </div>
        </div>
    @endif
    <div class="row justify-content-center">

        @foreach ($products as $product)
            <div class="col-2" >
                @include('components.card-back-office', ['product' => $product] )
            </div>
        @endforeach

    </div>

@endsection
