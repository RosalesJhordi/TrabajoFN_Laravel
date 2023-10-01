<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <style>
        .datos-form{
            width: 40%;
        }
        .dropzone{
            height: 60vh;
        }
    </style>
</head>
<body class="flex justify-between items-center mr-40 ml-40 mt-5 bg-gray-100">
    <div class="mt-5 w-1/2 mr-10">
        <form action="{{route('imagen.store')}}" method="POST" enctype="multipart/form-data" id="dropzone" class="mr-10 dropzone border-dashed border-2 w-full h-96 rounded flex flex-co justify-center items-center">
            @csrf
        </form>
    </div>
    <form action="{{route('agregar')}}" method="POST" class="datos-form shadow-2xl rounded-lg m-auto flex flex-col p-5 w-1/2">
        @csrf
        <div>
        <div>
            <label for="nombre" class="mb-2 block uppercase text-black font-bold  text-start">
                Nombre del lugar
            </label>
            <input id="nombre" name="nombre" type="text" placeholder="Nombre de lugar" class="focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 border p-3 w-full rounded-lg @error('nombre') border-red-500 @enderror" value={{ old('nombre') }}>
            @error('nombre')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
            @enderror
        </div>
        <div class="mt-5">
            <label for="ubicacion" class="mb-2 block uppercase text-black font-bold text-start">
                Ubicacion
            </label>
            <input id="ubicacion" name="ubicacion" type="text" placeholder="Ubicacion del lugar" class="focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 border p-3 w-full rounded-lg @error('ubicacion') border-red-500 @enderror" value={{ old('ubicacion') }}>
            @error('ubicacion')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
            @enderror
        </div>
        <div class="mt-5">
            <label for="clima" class="mb-2 block uppercase text-black font-bold text-start">
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
            <label for="costumbres" class="mb-2 block uppercase text-black font-bold text-start">
                Costumbres
            </label>
            <textarea id="costumbres" name="costumbres" type="text" placeholder="Costrumbres del lugar" class="focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 border p-3 w-full rounded-lg @error('costumbres') border-red-500 @enderror" value={{ old('costumbres') }}></textarea>
            @error('costumbres')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
            @enderror
        </div>
        <div class="mt-5">
            <label for="horario" class="mb-2 block uppercase text-black font-bold text-start">
                Horario de salida
            </label>
            <input id="horario" name="horario" type="datetime-local" placeholder="Horario de salida" class="focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 border p-3 w-full rounded-lg @error('horario') border-red-500 @enderror" value={{ old('horario') }}>
            @error('horario')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
            @enderror
        </div>
        <div class="mt-5">
            <label for="pasaje" class="mb-2 block uppercase text-black font-bold text-start">
                costo de pasaje
            </label>
            <input id="pasaje" name="pasaje" type="number" placeholder="costo de pasaje" class="focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 border p-3 w-full rounded-lg @error('pasaje') border-red-500 @enderror" value={{ old('pasaje') }}>
            @error('pasaje')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
            @enderror
        </div>
        <div class="mt-5">
            <label for="descuento" class="mb-2 block uppercase text-black font-bold text-start">
                descuento de pasaje
            </label>
            <input id="descuento" name="descuento" type="number" placeholder="costo de pasaje" class="focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 border p-3 w-full rounded-lg @error('descuento') border-red-500 @enderror" value={{ old('descuento') }}>
            @error('descuento')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
            @enderror
        </div>
        <input type="submit" value="Agregar" class="bg-blue-500 mt-10 p-3 rounded-lg font-bold cursor-pointer text-white w-1/2">
    </form>
</body>
</html>