@extends('layouts.app')

@section('content')
<div class="container mt-4 text-center">
    <h1>Où nous trouver</h1>
    <p>Voici l'emplacement de notre boutique :</p>

    <div class="ratio ratio-16x9 mb-5">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2769.346453090046!2d4.9777377!3d44.9923511!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f5593a6598a42d%3A0x7744ad2a7b221c44!2sCampus%20Num%C3%A9rique%20in%20the%20Alps%20-%20Valence!5e0!3m2!1sfr!2sfr!4v1695221056117!5m2!1sfr!2sfr" 
            width="600" 
            height="450" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</div>
@endsection