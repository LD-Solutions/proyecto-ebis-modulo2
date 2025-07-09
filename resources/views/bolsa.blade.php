@extends('layout.app')
@section('hero_title', 'Estado de la bolsa')
@section('title', 'Estado de la bolsa - Finsmart')
@section('content')
    <div class="cartas-bolsa grid-parent">
        <div id="AAPL" class="carta-bolsa grid-child">
            <div class="titulo-carta-bolsa">
                <img class="logo-carta-bolsa" src="https://logo.clearbit.com/apple.com" alt="Apple Logo">
                <h2>Apple</h2>
                <div class="resultado-dia-bolsa"></div>
            </div>
            <div class="contenido-carta-bolsa">   
                Cargando...       
            </div>
        </div>

        <div id="MSFT" class="carta-bolsa grid-child">
            <div class="titulo-carta-bolsa">
                <img class="logo-carta-bolsa" src="https://logo.clearbit.com/microsoft.com" alt="Microsoft Logo">
                <h2>Microsoft</h2>
                <div class="resultado-dia-bolsa"></div>
            </div>
            <div class="contenido-carta-bolsa">   
                Cargando...  
            </div>
        </div>

        <div id="NFLX" class="carta-bolsa grid-child">
            <div class="titulo-carta-bolsa">
                <img class="logo-carta-bolsa" src="https://logo.clearbit.com/netflix.com" alt="Netflix Logo">
                <h2>Netflix</h2>
                <div class="resultado-dia-bolsa"></div>
            </div>
            <div class="contenido-carta-bolsa">   
                Cargando...
            </div>
        </div>

        <div id="AMZN" class="carta-bolsa grid-child">
            <div class="titulo-carta-bolsa">
                <img class="logo-carta-bolsa" src="https://logo.clearbit.com/amazon.com" alt="Amazon Logo">
                <h2>Amazon</h2>
                <div class="resultado-dia-bolsa"></div>
            </div>
            <div class="contenido-carta-bolsa">   
                Cargando...
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    @vite(['resources/ts/pages/bolsa.ts'])
@endsection