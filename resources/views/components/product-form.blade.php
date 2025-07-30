@props(['product'])

@php
    if ($product->id) {
        $param = [
            'route' => route('backoffice.products.update', ['id' => $product->id]),
            'title' => "Modification de l'article",
            'button' => "Valider les modifications"
        ];
    } else {
        $param = [
            'route' => route('backoffice.products.save'),
            'title' => "Créer un nouvel article",
            'button' => "Ajouter l'article au catalogue"
        ];
    }
@endphp

<div class="container">
    <h1 class="row text-center bg-warning"> {{$param['title']}}</h1>
    <form class="row" method="post" action="{{ $param['route'] }}">
        @csrf
        @method('PUT')
        <div class="col-3">
            <img class="img-fluid" src="{{ old('img_url') ?? $product->img_url }}" alt="{{ old('title') ?? $product->title }}"
                width="350">
        </div>
        <div class="col-9">
            <label class="form-label" for="title">Titre :</label>
            <input class="form-control" type="text" id="title" name="title"
                value="{{ old('title') ?? $product->title }}">
            @error('title')
                <div class=text-danger> {{ $message }} </div>
            @enderror

            <label class="form-label" for="author">Auteur :</label>
            <input class="form-control" type="text" id="author" name="author"
                value="{{ old('author') ?? $product->author }}">
            @error('author')
                <div class=text-danger> {{ $message }} </div>
            @enderror

            <label class="form-label" for="description">Description :</label>
            <textarea class="form-control" type="text" id="description" name="description" rows="10"
                cols="100">{{ old('description') ?? $product->description }}</textarea>
            @error('description')
                <div class=text-danger> {{ $message }} </div>
            @enderror

            <label class="form-label" for="img_url">Image :</label>
            <textarea class="form-control" type="text" id="img_url" name="img_url" rows="1"
                cols="100">{{ old('img_url') ?? $product->img_url }}</textarea>
            @error('img_url')
                <div class=text-danger> {{ $message }} </div>
            @enderror

            <label class="form-label" for="tag">Tag :</label>
            <input class="form-control" type="number" id="tag" name="tag_id"
                value="{{ old('tag_id') ?? $product->tag_id }}">
            @error('tag_id')
                <div class=text-danger> {{ $message }} </div>
            @enderror

            <label class="form-label" for="stock">Stock :</label>
            <input class="form-control" type="number" id="stock" name="stock"
                value="{{ old('stock') ?? $product->stock }}">
            @error('stock')
                <div class=text-danger> {{ $message }} </div>
            @enderror

            <label class="form-label" for="price">Prix :</label>
            <input class="form-control" type="number" id="price" name="price"
                value="{{ old('price') ?? $product->price}}">
            @error('price')
                <div class=text-danger> {{ $message }} </div>
            @enderror

            <div class="mt-3">
                <input class="btn btn-warning btn-lg" type="submit" value="{{$param['button']}}">
            </div>
        </div>
    </form>
</div>