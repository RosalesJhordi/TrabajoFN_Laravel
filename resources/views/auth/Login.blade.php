@extends('Layout.app')
<script defer src="https://app.embed.im/snow.js"></script>
@section('titulo')
Login
@endsection

@section('titulo2')
   Inicia sesion en City Tours 
@endsection
<style>
    body{
        background-color: rgba(128, 128, 128, 0.242);
    }
    .image-conte img{
        width: 100%;
        height: 65vh;
        background-color: #3498db;
        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        border: 5px solid #f2f2f2;
        box-shadow: 0 0 4px #0007;
    }
    .image-conte img:hover{
        filter: blur(1.5px);
    }
</style>
@section('contenido')
<div class="md:flex md:justify-center md:gap-10 md:items-center mt-10" >
    <div class="md:w-5/12 image-conte">
        <img src="{{asset('img/Peru01.jpg')}}" alt="">
    </div>

    <div class="md:w-4/12 bg-white p-6 pt-20 pb-20 rounded-lg shadow-xl">
        <form action="{{ route('login') }}" method="POST" novalidate>
            @csrf

            <div>
                <label for="email" class="mb-2 block uppercase text-black font-bold">
                    Email
                </label>
                <input id="email" name="email" type="email" placeholder="Tu Email" class="focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 border p-3 w-full rounded-lg @error('name') border-red-500 @enderror" value={{old('email')}}>
                {{-- si el campo esta vacio --}}
                @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb:5 mt-5">
                <label for="password" class="mb-2 block uppercase text-black font-bold">
                    Password
                </label>
                <input id="password" name="password" type="password" placeholder="Tu Password" class="focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 border p-3 w-full rounded-lg @error('name') border-red-500 @enderror">
                {{-- si el campo esta vacio --}}
                @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb:5 mt-5 flex items-center justify-start">
                <input type="checkbox" name="recordar" id="recordar" class="w-5 h-5 mr-3"> Mantener sesion iniciada
            </div>
            <input type="submit" value="Iniciar" class="bg-blue-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full border p-3  text-white rounded-lg mt-10">
        </form>
    </div>
</div>
@endsection