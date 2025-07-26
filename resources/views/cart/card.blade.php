<div class="container shadow border rounded m-4 p-2">
    <div class="row align-items-center">
        <div class="col-3">
           <img class="w-50 h-50" src="{{ $urlImg }}" alt="image produit"/>
        </div>
        <div class="col-4">
            <div class="row">
                <h3>{{ $title }}</h3>
                <p>{{ $author }}</p>
                <h2><?= number_format($price, 2, ',', ' ') . ' €'; ?></h2>
            </div>
        </div>
        <div class="col-3">
            <div class="row">
                <div class="col-6">
                    <input class="form-control w-50" type="number" min="1" max="99" value="{{ $quantity }}"/>
                </div>
                <div class="col-6">
                    <h2><?= number_format($price * $quantity, 2, ',', ' ') . ' €'; ?></h2>
                </div>
            </div>
        </div>
        <div class="col-2">
            <input class="btn btn-danger" type="button"  value="Supprimer"/>
        </div>
    </div>
</div>