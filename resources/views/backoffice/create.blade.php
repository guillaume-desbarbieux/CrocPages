@extends('layouts.backoffice')

@section('title', 'Produits')

@section('content')
<x-product-form :product="new App\Models\Product"/>
@endsection