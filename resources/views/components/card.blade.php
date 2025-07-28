@props(['product'])

{{--@dump($product)--}}

<a class="row h-95" href={{  route('catalog.show', ['id' => $product->id]) }}>
    <img class="img-fluid object-fit-contain" style="height:350px" src="{{ $product->img_url }}"
        alt="image de couverture de {{ $product->title }} ({{ $product->author }})">
</a>


<div class="row">
    <h5 class="card-title">{{ $product->title }}</h5>
</div>

<div class="row">
    <p class="card-text">Auteur : {{ $product->author }}</p>
</div>

<div class="row">
    <p class="card-text">Tag(s) : {{ $product->tag->name }}</p>
</div>

<div class="row">
    <p class=" col card-text">Prix : {{ $product->price }} €</p>

    <a class="position-absolute bottom-0 end-0 object-fit-content" href={{route('cart')}} style="width: 4em">

        <form method="POST" action="{{ route('cart.updateQuantity', ['productId' => $product->id]) }}">
            @csrf
            @method('PUT')
            <input type="hidden" name="addOne" value="1">
            <img type="submit" class="img-fluid" src="{{ asset('images/logobasket.svg') }}" alt="logo panier">
        </form>

    </a>
</div>



</a>
</div>




{{-- <form method="POST" action="{{ route('cart.updateQuantity', ['productId' => $id]) }}"
    class="col-12 col-md-6 d-flex flex-column align-items-center">
    @csrf
    @method('PUT')
    <input name="quantity" class="form-control w-50 m-1" type="number" min="1" max="99" value="{{ $quantity }}" />
    <input type="submit" class="btn btn-primary " value="Modifier" />
</form> --}}