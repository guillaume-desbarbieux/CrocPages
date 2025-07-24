@props(['article'])
    <a class="row h-95" href= {{  route('catalog.show', ['id'=>$article['id']]) }}>
        <img class="img-fluid" src="{{ $article['imgUrl'] }}"
            alt="image de couverture de {{ $article['title'] }} ({{ $article['author'] }})">
    </a>

    <div class="row">
        <h3>Titre : {{ $article['title'] }} </h3>
    </div>

    <div class="row">
        <p>Auteur : {{ $article['author'] }}</p>
    </div>

    <div class="row">
        <p>Prix : {{ $article['price'] }} €</p>
    </div>