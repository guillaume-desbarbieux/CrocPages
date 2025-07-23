@extends('layouts.app')

@section('content')
    <div class="row mx-0 my-2 text-center bg-warning-subtle ">
        <h2>Meilleures Ventes</h2>
    </div>

    <div class="row">
        @foreach ($articles as $article)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center">
                <x-home.card :article="$article" />
            </div>
        @endforeach
    </div>
<<<<<<< HEAD
=======
@endsection

@section('footer')
<<<<<<< HEAD
    <h4 class="text-center bg-success">footer</h4>
=======
    <h4>footer</h4>
>>>>>>> 63d8bb1 (view in view/home)
>>>>>>> bf95d87 (view in view/home)
@endsection