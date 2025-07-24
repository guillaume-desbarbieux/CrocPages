@extends('layouts.app')

@section('content')
    <div class="container">

        <h1 class="text-center">Récapitulatif de mon panier</h1>
        
        <div class="row align-items-end">
            <div class="col-10">
                @yield('products')
            </div>
            <div class="col-2">
                @yield('total-cart')
            </div>
        </div>
    </div>
@endsection