@extends('layouts.plantilla')

@section('titulo', 'Café & Co. | Productos')

@section('contenido')
    <section>
        <h2>Nuestra Selección de Orígenes</h2>
        <p>Descubre nuestros granos seleccionados y tostados esta semana.</p>

        <div class="grid-productos">
            <article class="card">
                <img src="{{ asset('img/cafe-etiopia.jpg') }}" alt="Café Etiopía Yirgacheffe">
                <h3>Etiopía Yirgacheffe</h3>
                <p>Notas florales, jazmín y acidez cítrica brillante.</p>
                <ul class="lista-caracteristicas">
                    <li>Proceso: Lavado</li>
                    <li>Altitud: 2,000 msnm</li>
                </ul>
            </article>

            <article class="card">
                <img src="{{ asset('img/cafe-colombia.jpg') }}" alt="Café Colombia Huila">
                <h3>Colombia Huila</h3>
                <p>Cuerpo cremoso con notas a chocolate amargo, caramelo y frutos rojos.</p>
                <ul class="lista-caracteristicas">
                    <li>Proceso: Natural</li>
                    <li>Altitud: 1,750 msnm</li>
                </ul>
            </article>
        </div>

        <p style="margin-top: 2rem;">¿Quieres aprender diferentes métodos de extracción? Consulta las guías de 
            <a href="https://www.baristahustle.com" target="_blank" class="enlace-externo">Barista Hustle</a>.
        </p>
    </section>
@endsection