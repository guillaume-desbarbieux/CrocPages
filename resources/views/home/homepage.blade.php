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
@endsection