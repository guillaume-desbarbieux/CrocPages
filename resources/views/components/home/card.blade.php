
@props(['article'])
    <a class="row h-95" href= {{  route('catalog.show', ['id'=>$article['id']]) }}>
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
                    <p class="card-text">Prix : {{ $article['price'] }} €</p>
    </div>