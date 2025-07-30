@extends('layouts.backoffice')
@section('title', 'backoffice')

@section('content')

<h1>Ajouter un produit</h1>

<form action="{{ route('admin.catalog.addmenu') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="img_url" class="form-label">Url de l'image</label>
        <input type="text" name="img_url" id="img_url" 
               value="{{ old('img_url') }}" 
               class="form-control @error('img_url') is-invalid @else @if(old('img_url')) is-valid @endif @enderror">
        @error('img_url')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="title" class="form-label">Titre</label>
        <input type="text" name="title" id="title" 
               value="{{ old('title') }}" 
               class="form-control @error('title') is-invalid @else @if(old('title')) is-valid @endif @enderror">
        @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="author" class="form-label">Auteur</label>
        <input type="text" name="author" id="author" 
               value="{{ old('author') }}" 
               class="form-control @error('author') is-invalid @else @if(old('author')) is-valid @endif @enderror">
        @error('author')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Prix</label>
        <input type="number" name="price" id="price" 
               value="{{ old('price') }}" 
               class="form-control @error('price') is-invalid @else @if(old('price')) is-valid @endif @enderror">
        @error('price')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" id="description" 
                  class="form-control @error('description') is-invalid @else @if(old('description')) is-valid @endif @enderror">{{ old('description') }}</textarea>
        @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="stock" class="form-label">Stock</label>
        <input type="number" name="stock" id="stock" 
               value="{{ old('stock') }}" 
               class="form-control @error('stock') is-invalid @else @if(old('stock')) is-valid @endif @enderror">
        @error('stock')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>

@endsection

@section('script')
@endsection