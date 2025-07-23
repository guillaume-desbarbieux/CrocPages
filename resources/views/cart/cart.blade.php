<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Panier</title>
</head>
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
