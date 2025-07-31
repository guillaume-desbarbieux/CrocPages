@props(['product'])



<a class="row h-95" href="{{ route('catalog.show', ['id' => $product->id]) }}">
    <img class="img-fluid object-fit-contain" style="height:350px" src="{{ $product->img_url }}"
        alt="image de couverture de {{ $product->title }} ({{ $product->author }})">
</a>

<div class="row">
    <h5 class="card-title">{{ $product->title }}</h5>
</div>

<div class="row">
    <p class="card-text">Auteur : {{ $product->author }}</p>
</div>
@if($product->tags->isNotEmpty())
<div class="row">
    <p class="card-text">Tag(s) : {{ $product->tags->pluck('name')->join(', ') }}</p>
</div>
@endif

<div class="row">
    <p class="col card-text">Prix : {{ number_format($product->price, 2, ',', ' ') }} €</p>
    <a class="position-absolute bottom-0 end-0 object-fit-content"
        href="{{ route('cart.add', ['product_id' => $product->id, 'quantity' => "1"]) }}" style="width: 4em;">
        <img class="img-fluid" src="{{ asset('images/logobasket.svg') }}" alt="logo panier">
    </a>
</div>