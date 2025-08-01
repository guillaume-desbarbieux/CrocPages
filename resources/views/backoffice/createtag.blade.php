@extends('layouts.backoffice')

@section('title', 'Créer un nouveau tag')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Ajouter un nouveau tag</h1>

    <form method="POST" action="{{ route('tags.store') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nom du tag</label>
            <input type="text" name="name" id="name" class="form-control" required>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Créer le tag</button>
        <a href="{{ route('backoffice.product.create') }}" class="btn btn-secondary">Retour</a>
    </form>
</div>
@endsection
