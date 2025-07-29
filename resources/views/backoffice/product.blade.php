@extends('layouts.backoffice')
@section('title', 'products')


@section('content')

    <div class="col">
        @foreach ($products as $product)
            <div class="card hover-card col-lg-2 text-center mb-3">
                <x-back :product="$product" />
            </div>
        @endforeach
    </div>
@endsection