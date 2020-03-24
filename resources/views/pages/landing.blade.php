@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <div class="py-12 px-32">
        <h1 class="font-weight-800 text-2xl text-gray-600">Accueil de Français avec Mason</h1>
        <p class="mr-8 mb-8">Bonjour! Merci d'être venu. Ici, vous pourrez parcourir les leçons, vous connecter au Centre d'Étudiants, 
        et apprendre des nouvelles choses.</p>

        <a href="/login" class="bg-white mt-8 text-sm hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-600 rounded shadow">(Login) Connectez-vous!</a>
    </div>
@endsection