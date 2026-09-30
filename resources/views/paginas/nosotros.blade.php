@extends('layouts.plantilla')

@section('titulo', 'Café & Co. | Nosotros')

@section('contenido')
    <section>
        <h2>Nuestra Historia</h2>
        <img src="{{ asset('img/tostadora.jpg') }}" alt="Nuestra tostadora artesanal" class="hero-img">

        <p>Café & Co. nació en 2020 con una misión clara: elevar la experiencia del café diario en los hogares de nuestra comunidad.</p>
        
        <p>Comenzamos con una pequeña tostadora de 2 kg y hoy colaboramos con más de 15 fincas sostenibles en Latinoamérica y África Oriental.</p>

        <h3>Nuestros Compromisos</h3>
        <ul class="lista-caracteristicas">
            <li><strong>Sostenibilidad:</strong> Empaques 100% compostables.</li>
            <li><strong>Calidad:</strong> Granos evaluados con más de 85 puntos en catación.</li>
            <li><strong>Comunidad:</strong> Precios justos pagados directamente al caficultor.</li>
        </ul>

        <p>Para conocer más sobre proyectos de sostenibilidad cafetera, visita el 
            <a href="https://www.worldcoffeeresearch.org" target="_blank" class="enlace-externo">World Coffee Research</a>.
        </p>
    </section>
@endsection