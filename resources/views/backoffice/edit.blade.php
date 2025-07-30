@extends('layouts.backoffice')
@section('title', 'backoffice')

@section('content')

<h1>Éditer le produit: {{ $product->title }}</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@elseif (session('success'))
    <div class="alert bg-primary">Modification validé</div>
@endif

<form action="{{ route('admin.catalog.update', ['id' => $product->id]) }}" method="POST">
    @csrf
    @method('PUT') <!-- Indique à Laravel que c'est une mise à jour -->

    <div class="mb-3">
        <label for="title" class="form-label">Titre</label>
        <input type="text" name="title" id="title" value="{{ old('title', $product->title) }}" class="form-control">
    </div>

    <div class="mb-3">
        <label for="author" class="form-label">Auteur</label>
        <input type="text" name="author" id="author" value="{{ old('author', $product->author) }}" class="form-control">
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Prix</label>
        <input type="number" step="0.01" name="price" id="price" value="{{ old('price', $product->price) }}" class="form-control">
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" id="description" class="form-control">{{ old('description', $product->description) }}</textarea>
    </div>

    <div class="mb-3">
        <label for="stock" class="form-label">Stock</label>
        <input type="number" name="stock" id="stock" value="{{ old('stock', $product->stock) }}" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Mettre à jour</button>
</form>

<form action="{{ route('admin.catalog.delete', ['id' => $product->id]) }}" method="POST" class="mt-3">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Supprimer</button>
</form>

@endsection

@section('script')
@endsection
