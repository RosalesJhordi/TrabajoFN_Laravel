<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Panel Admin - @yield('titulo')</title>
    <script src="https://kit.fontawesome.com/a22afade38.js" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
    <style>
        ::-webkit-scrollbar{
            width: 0;
        }
        main{
            height: 100vh;
        }
        aside{
            width: 25%;
            height: 100%;
            float: right;
            box-shadow: 0px 10px 20px 1px ;
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
            <a href="{{ route('agregar') }}" class="p-3 rounded-lg mr-2 font-bold hover:bg-blue-500 hover:text-white">Agregar</a> 
            <a href="{{route('logout')}}" class="text-2xl mr-5"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
        </nav>
    
    </header>
    <main>
        {{-- @foreach ($destinos as $lugar)
            <p>{{ $lugar->nombre }}</p>
            <!-- Mostrar otros atributos del lugar aquí -->
        @endforeach --}}
        <aside>
            @yield('contenido')
        </aside>
    </main>
</body>
</html>