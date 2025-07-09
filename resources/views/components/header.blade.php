<header class="cabecera index">
    <nav class="barra-navegacion">
        <h2>
            <a href="#">Finsmart</a>
        </h2>
        <ul>
            <li>
                <a href="#">Mi cartera</a>
            </li>
            <li>
                <a href="#">Estado de la bolsa</a>
            </li>
            <li>
                <a href="#">Conócenos</a>
            </li>
        </ul>
    </nav>
    <section class="hero">
    @hasSection('hero_logo')
        <img src="@yield('hero_logo')" alt="">
    @endif
    @hasSection('hero_title')
        <h1 class="hero__title">@yield('hero_title', 'Página sin título')</h1>
    @endif
    @hasSection('hero_content')
        @yield('hero_content')
    @endif
    </section>
</header>