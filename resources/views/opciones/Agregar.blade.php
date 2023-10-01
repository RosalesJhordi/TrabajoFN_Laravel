@extends('AdminPanel')

@section('titulo')
agregar
@endsection
@section('contenido')
    <form action="" class="w-96 m-auto flex flex-col mt-20">
        @csrf
        <div>
            <label for="nombre" class="mb-2 block uppercase text-black font-bold">
                Nombre del lugar
            </label>
            <input id="nombre" name="nombre" type="text" placeholder="Nombre de lugar" class="focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 border p-3 w-full rounded-lg @error('nombre') border-red-500 @enderror" value={{ old('nombre') }}>
            @error('nombre')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
            @enderror
        </div>
        <div class="mt-5">
            <label for="ubicacion" class="mb-2 block uppercase text-black font-bold">
                Ubicacion
            </label>
            <input id="ubicacion" name="ubicacion" type="text" placeholder="Ubicacion del lugar" class="focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 border p-3 w-full rounded-lg @error('ubicacion') border-red-500 @enderror" value={{ old('ubicacion') }}>
            @error('ubicacion')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
            @enderror
        </div>
        <div class="mt-5">
            <label for="clima" class="mb-2 block uppercase text-black font-bold">
                Seleciona Clima
            </label>
            <select id="clima" name="clima" class="w-full p-2 cursor-pointer @error('clima') border-red-500 @enderror" value={{ old('clima') }}>
                <option value="soleado">Soleado</option>
                <option value="nublado">Nublado</option>
                <option value="lluvioso">Lluvioso</option>
                <option value="nevado">Nevado</option>
            </select>
            @error('clima')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
            @enderror
        </div>
        <div class="mt-5">
            <label for="costrumbres" class="mb-2 block uppercase text-black font-bold">
                Costumbres
            </label>
            <textarea id="costrumbres" name="costrumbres" type="text" placeholder="Costrumbres del lugar" class="focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 border p-3 w-full rounded-lg @error('costrumbres') border-red-500 @enderror" value={{ old('costrumbres') }}>
            </textarea>
            @error('costrumbres')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
            @enderror
        </div>
        <div class="mt-5">
            <label for="horario" class="mb-2 block uppercase text-black font-bold">
                Horario de salida
            </label>
            <input id="horario" name="horario" type="datetime-local" placeholder="Horario de salida" class="focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 border p-3 w-full rounded-lg @error('horario') border-red-500 @enderror" value={{ old('horario') }}>
            @error('horario')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
            @enderror
        </div>
        <div class="mt-5">
            imagen aqui
        </div>
        <input type="submit" value="Agregar" class="bg-blue-500 mt-10 p-3 rounded-lg font-bold cursor-pointer text-white">
    </form>
@endsection