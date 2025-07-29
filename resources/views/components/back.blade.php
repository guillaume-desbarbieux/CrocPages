@props(['product'])


<a href="{{ route('products.show', ['id' => $product->id]) }}">
    <img class="img-fluid object-fit-contain" style="height:150px" src="{{ $product->img_url }}"
        alt="image de couverture de {{ $product->title }} ({{ $product->author }})">
</a>

<div>
    <h5 class="card-title">{{ $product->title }}</h5>
</div>

<div>
    <p class="card-text">Auteur : {{ $product->author }}</p>
</div>

<div>
    <p class="card-text">Tag(s) : {{ $product->Tag->name }}</p>
</div>