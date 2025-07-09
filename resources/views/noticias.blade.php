@extends('layout.app')
@section('hero_title', 'Las últimas noticias')
@section('hero_logo', asset('images/serious-man-thinking.png'))
@section('title', 'Noticias - Finsmart')
@section('content')
<section id="news"></section>
@endsection
@section('scripts')
    @vite(['resources/ts/pages/noticias.ts'])
@endsection