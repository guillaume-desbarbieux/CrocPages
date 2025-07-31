@extends('layouts.app')

@section('content')
<h2 class="text-center">Voici les résultats de votre recherche: "{{ $input }}"</h2>
@if($products->isEmpty())
<p>Aucun résultat trouvé.</p>
@endif

@if($products->isNotEmpty())
<div class="content-wrapper container mt-5">


    <div class="row justify-content-center mt-5">
        @foreach ($products as $product)
        @if ($product->stock > 0)
        <div class="card hover-card col-12 col-sm-5 col-md-5 col-lg-2 text-center mx-2 mb-3">
            <x-card :product="$product" />
        </div>
        @endif
        @endforeach
    </div>
</div>
@endif


@endsection