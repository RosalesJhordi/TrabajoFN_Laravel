@extends('layouts.Dashboard')

@vite('resources/css/styles.css')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@section('container')

    @if (auth()->user()->email == "Rosales@gmail.com")
        <div class="w-full h-10 flex justify-end items-end mt-2 shadow-md pb-2">
            <h1 class="mr-5 text-lg font-bold">Hola: {{ $user->name}}</h1>
            <img src="{{ asset('img/usuario.svg')}}" alt="Imagen usuario" class="w-8 mr-5 cursor-pointer" onclick="datos()"/>

            <a href="{{ route('logout') }}" class="text-2xl mr-5"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
        </div>
    @elseif (auth()->user())
        <div class="w-full h-10 flex justify-end items-end mt-2 shadow-md pb-2">
            <h1 class="mr-5 text-lg font-bold">Hola: {{ $user->name}}</h1>
            <img src="{{ asset('img/usuario.svg')}}" alt="Imagen usuario" class="w-8 mr-5 cursor-pointer" onclick="datos()"/>

            <a href="{{ route('logout') }}" class="text-2xl mr-5"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
        </div>
    @endif
    
    <div class="w-full h-full bg-blue-50 flex flex-col items-center">
        <div class="anuncio">

        </div>
    </div>
    <script>
        function datos(){
            Swal.fire({
                position: 'top-end',
                showCloseButton: true,
                title: '{{ $user->name }}',
                imageUrl: '{{ asset("img/usuario.svg")}}',
                imageWidth: 400,
                imageHeight: 200,
                imageAlt: 'Custom image',
                confirmButtonText: 'Editar datos'
            })
        }
    </script>
@endsection