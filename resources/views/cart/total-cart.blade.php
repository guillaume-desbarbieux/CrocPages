<div class="container shadow border rounded m-4 p-2 " style="position: fixed; bottom: 10vh; right: 0; background-color: white; width: 25vh">
    <div class="row">
        <div class="col-6">
            <p>Prix total :</p>
        </div>
        <div class="col-6">
            <p><?= number_format($totalPrice, 2, ',', ' ') . ' €'; ?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <input type="button" class="btn btn-success" value="Valider la commande"/>
        </div>
    </div>
</div>