@props(['product'])

{{--@dump($product)--}}

<a class="row h-95" href={{  route('catalog.show', ['id' => $product->id]) }}>
    <img class="img-fluid object-fit-contain" style="height:350px" src="{{ $product->imgURL }}"
        alt="image de couverture de {{ $product->title }} ({{ $product->author }})">
</a>


<div class="row">
    <h5 class="card-title">{{ $product->title }}</h5>
</div>

<div class="row">
    <p class="card-text">Auteur : {{ $product->author }}</p>
</div>

<div class="row">
    <p class="card-text">Catégorie : {{ $product->category->name }}</p>
</div>

<div class="row">
    <p class=" col card-text">Prix : {{ $product->price }} €</p>
    <a class="position-absolute bottom-0 end-0 object-fit-content" href={{route('cart')}} style="width: 4em">
        <img class="img-fluid" src="{{ asset('images/logobasket.svg') }}" alt="logo panier">
    </a>
</div>