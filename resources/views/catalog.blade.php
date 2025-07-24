@extends('layouts.app')
@section('title', 'Catalogue')
@section('content')


     <style>
        .bandeau {
            background-color: #F3E7A7;
            border: 4px solid #3E9838;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            margin-top: 30px;
        }

        .bandeau h1 {
            font-weight: bold;
            margin: 0;
        }
        
    </style>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="bandeau">
                    <h1>TOUTES LES PUBLICATIONS</h1>
                </div>
            </div>
        </div>
    </div>

    @endsection
