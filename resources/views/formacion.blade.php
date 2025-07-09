@extends('layout.app')
@section('hero_title', 'Aprende todo sobre finanzas')
@section('hero_logo', asset('images/serious-man-thinking.png'))
@section('title', 'Formación de finanzas - Finsmart')
@section('content')
<section class="resources">
    <div class="resources__header">
        <h2 class="resources__title">Recursos de Formación Financiera</h2>
        <p class="resources__subtitle">Seleccionamos los mejores recursos para que puedas ampliar tus conocimientos sobre finanzas, inversiones y gestión patrimonial.</p>
    </div>
    
    <div class="resources__grid">
        <h3 class="resources__category">Libros recomendados</h3>
        
        <!-- Libro 1 -->
        <article class="resources__card">
            <div class="resources__card-image-container">
                <img src="https://images.unsplash.com/photo-1589829085413-56de8ae18c73?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Padre Rico, Padre Pobre" class="resources__card-image">
            </div>
            <div class="resources__card-content">
                <span class="resources__card-tag resources__card-tag--book">Finanzas personales</span>
                <h4 class="resources__card-title">Padre Rico, Padre Pobre</h4>
                <p class="resources__card-author">Robert Kiyosaki</p>
                <p class="resources__card-description">Uno de los libros más populares sobre educación financiera que enseña la importancia de la inteligencia financiera y cómo construir riqueza a través de inversiones y activos.</p>
                <a href="#" class="resources__card-link">Ver detalles</a>
            </div>
        </article>
        
        <!-- Libro 2 -->
        <article class="resources__card">
            <div class="resources__card-image-container">
                <img src="https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="El Inversor Inteligente" class="resources__card-image">
            </div>
            <div class="resources__card-content">
                <span class="resources__card-tag resources__card-tag--book">Inversiones</span>
                <h4 class="resources__card-title">El Inversor Inteligente</h4>
                <p class="resources__card-author">Benjamin Graham</p>
                <p class="resources__card-description">Considerado la biblia de la inversión en valor, este libro establece los principios fundamentales para invertir en bolsa con un enfoque conservador y exitoso a largo plazo.</p>
                <a href="#" class="resources__card-link">Ver detalles</a>
            </div>
        </article>
        
        <!-- Libro 3 -->
        <article class="resources__card">
            <div class="resources__card-image-container">
                <img src="https://images.unsplash.com/photo-1607082349566-187342175e2f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Piense y Hágase Rico" class="resources__card-image">
            </div>
            <div class="resources__card-content">
                <span class="resources__card-tag resources__card-tag--book">Mentalidad financiera</span>
                <h4 class="resources__card-title">Piense y Hágase Rico</h4>
                <p class="resources__card-author">Napoleon Hill</p>
                <p class="resources__card-description">Un clásico del desarrollo personal y financiero que explora la psicología del éxito y cómo los pensamientos y creencias influyen en nuestra capacidad para generar riqueza.</p>
                <a href="#" class="resources__card-link">Ver detalles</a>
            </div>
        </article>
        
        <h3 class="resources__category">Recursos online</h3>
        
        <!-- Recurso Web 1 -->
        <article class="resources__card">
            <div class="resources__card-image-container">
                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Investopedia" class="resources__card-image">
            </div>
            <div class="resources__card-content">
                <span class="resources__card-tag resources__card-tag--web">Plataforma educativa</span>
                <h4 class="resources__card-title">Investopedia</h4>
                <p class="resources__card-author">investopedia.com</p>
                <p class="resources__card-description">Uno de los recursos más completos para aprender sobre conceptos financieros, con explicaciones detalladas, simuladores y cursos sobre todos los aspectos de las finanzas e inversiones.</p>
                <a href="#" class="resources__card-link">Visitar sitio</a>
            </div>
        </article>
        
        <!-- Recurso Web 2 -->
        <article class="resources__card">
            <div class="resources__card-image-container">
                <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Khan Academy" class="resources__card-image">
            </div>
            <div class="resources__card-content">
                <span class="resources__card-tag resources__card-tag--web">Cursos gratuitos</span>
                <h4 class="resources__card-title">Khan Academy Finanzas</h4>
                <p class="resources__card-author">khanacademy.org</p>
                <p class="resources__card-description">Plataforma educativa gratuita con cursos detallados sobre economía, finanzas personales y conceptos bancarios, explicados de manera sencilla con videos y ejercicios prácticos.</p>
                <a href="#" class="resources__card-link">Visitar sitio</a>
            </div>
        </article>
        
        <!-- Recurso Web 3 -->
        <article class="resources__card">
            <div class="resources__card-image-container">
                <img src="https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="CNMV - Portal del Inversor" class="resources__card-image">
            </div>
            <div class="resources__card-content">
                <span class="resources__card-tag resources__card-tag--web">Institución oficial</span>
                <h4 class="resources__card-title">CNMV - Portal del Inversor</h4>
                <p class="resources__card-author">cnmv.es</p>
                <p class="resources__card-description">Recurso oficial de la Comisión Nacional del Mercado de Valores con guías, herramientas y consejos sobre inversión responsable y protección del inversor en España.</p>
                <a href="#" class="resources__card-link">Visitar sitio</a>
            </div>
        </article>
    </div>
    
    <div class="resources__cta-container">
        <a href="formacion.html" class="resources__cta">Ver todos los recursos</a>
    </div>
</section>
@endsection