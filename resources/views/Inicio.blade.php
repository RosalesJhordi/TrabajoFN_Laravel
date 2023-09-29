@vite('resources/css/styles.css')

@extends('layouts.app')


@section('titulo')
    Inicio
@endsection
<style>
    .info {
        background-image: url('{{ asset('img/Peru.jpg') }}');
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
        <div class="lugares  flex justify-around items-center flex-col">
            <div class="informacion cursor-pointer">
                <div class="flex flex-row bg-slate-300 w-1/3 m-5" id="info">
                    <h3 class="text-center p-2 text-2xl font-bold">Huánuco</h3>
                </div>
                <div class="flex flex-row bg-slate-300 w-1/3 m-5" id="info">
                    <h3 class="text-center p-2 text-2xl font-bold">Lima</h3>
                </div>
                <div class="flex flex-row bg-slate-300 w-1/3 m-5" id="info">
                    <h3 class="text-center p-2 text-2xl font-bold">Tingo Maria</h3>
                </div>
                <div class="flex flex-row bg-slate-300 w-1/3 m-5" id="info">
                    <h3 class="text-center p-2 text-2xl font-bold">Mas Lugares</h3>
                </div>
            </div>
        </div>
    </div>
@endsection