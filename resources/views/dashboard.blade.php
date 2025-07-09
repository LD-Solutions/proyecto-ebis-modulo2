@extends('layout.app')
@section('hero_title', 'Consulta tu portafolio')
@section('title', 'Tu portafolio - Finsmart')
@section('hero_content')
    <a class="hero__cta" href="#main">
        Consultar
        <br>
        &darr;
    </a>
@endsection
@section('content')
<section class="simple-section" id="main">
    <h2>Mi portafolio</h2>
    <p>En esta sección podrás consultar tu portafolio de acciones con toda la información necesaria para poder evaluar y tomar decisiones. Puedes aprender todo lo que quieras de finanzas en nuestra sección de <a href="formacion.html">Fórmate con nosotros</a>, así como el <a href="bolsa.html">Estado de la bolsa</a>.</p>
    <article id="dashboard" class="dashboard">
        <table>
            <thead>
               <tr>
                    <th>Stock Symbol</th>
                    <th>Compañía</th>
                    <th>Valores</th>
                    <th>Valor total</th>
                </tr> 
            </thead>
            <tbody id="valores"></tbody>                        
        </table>
    </article>
</section>
<section class="simple-section dual-section">
    <div class="dual-section__container">
        <div class="dual-section__media">
            <img src="/images/oficina2.webp" alt="Equipo de Finsmart" class="dual-section__image" />
        </div>
        
        <div class="dual-section__content">
            <h2 class="dual-section__title">Conoce a nuestro equipo</h2>
            <h3 class="dual-section__subtitle">Expertos en finanzas a tu servicio</h3>
            <p class="dual-section__text">
                En Finsmart contamos con un equipo de profesionales con amplia experiencia en el sector financiero. Cada miembro aporta conocimientos únicos y especializados para ayudarte a alcanzar tus metas de inversión y ahorro.
            </p>
            <p class="dual-section__text">
                Nuestros asesores financieros, analistas de mercado y expertos en tecnología trabajan juntos para ofrecerte las mejores herramientas y consejos personalizados para tu situación financiera particular.
            </p>
            <a href="conocenos" class="dual-section__cta">Conoce al equipo</a>
        </div>
    </div>
</section>

@endsection
@section('scripts')
    @vite(['resources/ts/pages/bolsa.ts'])
@endsection