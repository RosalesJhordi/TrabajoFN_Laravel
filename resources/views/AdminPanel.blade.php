<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Panel Admin</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/a22afade38.js" crossorigin="anonymous"></script>
    <style>
        ::-webkit-scrollbar{
            width: 0;
        }
        main{
            width: 100%;
            height: 100vh;
        }
        .dropzone{
            height: 20vh;
            background: red;
        }
    </style>
</head>
<body class="flex flex-col">
    <header class="w-full p-5 shadow-xl flex justify-between">
        <h1 class="font-bold text-2xl">
            Administrador
        </h1>
        <nav>
            <a href="#" class="p-3 rounded-lg mr-2 font-bold hover:bg-orange-500 hover:text-white">Editar</a>
            <a href="#" class="p-3 rounded-lg mr-2 font-bold hover:bg-red-500 hover:text-white">Eliminar</a>
            <a href="#" class="p-3 rounded-lg mr-2 font-bold hover:bg-green-500 hover:text-white">Actualizar</a>
            <a href="{{route('agregar')}}" class="p-3 rounded-lg mr-2 font-bold hover:bg-blue-500 hover:text-white">Agregar</button> 
            <a href="{{route('logout')}}" id="mostrarFormulario" class="text-2xl mr-5"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
        </nav>
    
    </header>
    <main>
        <div class="flex">
            @foreach ($destinos as $lugar)
            <div class="rounded-xl p-2 shadow-lg shadow-black w-1/5 m-2">
                <img src="{{ asset('Uploads') . '/' . $lugar->imagen }}" alt="Imagen del lugar">
                <p>{{ $lugar->nombre }}</p>
                <p>{{ $lugar->ubicacion }}</p>
                <p>{{ $lugar->clima }}</p>
                <p>{{ $lugar->costumbres }}</p>
                <p>{{ $lugar->horario_salida }}</p>
            </div>
               
            @endforeach
         </div>
    </main>
</body>
</html>