@props(['article'])
<a class="row h-95" href={{  route('catalog.show', ['id' => $article['id']]) }}>
    <img class="img-fluid object-fit-contain" style="height:350px" src="{{ $article['imgUrl'] }}"
        alt="image de couverture de {{ $article['title'] }} ({{ $article['author'] }})">
</a>


<div class="row">
    <h5 class="card-title">{{ $article['title'] }}</h5>
</div>

<div class="row">
    <p class="card-text">Auteur : {{ $article['author'] }}</p>
</div>

<div class="row">
    <p class=" col card-text">Prix : {{ $article['price'] }} €</p>
    <a class="position-absolute bottom-0 end-0 object-fit-content" href={{route('cart')}} style="width: 4em">
        <img class="img-fluid" src="{{ asset('images/logobasket.svg') }}" alt="logo panier">
    </a>
</div>