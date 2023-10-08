@vite('resources/css/styles.css')
@vite('resources/css3/contenido.css')
<script src="https://kit.fontawesome.com/a22afade38.js" crossorigin="anonymous"></script>

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
</style>
@section('contenido')
    <div class="info flex items-center justify-center flex-col ">
        <h1 class="text-6xl font-bold text-white">Bienvenido a CityTours</h1>
        <i class="fa-solid fa-location-dot text-white text-4xl p-5"></i>
        <button class="bg-blue-600 text-white p-3 w-44 text-lg font-bold rounded">contactar</button>
    </div>
    <div class="contenedor mt-10">
        <h2 class="text-3xl font-bold text-center p-5">
            La aventura vale la pena
        </h2>
        <div class="w-full h-auto">
            <div class="flex flex-wrap justify-between items-center cursor-pointer lugares">
                @foreach ($destinos as $lugar)
                <section class="sections">
                    <div class="text-center image">
                        <h1 class="absolute font-bold text-xl bg-white p-2 bord precio text-start">
                            <span class="text-green-500">
                                Ahora: S/{{$lugar['costo'] - $lugar['descuento']}}
                            </span><br> 
                            <span class="line-through text-red-600 text-lg">
                               Antes: S/{{$lugar['costo']}} 
                            </span>                           
                        </h1>
                       <img src="{{ asset('Uploads') . '/' . $lugar['imagen'] }}" alt="Imagen del lugar">
                    </div>
                    <div class="informacion flex justify-between items-center mt-2">
                        <h1 class="ml-5">
                            <span class="font-bold text-xl">
                                {{$lugar['nombre']}} - {{$lugar['ubicacion']}}
                            </span>
                            <br>
                            <span class="font-semibold">
                                {{$lugar['descripcion']}}
                            </span>
                        </h1>
                        <div class="text-2xl flex justify-center items-center text-gray-500 mr-5">
                            <i class="fa-solid fa-heart m-2 p-2 text-red-300 hover:text-red-600"></i>
                            <i class="fa-solid fa-bookmark m-2 p-2 hover:text-yellow-400"></i>
                            <i class="fa-solid fa-ticket p-2 m2 hover:bg-orange-600 rounded-md text-3xl hover:text-white"></i>
                        </div>
                    </div>
                </section>
                @endforeach
            </div>
        </div>
    </div>
    
@endsection