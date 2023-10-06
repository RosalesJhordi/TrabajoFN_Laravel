@extends('layouts.app')

@section('titulo')
Restablecer
@endsection

@section('titulo2')
<span class="p-1">
   Olvidaste tu contraseña ?
</span>
@endsection

<style>
    body{
        background-color: rgba(128, 128, 128, 0.242);
    }
    .galeria{
        display: grid;
    }

    .galeria > img {
        cursor: pointer;
        grid-area: 1/1;
        width: 70%;
        aspect-ratio: 1;
        object-fit: cover;
        border: 5px solid #f2f2f2;
        box-shadow: 0 0 4px #0007;
        border-radius: 15px;
    }
    .galeria > img:nth-child(1) {
        transform: rotate(5deg);
    }

    .galeria > img:nth-child(2) {
        transform: rotate(-5deg);
    }

    .galeria > img:nth-child(3) {
        transform: rotate(5deg);
    }

    .galeria > img:nth-child(4) {
        transform: rotate(-5deg);
    }

    .galeria > img:nth-child(5) {
        transform: rotate(5deg);
    }
</style>
<script>
    function toggleImagen(image) {

        setTimeout(function () {
            image.style.display = 'none';
            var imagenes = document.querySelectorAll('.galeria-img');
            var todasOcultas = true;

            imagenes.forEach(function (img) {
                if (img.style.display !== 'none') {
                    todasOcultas = false;
                }
            });
            if (todasOcultas) {
                imagenes.forEach(function (img) {
                    img.style.display = 'block';
                });
            }
        }, 0020);
    }
</script>


@section('contenido')
<div class="md:flex md:justify-center mb-20 md:gap-10 md:items-center mt-10" >
    <div class="md:w-5/12 galeria">
        <img src="{{ asset('img/Peru01.jpg') }}" class="galeria-img" alt="Logo Register" onclick="toggleImagen(this)">
        <img src="{{ asset('img/Peru02.jpg') }}" class="galeria-img" alt="Logo Register" onclick="toggleImagen(this)">
        <img src="{{ asset('img/Peru03.jpg') }}" class="galeria-img" alt="Logo Register" onclick="toggleImagen(this)">
        <img src="{{ asset('img/Peru.jpg') }}" class="galeria-img" alt="Logo Register" onclick="toggleImagen(this)">
        <img src="{{ asset('img/Peru04.jpg') }}" class="galeria-img" alt="Logo Register" onclick="toggleImagen(this)">
    </div>

    <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-2xl">
        <form action="{{ route('restablecer') }}" method="POST" novalidate>
            @csrf
            @if(session('mensaje'))
            <p class="bg-green-500 text-white my-2 font-bold rounded-lg text-sm p-2 text-center">{{ session('mensaje') }}</p>
        @endif
            <div>
                <label for="email" class="mb-2 block uppercase text-black font-bold">
                    Email
                </label>
                <input id="email" name="email" type="email" placeholder="Tu Email" class="focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 border p-3 w-full rounded-lg @error('email') border-red-500 @enderror" value={{old('email')}}>
                {{-- si el campo esta vacio --}}
                @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
            </div>

            <input type="submit" value="Emviar Codigo" class="bg-blue-600 hover:bg-blue-700 transition-colors cursor-pointer uppercase font-bold w-full border p-3  text-white rounded-lg mt-10">
        </form>
    </div>
</div>
@endsection