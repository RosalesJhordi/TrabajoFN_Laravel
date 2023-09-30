@extends('layouts.Dashboard')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@vite('resources/css/contenido.css')

<style>
    .anuncios{
        width: 100%;
        height: 70vh;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        background-image: url('{{ asset('img/machu-pichu.jpg') }}');
    }
    .shape{
        width: 40%;
        height: 100%;
        position: relative;
        background: rgba(3, 41, 255, 0.712);
        border-radius: 0% 80% 10% 0% / 0% 80% 10% 0%;
        animation: 2.5s cubic-bezier(.25, 1, .30, 1) circle-in-hesitate both;
    }
    @keyframes circle-in-hesitate {
        0% {
            clip-path: circle(0%);
        }
        40% {
            clip-path: circle(40%);
        }
        100% {
            clip-path: circle(125%);
        }
    }

</style>
@section('container')

    @if (auth()->user()->email == "Rosales@gmail.com")
        <div class=" w-full h-10 flex justify-end items-end mt-2 shadow-md pb-2">
            <h1 class="mr-5 text-lg font-bold">Hola: {{ $user->name}}</h1>
            <img src="{{ asset('img/usuario.svg')}}" alt="Imagen usuario" class="w-8 mr-5 cursor-pointer" onclick="datos()"/>

            <a href="{{ route('logout') }}" class="text-2xl mr-5"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
        </div>
    @elseif (auth()->user())
        <div class=" w-full h-10 flex justify-end items-end mt-2 shadow-md pb-2">
            <h1 class="mr-5 text-lg font-bold">Hola: {{ $user->name}}</h1>
            <img src="{{ asset('img/usuario.svg')}}" alt="Imagen usuario" class="w-8 mr-5 cursor-pointer" onclick="datos()"/>

            <a href="{{ route('logout') }}" class="text-2xl mr-5"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
        </div>
        <div class="w-full bg-gray-100 h-full">
            <div class="m-auto anuncios flex items-end">
                <div class="shape flex justify-center items-center flex-col text-center text-6xl">
                    <h1 class="font-bold text-white mt-40">Viaja desde <br> <span class="text-green-400">s/ 800</span></h1>
                    <img src="{{ asset('img/image.png')}}" class="w-48 mt-10">
                </div>
            </div>
        </div>
    @endif
    
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