@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<h1>Accueil</h1>

<x-alert type="success">
    Bienvenue sur notre site !
</x-alert>

<div class="d-flex gap-3">
    <x-card 
        title="Produit 1" 
        image="https://via.placeholder.com/150"
        link="#"
    >
        Découvrez ce magnifique produit.
    </x-card>

    <x-card 
        title="Produit 2" 
        image="https://via.placeholder.com/150"
        link="#"
    >
        Encore un produit exceptionnel.
    </x-card>
</div>
@endsection