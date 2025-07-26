<div class="container shadow border rounded m-4 p-2">
    <div class="row">
        <div class="col-6">
            <p>Produits</p>
        </div>
        <div class="col-6">
            <p><?= number_format($totalPrice, 2, ',', ' ') . ' €'; ?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <p>Livraison</p>
        </div>
        <div class="col-6">
            <p><?= number_format($shippingPrice, 2, ',', ' ') . ' €'; ?></p>
        </div>
    <div class="row">
        <div class="col-6">
            <input type="button" class="btn btn-success" value="Valider la commande"/>
        </div>
    </div>
</div>