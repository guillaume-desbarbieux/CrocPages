@props(['article'])

<div class="row h-95">
    <img class="img-fluid"
    src="{{ $article['imgUrl'] }}"
    alt="image de couverture de {{ $article['title'] }} ({{ $article['author'] }})"
    >
</div>

<div class="row">
    <h3>Titre : {{ $article['title'] }} </h3>
</div>

<div class="row">
    <p>Auteur : {{ $article['author'] }}</p>
</div>

<div class="row">
    <p>Prix : {{ $article['price'] }} €</p>
</div>