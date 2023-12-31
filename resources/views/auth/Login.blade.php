@extends('layouts.app')
<script defer src="https://app.embed.im/snow.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>

@section('titulo')
Login
@endsection

@section('titulo2')
<span class="p-1">
    Inicia sesion en City Tours 
</span>
   
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
        filter: brightness(.80);
    }
</style>
@section('contenido')
<div class="md:flex md:justify-center md:gap-10 md:items-center mt-10" >
    <div class="md:w-5/12 image-conte">
        <img src="{{asset('img/Peru01.jpg')}}" alt="">
    </div>

    <div class="md:w-4/12 bg-white p-6 pt-20 pb-20 rounded-lg shadow-xl">
        <form action="{{ route('login.store') }}" method="POST" novalidate>
            {{--  Cross-Site Request Forgery --}}
            @csrf
            @if(session('mensaje'))
            <p class="bg-red-500 text-white my-2 font-bold rounded-lg text-sm p-2 text-center">{{ session('mensaje') }}</p>
        @endif
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
                <input type="checkbox" name="recordar" id="recordar" class="w-5 h-5 ml-2 mr-2"> Mantener sesion iniciada
            </div>
            <input type="submit" value="Iniciar" class="bg-blue-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full border p-3  text-white rounded-lg mt-10">
            <div class="w-full p-5 text-center mt-10 border-t-1 border-t">
                <a href="{{route('restablecer')}}" class="text-center text-blue-500 font-bold">Olvidaste tu contraseña ?</a>
            </div>
        </form>
    </div>
</div>
@if(session('mensaje'))
    <script>
        iziToast.show({
            title: 'Error',
            message: '{{ session('mensaje') }}',
            theme: 'light',
            color: 'red',
            position: 'top',
        });
    </script>
@endif
@endsection