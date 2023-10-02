@vite('resources/css/styles.css')

@extends('layouts.app')


@section('titulo')
    Inicio
@endsection
<style>
    .info {
        background-image: url('{{ asset('img/Peru.jpg') }}');
    }
</style>
@section('contenido')
    <div class="info flex items-center justify-center flex-col ">
        <h1 class="text-3xl font-bold text-white">Bienvenido a CityTours</h1>
        <i class="fa-solid fa-location-dot text-white text-3xl p-5"></i>
        <button class="bg-blue-600 text-white p-3 w-44 font-bold rounded">contactar</button>
    </div>
    <div class="contenedor mt-10">
        <h2 class="text-3xl font-bold text-center p-5">
            La aventura vale la pena
        </h2>
        <div class="lugares  flex flex-row justify-center items-center">
            @foreach ($destinos as $lugar)
            <div class="bg-gray-200 shadow-lg rounded w-1/5 m-2 p-5 h-80">
                <div class="h-56">
                    <p>Lugar: {{ $lugar->nombre }}</p>
                    <p>Ubicaion: {{ $lugar->ubicacion }}</p>
                    <p>Clima: {{ $lugar->clima }}</p>
                    <p>Costumbres: {{ $lugar->costumbres }}</p>
                    <p>Horario: {{ $lugar->horario_salida }}</p>
                </div>
                <input type="button" id="{{ $lugar->nombre }}" onclick="mostra(this.id)" value="Comprar Pasaje" class="bg-blue-500 text-white p-3 w-full rounded-lg relative bottom-0 cursor-pointer">
            </div>
            @endforeach
            <script>
                function mostra(id) {
                    console.log(id);
                }
            </script>
        </div>
    </div>
@endsection