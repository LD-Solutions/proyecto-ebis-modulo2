@extends('layout.app')
@section('hero_logo', asset('icons/logo.jpg'))
@section('hero_content')
    <a class="hero__cta" href="#main">
        <span>DESCUBRE NUESTRAS <br> HERRAMIENTAS</span>
        <br>
        <span>&darr;</span>
    </a>
@endsection
@section('title', 'Finsmart')
@section('content')
    <!-- Ejemplo: Sección sobre el equipo -->
    <section class="dual-section">
        <div class="dual-section__container">
            <div class="dual-section__media">
                <img src="{{ asset('images/oficina2.webp') }}" alt="Equipo de Finsmart" class="dual-section__image" />
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
                <a href="views/conocenos.html" class="dual-section__cta">Conoce al equipo</a>
            </div>
        </div>
    </section>

    <!-- Ejemplo: Sección sobre servicios (imagen a la derecha) -->
    <section class="dual-section dual-section--alt">
        <div class="dual-section__container dual-section__container--reverse">
            <div class="dual-section__media">
                <img src="{{ asset('images/oficina1.webp') }}" alt="Servicios de inversión" class="dual-section__image" />
            </div>
            
            <div class="dual-section__content">
                <h2 class="dual-section__title">Nuestros servicios</h2>
                <h3 class="dual-section__subtitle">Soluciones financieras personalizadas</h3>
                <p class="dual-section__text">
                    Ofrecemos una amplia gama de servicios financieros diseñados para satisfacer tus necesidades específicas. Desde asesoramiento en inversiones hasta planificación de jubilación, nuestro objetivo es ayudarte a alcanzar tus metas financieras.
                </p>
                <p class="dual-section__text">
                    Nuestros expertos analizan tu situación actual y te ofrecen estrategias claras y efectivas para maximizar tus ahorros y optimizar tu cartera de inversiones.
                </p>
                <a href="views/bolsa.html" class="dual-section__cta">Ver servicios</a>
            </div>
        </div>
    </section>
@endsection