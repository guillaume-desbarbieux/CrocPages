@extends('layouts.app')

@section('content')
    <div class="row mx-0 my-2 text-center bg-warning-subtle ">
        <h2>Meilleures Ventes</h2>
    </div>

    <div class="row justify-content-center mt-5">
        @foreach ($articles as $article)
            <div class="card hover-card col-12 col-sm-5 col-md-5 col-lg-2 text-center mx-2 mb-3" >
                <x-home.card :article="$article" />
            </div>
        @endforeach
    </div>
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 4a5a0ea (view in view/home)
@endsection

@section('footer')
<<<<<<< HEAD
    <h4 class="text-center bg-success">footer</h4>
=======
    <h4>footer</h4>
>>>>>>> 63d8bb1 (view in view/home)
<<<<<<< HEAD
>>>>>>> bf95d87 (view in view/home)
=======
>>>>>>> 4a5a0ea (view in view/home)
@endsection