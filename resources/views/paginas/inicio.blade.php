@extends('layouts.plantilla')

@section('titulo', 'Café & Co. | Inicio')

@section('contenido')
    <section>
        <h2>Bienvenido a Café & Co.</h2>
        <p>Pasión por el grano perfecto y el tueste artesanal.</p>
        
        <!-- Imagen local cargada desde public/img/ -->
        <img src="{{ asset('img/banner-cafe.jpg') }}" alt="Granos de café tostados" class="hero-img">

        <h3>¿Por qué elegir nuestro café?</h3>
        <p>Nos dedicamos a seleccionar los mejores granos de origen directo de pequeños productores alrededor del mundo.</p>

        <ul class="lista-caracteristicas">
            <li>Tueste semanal garantizado para mantener máxima frescura.</li>
            <li>Origen 100% trazable y de comercio justo.</li>
            <li>Perfiles de sabor desarrollados por baristas certificados.</li>
        </ul>

        <p>Aprende más sobre los estándares del café de especialidad en la 
            <a href="https://sca.coffee" target="_blank" class="enlace-externo">Specialty Coffee Association (SCA)</a>.
        </p>
    </section>
@endsection