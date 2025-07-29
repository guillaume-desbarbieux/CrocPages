@extends('layouts.backoffice')
@section('title', 'Backoffice')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Ajout d'un produit </h1>
        </div>

        <form method="POST" action="{{ route('backoffice.product.save') }}"
            class="row justify-content-center">
            @csrf
            @method('PUT')
            <div class="col-6">
                @error('img_url')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <label for="imgUrl">Url image</label>
                <input type="text" name="img_url" value=""/>
            </div>
            <div class="col-6">
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <label for="title">Titre :</label>
                <input id="title" type="text" name="title" value="" />

                @error('author')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <label for="author">Auteur :</label>
                <input id="author" type="text" name="author" value="" />

                @error('tag')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <label for="tag">Tag(s) :</label>
                <select id="tag" name="tag_id">
                    @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                </select>

                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="row">
                    <label for="description">Description :</label>
                    <textarea id="description" name="description"
                        style="height: 20vw; width: 40vw;"></textarea>
                </div>
                
                @error('price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <label for="price">Prix :</label>
                <input id="price" type="number" name="price" value="" />

                @error('stock')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <label for="stock">Stock :</label>
                <input id="stock" type="number" name="stock" value="" />

                <div class="row justify-content-center mt-3">
                    <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                </div>
            </div>
        </form>

    </div>
@endsection