<div class="container shadow border rounded m-0 p-2">
    <div class="row align-items-center">
        <div class="col-12 col-md-3 ">
           <img class="w-50 h-50  mx-auto d-block " src="{{ $urlImg }}" alt="image produit"/>
        </div>
        <div class="col-12 col-md-4">
            <div class="row text-center text-md-start">
                <h3>{{ $title }}</h3>
                <p>{{ $author }}</p>
                <h2><?= number_format($price, 2, ',', ' ') . ' €'; ?></h2>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="row text-center">
                <div class="col-12 col-md-6 d-flex flex-column align-items-center">
                    <input name="quantity" class="form-control w-50 m-1" type="number" min="1" max="99" value="{{ $quantity }}"/>
                    <input type="submit" class="btn btn-primary " value="Modifier"/>
                </div>
                <div class="col-12 col-md-6 mt-4">
                    <h2><?= number_format($price * $quantity, 2, ',', ' ') . ' €'; ?></h2>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-2 d-flex justify-content-center">
            <input class="btn btn-danger" type="button"  value="Supprimer"/>
        </div>
    </div>
</div>