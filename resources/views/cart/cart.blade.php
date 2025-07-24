<!DOCTYPE html>
<html lang="fr">
<x-head />
<body>
    <div class="container">

        <h1 class="text-center">Récapitulatif de mon panier</h1>

        {{-- @include('cart.card',[
                    'title' => 'Livre de proche',
                    'description' => 'Le livre explique la vie d\' un developpeur Figma',
                    'price' => 12.99,
                    'quantity' => 2,
                    'urlImg' => 'https://www.minus-editions.fr/2270-thickbox_default/si-on-parlait-de-la-mort-livre-a-remplir.jpg'
        ])  --}}

        @yield('products')
    </div>
</body>
</html>
