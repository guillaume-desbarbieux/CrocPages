@props(['product'])
<div class="row">
    <img class="img-fluid object-fit-contain" style="height:100px" src="{{ $product->img_url }}"
        alt="image de couverture de {{ $product->title }} ({{ $product->author }})">
</div>
<div class="row">
    <h5 class="card-title">{{ $product->title }}</h5>
</div>

<div class="row">
    <p class="card-text">Auteur : {{ $product->author }}</p>
</div>

<div class="row">
    <p class="card-text">Tag(s) : {{ $product->Tag->name }}</p>
</div>

<div class="row">
    <p class="col card-text">Prix : {{ number_format($product->price, 2, ',', ' ') }} €</p>
</div>