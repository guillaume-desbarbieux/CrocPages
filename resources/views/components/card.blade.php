@props(['product'])
@Use(App\Models\Wish)


<a class="row h-95" href="{{ route('catalog.show', ['id' => $product->id]) }}">
    <img class="img-fluid object-fit-contain" style="height:350px" src="{{ $product->img_url }}"
        alt="image de couverture de {{ $product->title }} ({{ $product->author }})">
</a>

<div class="row">
    <h5 class="card-title fw-bolder">{{ $product->title }}</h5>
</div>

<div class="row">
    <p class="card-text">{{ $product->author }}</p>
</div>

<div class="row">
    @if($product->tag_id != 1)
        <p class="card-text fst-italic fw-light">{{ $product->Tag->name }}</p>
    @else
        <p></p>
    @endif
</div>

<div class="row">
    <p class="col card-text  fw-bold">{{ number_format($product->price, 2, ',', ' ') }} €</p>
</div>


{{--  --}}

@php
    $wish = Wish::where('product_id', '=', $product->id)->where('user_id', '=', 1)->first();
@endphp

@if(isset($wish))
    <a class="position-absolute top-0 end-0 object-fit-content btn btn-light p-1"
        href="{{ route('product.wish.remove', ['product_id' => $product->id]) }}" style="width: 2.5em;">
        <img class="img-fluid" src="{{ asset('images/Wish.png') }}" alt="Favori" title="retirer de mes favoris">
    </a>
@else
    <a class="position-absolute top-0 end-0 object-fit-content btn btn-light p-1"
        href="{{ route('product.wish.add', ['product_id' => $product->id]) }}" style="width: 2.5em;">
        <img class="img-fluid" src="{{ asset('images/noWish.png') }}" alt="Favori" title="ajouter à mes favoris">
    </a>
@endif


<a class="position-absolute bottom-0 end-0 object-fit-content btn btn-light p-1"
    href="{{ route('cart.add', ['product_id' => $product->id, 'quantity' => "1"]) }}" style="width: 2.5em;">
    <img class="img-fluid" src="{{ asset('images/logobasket.svg') }}" alt="panier" title="ajouter au panier">
</a>