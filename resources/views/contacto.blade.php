@extends('layout.app')
@section('hero_title', 'Ponte en contacto con Finsmart')
@section('title', 'Contacto - Finsmart')
@section('content')
    <section class="formulario-contacto">

        <form class="columna">
            <label for="nombre">Nombre y apellidos:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre y apellidos" required><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required minlength="5" placeholder="elon@musk.com" required>
            <span class="error" aria-live="polite"></span><br>
            <label for="telefono">Teléfono</label>
            <input type="tel" name="" id="telefono" required pattern="^\+?[0-9]{9,}$" placeholder="+34666666666" required>
            <span class="error" aria-live="polite"></span><br>
            <label for="mensaje">Mensaje:</label>
            <textarea name="mensaje" id="mensaje" placeholder="Escribe aquí el texto que quieras..." required></textarea>
            <button class="btn" type="submit">Enviar</button>
        </form>
    </section>

@endsection
@section('scripts')
    @vite(['resources/ts/pages/contacto.ts'])
@endsection