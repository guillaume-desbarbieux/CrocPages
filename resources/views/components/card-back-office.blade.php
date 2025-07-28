<a href="{{ route('backoffice.product', ['id' => $product->id]) }}" >
<div class="shadow p-3 mb-5 border border-black rounded" style="height: 35vh">
    <h1 class="fs-5">{{ $product->title }}</h1>
    <input type="hidden" name="id" value="{{ $product->id }}">

    <img class="img-fluid h-50 object-fit-contain mt-4"  src="{{ $product->img_url }}" alt="image de couverture )">

    <h2 class="fs-5 mt-4">Prix : {{ number_format($product->price, 2, ',', ' ') . ' €' }}</h2>

</div>
</a>