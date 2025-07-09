<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'TFM Parte 2')</title>
    @vite(['resources/ts/config.ts'])
    <link rel="icon" type="image/x-icon" href="{{ asset('icons/favicon.png') }}">
</head>
<body class="antialiased">
    @include('components.header')
    <main>
        @yield('content')
    </main>
    @yield('scripts')
    @include('components.footer')
</body>
</html>
