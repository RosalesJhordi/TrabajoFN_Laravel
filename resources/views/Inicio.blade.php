@vite('resources/css/styles.css')

@extends('layouts.app')


@section('titulo')
    Inicio
@endsection
<style>
    .info {
        background-image: url('{{ asset('img/Peru.jpg') }}');
    }
    .lugares{
        height: auto;
    }
    .lugar{
        height: 30vh;
        width: 50%;
        box-shadow: 0px 1px 5px 1px;
    }
    .lugar img{
        width: 50%;
    }
    .informacion{
        height: auto;
        position: relative;
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
        <div class="lugares flex flex-row justify-center items-center">
            @foreach ($destinos as $lugar)
                <div class="lugar flex m-5 justify-center text-start">
                    <img src="{{ asset('Uploads') . '/' . $lugar->imagen }}" alt="Imagen del lugar">
                    <div class="informacion flex-col items-center">
                        <h1 class="font-bold text-2xl mt-5 mb-1">{{ $lugar->nombre }}</h1>
                        <h4>Ubicacion: {{$lugar->ubicacion}}</h4>
                        <h4>Clima: {{$lugar->clima}}</h4>
                        <h4>Costumbres: {{$lugar->costumbres}}</h4>
                        <h4>Costo: {{$lugar->costo}}</h4>
                        <h4>Descuento: {{ $lugar->descuento}}</h4>
                        <h2>Total: {{ $lugar->costo - $lugar->descuento }}</h2>
                        <a href="{{route('login')}}" class=" relative bottom-0 text-white bg-blue-500 p-2 w-1/2 rounded-lg text-center ">Comprar</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection