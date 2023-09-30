@extends('layouts.Dashboard')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@vite('resources/css/contenido.css')

<style>
    ::-webkit-scrollbar{
        width: 0;
    }
    html.modoOscuro{
        filter: invert(100%)
    }
    html.modoOscuro img{
        filter: invert(100%);
    }
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
        background: rgba(3, 41, 255, 0.712);
        border-radius: 0% 80% 10% 0% / 0% 80% 10% 0%;
    }
    .box-editar{
        box-shadow: 0px 0px 10px 2px grey;
        border-radius: 10px
    }
    .box-editar:hover{
        transform: scale(0.98);
    }
</style>
@section('container')

    @if (auth()->user()->email == "Rosales@gmail.com")
        <div class=" w-full h-10 flex justify-end items-end mt-2 shadow-md pb-2">
            <input type="checkbox" id="modoOscuro" onclick="document.documentElement.classList.toggle('modoOscuro')" class="mr-5 mb-1 w-4 h-4 cursor-pointer">
            <h1 class="mr-5 text-lg font-bold">Hola: {{ $user->name}}</h1>
            <a href="{{ route('logout') }}" class="text-2xl mr-5"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
        </div>
        {{-- opciones de admin --}}
        <a href="{{ route('admin') }}">
        <div class="fixed bottom-0 right-0 m-5 bg-gray-200 w-1/5 h-1/4 cursor-pointer box-editar">
            <div class=" w-full h-40 bg-pink-500 flex justify-center items-center">
                <i class="fa-solid fa-plus text-5xl p-2 rounded-full w-16 h-16 text-center bg-white"></i>
            </div>
            <h3 class="font-bold ml-5 text-2xl p-1">Editar</h3>
            <p class="ml-5 font-semibold p-1">Puedes editar pasajes, horario, etc</p>
        </div></a>
          
        <div class="w-full bg-gray-100 h-full">
            <div class="m-auto anuncios flex items-end">
                <div class="shape flex justify-center items-center flex-col text-center text-6xl">
                    <h1 class="font-bold text-white mt-40">Viaja desde <br> <span class="text-green-400">s/ 800</span></h1>
                    <img src="{{ asset('img/image.png')}}" class="w-48 mt-10">
                </div>
            </div>
        </div>
    {{-- usuario normal --}}
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