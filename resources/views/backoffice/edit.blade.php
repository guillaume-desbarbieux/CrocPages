@extends('layouts.backoffice')

@section('title', 'Produits')

@section('content')
    <h1 class="text-center bg-warning"> Page d'édition</h1>

    <form method="post" action="{{ route('backoffice.products.update', ['id' => $product->id]) }}">
        @csrf
        @method('PUT')
        <div class="d-flex gap-3">
            <img src="{{ $product->img_url }}" alt="{{ $product->title }}" width="350">
            <div>
                <label for="title">Titre :</label>
                <input type="text" id="title" name="title" value="{{ $product->title }}">

                @error('title')
                    <div class=text-danger> {{ $message }} </div>
                @enderror

                <label for="author">Auteur :</label>
                <input type="text" id="author" name="author" value="{{ $product->author }}"><br>

                @error('author')
                    <div class=text-danger> {{ $message }} </div>
                @enderror

                <label for="description">Description :</label>
                <textarea type="text" id="description" name="description" rows="10"
                    cols="100"> {{ $product->description }}</textarea><br>

                @error('description')
                    <div class=text-danger> {{ $message }} </div>
                @enderror

                <label for="img_url">Image :</label>
                <textarea type="text" id="img_url" name="img_url" rows="1" cols="100">{{ $product->img_url }}</textarea><br>
                @error('img_url')
                    <div class=text-danger> {{ $message }} </div>
                @enderror

                <label for="tag">Tag :</label>
                <input type="number" id="tag" name="tag_id" value={{ $product->tag_id }}>
                @error('tag_id')
                    <div class=text-danger> {{ $message }} </div>
                @enderror

                <label for="stock">Stock :</label>
                <input type="number" id="stock" name="stock" value={{ $product->stock }}>
                @error('stock')
                    <div class=text-danger> {{ $message }} </div>
                @enderror

                <label for="price">Prix :</label>
                <input type="number" id="price" name="price" value={{ $product->price }}><br>
                @error('price')
                    <div class=text-danger> {{ $message }} </div>
                @enderror


                <div class="mt-3">
                    <input class="btn btn-warning btn-lg" type="submit" value="Valider les changements">
                </div>
            </div>
        </div>
    </form>
@endsection