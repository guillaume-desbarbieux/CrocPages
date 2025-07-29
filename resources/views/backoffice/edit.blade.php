@extends('layouts.backoffice')
@section('title', 'Backoffice')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Modification du produit : {{ $product->title }}</h1>
        </div>

        <form method="POST" action="{{ route('backoffice.product.update', ['id' => $product->id]) }}"
            class="row justify-content-center">
            @csrf
            @method('PUT')
            <div class="col-6">
                <img class="img-fluid" src="{{ $product->img_url }}" alt="Image de couverture de {{ $product->title }}">
            </div>
            <div class="col-6">
                <label for="title">Titre :</label>
                <input id="title" type="text" name="title" value="{{ $product->title }}" />

                <label for="author">Auteur :</label>
                <input id="author" type="text" name="author" value="{{ $product->author }}" />

                <label for="tag">Tag(s) :</label>
                <input id="tag" type="text" name="tag" value="{{ $product->Tag->name }}" />

                <div class="row">
                    <label for="description">Description :</label>
                    <textarea id="description" name="description"
                        style="height: 20vw; width: 40vw;">{{ $product->description }}</textarea>
                </div>

                <label for="price">Prix :</label>
                <input id="price" type="number" name="price" value="{{ $product->price }}" />

                <label for="stock">Stock :</label>
                <input id="stock" type="number" name="stock" value="{{ $product->stock }}" />

                <div class="row justify-content-center mt-3">
                    <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                </div>
            </div>
        </form>

    </div>
@endsection