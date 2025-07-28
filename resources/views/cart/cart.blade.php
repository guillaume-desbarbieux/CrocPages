@extends('layouts.app')

@section('content')
    <div class="container m-0 p-0">

        <h1 class="text-center">Récapitulatif de mon panier</h1>
        
        <div class="row justify-content-center">
            <div class="col-11 col-md-10 m-0 p-0">
                @yield('products')
            </div>
            <div >
                @yield('total-cart')
            </div>
        </div>
    </div>
@endsection