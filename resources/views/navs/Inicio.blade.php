@extends('Usuario')

@section('contenido')
<div class="m-auto anuncios">
    <div class="shape flex justify-center items-center flex-col text-center text-6xl">
        <h1 class="font-bold text-white mt-20">Viaja desde <br> <span class="text-green-400">s/ 200</span></h1>
        <img src="{{ asset('img/image.png')}}" class="w-60">
    </div>
</div>
<h1 class="text-center text-4xl m-5 first-letter text-black font-semibold ">Elige tu siguiente ruta</h1>
<div class="w-full bg-gray-100 h-auto">
    <div class="flex flex-wrap justify-between cursor-pointer lugares">
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
            <div class="informacion flex justify-between items-center m-3">
                <h1>
                    <span class="font-bold text-xl">
                        {{$lugar['nombre']}} - {{$lugar['ubicacion']}}
                    </span>
                    <br>
                    <span class="font-semibold">
                        {{$lugar['descripcion']}}
                    </span>
                </h1>
                <div class="text-2xl flex justify-center items-center text-gray-500">
                    <i class="fa-solid fa-heart m-2 p-2 text-red-300 hover:text-red-600"></i>
                    <i class="fa-solid fa-bookmark m-2 p-2 hover:text-yellow-400"></i>
                    <i class="fa-solid fa-ticket p-2 m2 hover:bg-orange-600 rounded-md text-3xl hover:text-white" onclick="asientos()"></i>
                </div>
            </div>
        </section>
        @endforeach
    </div>
</div>
@endsection