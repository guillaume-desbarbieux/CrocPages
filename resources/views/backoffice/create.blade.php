@extends('layouts.backoffice')

@section('title', 'Produits')

@section('content')
    <h1 class="text-center bg-warning"> Ajout d'une nouvelle référence</h1>
    <form method="post" action="{{ route('backoffice.products.save') }}">
        @csrf
        @method('PUT')
        <div class="container gap-3">
            <label for="title">Titre :</label>
            <input type="text" id="title" name="title">

            <label for="author">Auteur :</label>
            <input type="text" id="author" name="author"><br>

            <label for="description">Description :</label>
            <textarea type="text" id="description" name="description" rows="10"
                cols="100"></textarea><br>

            <label for="img_url">Image :</label>
            <textarea type="text" id="img_url" name="img_url" rows="1" cols="100"></textarea><br>

            <label for="tag">Tag :</label>
            <input type="number" id="tag" name="tag_id">

            <label for="stock">Stock :</label>
            <input type="number" id="stock" name="stock">

            <label for="price">Prix :</label>
            <input type="number" id="price" name="price"><br>
            <div class="mt-3">
                <input class="btn btn-warning btn-lg" type="submit" value="Ajouter le produit au catalogue">
            </div>
        </div>
    </form>
@endsection