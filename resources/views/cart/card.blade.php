<div class="container">
    <div class="row align-items-center">
        <div class="col-3 mt-4">
           <img class="w-50 h-50" src="{{ $urlImg }}" alt="image produit"/>
        </div>
        <div class="col-5">
            <div class="row">
                <h3>{{ $title }}</h3>
                <h5>{{ $author }}</h5>
                <h2>{{ $price }}€</h2>
            </div>
        </div>
        <div class="col-3">
            <div class="row">
                <div class="col-6">
                    <input class="form-control w-50" type="number" min="1" max="99" value="{{ $quantity }}"/>
                </div>
                <div class="col-6">
                    <h2>{{ $price * $quantity}}€</h2>
                </div>
            </div>
        </div>
        <div class="col-1">
            <input class="btn btn-danger" type="button" value="Supprimer"/>
        </div>
    </div>
</div>