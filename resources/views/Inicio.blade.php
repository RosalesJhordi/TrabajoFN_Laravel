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
        <div class="flex flex-wrap justify-between cursor-pointer lugares">
            @foreach ($destinos as $lugar)
            <section class="sections">
                <div class="text-center">
                    <h1 class="absolute font-bold text-xl bg-white p-2 bord precio text-start">
                        <span class="text-green-500">
                            Ahora: S/{{$lugar->costo - $lugar->descuento}}
                        </span><br> 
                        <span class="line-through text-red-600 text-lg">
                           Antes: S/{{$lugar->costo}} 
                        </span>                           
                        
                    </h1>
                   <img src="{{ asset('Uploads') . '/' . $lugar->imagen }}" alt="Imagen del lugar"> 
                </div>
                <div class="informacion flex justify-between items-center m-5">
                    <h1>
                        <span class="font-bold text-xl">
                            {{$lugar->nombre}} - {{$lugar->ubicacion}}
                        </span>
                        <br>
                        <span class="font-semibold">
                            {{$lugar->costumbres}}
                        </span>
                    </h1>
                    <div class="text-2xl">
                        <i class="fa-solid fa-heart p-1 text-red-300 hover:text-red-600"></i>
                        <i class="fa-solid fa-bookmark p-1 text-gray-400"></i>
                        <i class="fa-solid fa-ticket ml-3 p-3 bg-orange-500 text-white"></i>
                    </div>
                </div>
            </section>
            @endforeach
        </div>
    </div>
    
@endsection