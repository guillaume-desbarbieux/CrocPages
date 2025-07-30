@extends('layouts.backoffice')
@section('title', 'Backoffice')

@section('content')
@php
    if(!isset($product)){
        $product = new App\Models\Product;
    }
@endphp
@include('components.form-product', [
    'product' => $product, 
    'route' => route('backoffice.product.save'), 
    'title' => 'Creation d\'un produit', 
    'textButton' => 'Créer le nouveau produit'
    ])

{{-- @php
    if(!isset($product)){
        $product = new App\Models\Product;
    }
@endphp
    <div class="container">
        <div class="row">
            <h1>Ajout d'un produit </h1>
        </div>

        <form class="needs-validation" method="POST" action="{{ route('backoffice.product.save') }}"
            class="row justify-content-center">
            @csrf
            @method('PUT')
            <div class="col-6">
                <div class="row">
                @error('img_url')
                    <div class="text-danger">{{ $message }}</div> 
                @enderror
                <label for="imgUrl">Url image</label>
                <input class="form-control {{ $errors->has('img_url') ? 'is-invalid' : (old('img_url') ? 'is-valid' : '')}}" type="text" name="img_url" value="{{ old('img_url') }}"/>
                </div>
                <div class="row">
                    <img src="{{ old('img_url')}}" alt="image du livre" />
                </div>
            </div>
            <div class="col-6">
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <label for="title">Titre :</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : (old('title') ? 'is-valid' : '')}}" id="title" type="text" name="title" value="{{ old('title') }}" />

                @error('author')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <label for="author">Auteur :</label>
                <input class="form-control {{ $errors->has('author') ? 'is-invalid' : (old('author') ? 'is-valid' : '')}}" id="author" type="text" name="author" value="{{ old('author') }}" />

                @error('tag')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <label for="tag">Tag(s) :</label>
                <select class="form-control {{ $errors->has('tag_id') ? 'is-invalid' : (old('tag_id') ? 'is-valid' : '')}}" id="tag" name="tag_id">
                    @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                </select>

                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="row">
                    <label for="description">Description :</label>
                    <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : (old('description') ? 'is-valid' : '')}}" id="description" name="description"
                        style="height: 20vw; width: 40vw;">{{ old('description')}}</textarea>
                </div>
                
                @error('price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <label for="price">Prix :</label>
                <input class="form-control {{ $errors->has('price') ? 'is-invalid' : (old('price') ? 'is-valid' : '')}}" id="price" type="number" name="price" value="{{ old('price') }}" />

                @error('stock')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <label for="stock">Stock :</label>
                <input class="form-control {{ $errors->has('stock') ? 'is-invalid' : (old('stock') ? 'is-valid' : '')}}" id="stock" type="number" name="stock" value="{{ old('stock') }}" />

                <div class="row justify-content-center mt-3">
                    <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                </div>
            </div>
        </form>

    </div> --}}
@endsection