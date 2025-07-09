@extends('layout.app')
@section('hero_title', 'Conoce a nuestro equipo')
@section('title', 'Conócenos - Finsmart')
@section('content')
<h2>Pendiente de api</h2>
<div id="equipo-conocenos" class="columna"></div>
@endsection
@section('scripts')
    @vite(['resources/ts/pages/conocenos.ts'])
@endsection