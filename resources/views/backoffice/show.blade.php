@extends('layouts.backoffice')
@section('title', 'Backoffice')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Gestion du produit : {{ $product->title }}</h1>
        </div>
        @if ($action === 'updated')
            <div class="row justify-content-center">
                <div class="col-4">
                    <div class="alert alert-success" role="alert">
                        <p class="text-center">Le produit a été mis à jour avec succès.</p>
                    </div>
                </div>
            </div>
        @elseif ($action === 'created')
            <div class="row justify-content-center">
                <div class="col-4">
                    <div class="alert alert-success" role="alert">
                        <p class="text-center">Le produit a été créer avec succès.</p>
                    </div>
                </div>
            </div>
        @elseif ($action === "unUpdated")
            <div class="row justify-content-center">
                <div class="col-4">
                    <div class="alert alert-danger" role="alert">
                        <p class="text-center">Echec de la mise a jour du produit.</p>
                    </div>
                </div>
            </div>

        @endif
        <div class="row justify-content-center">
            <div class="col-3">
                <img class="img-fluid" src="{{ $product->img_url }}" alt="Image de couverture de {{ $product->title }}">
            </div>
            <div class="col-9">
                <h3>Auteur : {{ $product->author }}</h3>
                <p>Tag(s) : {{ $product->Tag->name }}</p>
                <p>Description : {{ $product->description }}</p>
                <h3>Prix : {{ number_format($product->price, 2, ',', ' ') }} €</h3>
                <h4>Stock : {{ $product->stock }}</h4>

                <div class="row justify-content-evenly">
                    <div class="col-4">
                        <a href="{{ route('backoffice.product.edit', ['id' => $product->id]) }}" class="btn btn-primary">Modifier</a>
                    </div>
                    <div class="col-4">
                        <form method="POST" action="{{  route('backoffice.product.delete', ['id' => $product->id]) }}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class=" btn btn-danger" value="Supprimer">
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection