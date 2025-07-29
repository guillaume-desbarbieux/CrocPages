<form method="POST" action="{{  route('backoffice.product.delete', ['id' => $product->id]) }}" class="mt-5 shadow p-3 mb-5 border border-black rounded"  >
    @csrf
    @method('DELETE')
    <a href="{{ route('backoffice.product', ['id' => $product->id, 'isUpdate' => false]) }}" class="text-decoration-none text-dark">
        <div >
            <h1 class="fs-5">{{ $product->title }}</h1>
            <input type="hidden" name="id" value="{{ $product->id }}">

            <img class="img-fluid h-50 object-fit-contain mt-4" src="{{ $product->img_url }}"
                alt="image de couverture )">

            <h2 class="fs-5 mt-4">Prix : {{ number_format($product->price, 2, ',', ' ') . ' €' }}</h2>
            <h2 class="fs-5">Stock : {{ $product->stock }}</h2>
        </div>
    </a>
    <div class="row justify-content-center mt-3">
        <input type="submit" class="btn btn-danger" value="Supprimer le produit">
    </div>
</form>