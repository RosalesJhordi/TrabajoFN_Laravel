<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CityTours - @yield('titulo')</title>
    @vite('resources/css/app.css')
</head>
<body class="m-0">
    <header class="p-5 border-b bg-white shadow flex justify-between">
        <div class="flex logo">
            <h1 class="text-3xl font-black mr-1">CityTours</h1>
            <img src="{{ asset('img/Logo.png') }}" alt="Logo sesion" class=" h-9">
        </div>
            <nav class="flex items-center justify-center">
                <a class="mr-4 cursor-pointer font-bold" href="/">Inicio</a>
                <a class="mr-4 cursor-pointer font-bold" href="">Crear cuenta</a>
                <a class="cursor-pointer font-bold" href="">Iniciar sesion</a>
            </nav>
    </header>
    <main class="mb-10">
        <h2 class="font-black text-center text-3xl mt-10">
            @yield('titulo2')
        </h2>
        @yield('contenido')
    </main>
    <footer class="text-center p-5 text-gray-500 font-bold uppercase mt-10 ">
            CityTours - todo los derechos reservados {{ now()->year }}
    </footer>
</body>
</html>