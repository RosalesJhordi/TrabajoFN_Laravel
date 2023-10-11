@extends('Usuario')
<style>
    .img-reservas{
        height: 60vh;
        background-size: cover;
        background-image: url('{{ asset('img/img-reservas.jpg') }}');
    }
    .lugares{
        width: 95%;
    }
</style>
@section('contenido')
<div class="w-full flex justify-center items-end img-reservas">
    <h1 class="text-7xl font-semibold text-orange-600 mb-20">
        La vida es mejor al aire libre
    </h1>
</div>
<div class="w-full h-auto">
    <h1 class="text-center text-4xl font-semibold mt-10">Realiza tu reservacion ya!</h1>
    <div class="m-auto lugares">
        <H1 class="ml-10 mt-10 text-2xl">Lugares</H1>
        <div class="flex justify-between items-center">
            @foreach ($destinos as $lugar)
                <section class="w-1/3 h-96 bg-white rounded-lg shadow-xl m-5 flex justify-center">
                    <div class="w-full h-80">
                        <h1 class="absolute font-bold text-xl bg-orange-500 p-2 bord precio text-center">
                            <span class="text-white">
                                {{$lugar['nombre']}}
                            </span><br>                           
                        </h1>
                        <img src="{{ asset('Uploads') . '/' . $lugar['imagen'] }}" alt="Imagen del lugar" class=" h-full w-full">
                        <h1 class="w-full h-14 mt-1 flex justify-between items-center p-2 text-2xl">
                            <span class="text-sm font-semibold">
                               {{$lugar['descripcion']}} 
                            </span>
                            <span class="flex items-center">
                                <form action="{{route('reservar', ['nombre' => $lugar['nombre'], 'data' => $user])}}" method="POST" class="text-2xl mt-5 flex items-center">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$lugar['id']}}">
                                    <i class="fa-solid fa-star hover:text-yellow-400 cursor-pointer m-2"></i>
                                    <button type="submit">
                                       <i class="fa-solid fa-circle-info hover:text-blue-600 cursor-pointer"></i> 
                                    </button>
                                </form>
                            </span>
                        </h1>
                    </div>
                    
                </section>
            @endforeach
        </div>
    </div>
</div>
@endsection