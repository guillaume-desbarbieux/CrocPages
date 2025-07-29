@extends('layouts.backoffice')
@section('title', 'backoffice')


@section('content')

    <div>
        <h1 class="text-center">Inventaire</h1>
    </div>

    <div class="row justify-content-center mt-5">
        @foreach ($products as $product)
            <div class="card hover-card col-2 text-center mx-2 mb-3">
                <a class="text-decoration-none text-dark"
                href="{{ route('backoffice.products.show', ['id' => $product->id, 'success' => null]) }}">
                    <x-BO-card :product="$product" />
                </a>
            </div>
        @endforeach
    </div>

@endsection