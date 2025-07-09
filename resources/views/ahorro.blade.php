@extends('layout.app')
@section('hero_title', 'Calcula tu ahorro con nuestra herramienta')
@section('hero_logo', asset('images/serious-man-thinking.png'))
@section('title', 'Calculadora de ahorro - Finsmart')
@section('content')
    <!-- Ejemplo: Sección sobre el equipo -->
    <section class="simple-section calculadora-section">
        <h2>Calculadora de ahorro 50/30/20</h2>
        <p>Descubre cómo dividir tus ingresos mensuales en necesidades, deseos y ahorros con la calculadora de ahorro 50/30/20.</p>
        <h2>¿Cómo usar la calculadora 50/30/20?</h2>
        <ul>
            <li>Ingresa las cantidades estimadas en todos los campos de "Ingresos" que cuentan como hogar o unidad familiar.</li>
            <li>Calcula tus ingresos después de impuestos.</li>
            <li>Redondea al euro o céntimo más cercano.</li>
        </ul>
        <br>
        <hr>
        <br>
            <div class="titulo-calculadora columna">
                <label>Total ingresos netos mensuales
                    <input type="number" id="salario"  placeholder="0">
                </label>
            </div>
        <div id="calculo">
            <h2>Tu resultado</h2>
            <div class="checkbox-wrapper row">
                <p>Mensual</p>
                <input class="tgl tgl-ios" id="checkbox-calculadora" type="checkbox"/>
                <label class="tgl-btn" for="checkbox-calculadora"></label>
                <p>Anual</p>
                
            </div>
            <div id="calculadora-resultado" class="row">
                <div id="calculadora-necesidades" class="calculadora-resultados columna">
                    <p>Necesidades</p>
                    <p id="calculadora-necesidades-texto">0 €</p>
                </div>
                <div id="calculadora-caprichos" class="calculadora-resultados columna">
                    <p>Caprichos</p>
                    <p id="calculadora-caprichos-texto">0 €</p>
                </div>
                <div id="calculadora-ahorros" class="calculadora-resultados columna">
                    <p>Ahorros</p>
                    <p id="calculadora-ahorros-texto">0 €</p>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    @vite(['resources/ts/pages/ahorro.ts'])
@endsection