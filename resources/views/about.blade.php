@extends('base')

@section('title')
   About Us
@endsection

{{-- ou encore on passais les deux argument dans le section @section('title', 'About Us') --}}

@section('content')
        <p>Built with &hearts; by LES TEACHERS DU NET</p>

        <p><a href="/">Revenir a la page d'acceuil</a></p>
@endsection
{{-- either @endsection ou @stop --}}
    
