<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CityTours - @yield('titulo')</title>
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/a22afade38.js" crossorigin="anonymous"></script>
    {{-- @stack('styles') --}}
</head>
<body class="m-0">
    <header class="p-5 border-b bg-white shadow flex justify-between">
        <div class="flex logo">
            <h1 class="text-3xl font-black mr-1">CityTours</h1>
            <img src="{{ asset('img/Logo.png') }}" alt="Logo sesion" class=" h-9">
        </div>
            <nav class="flex items-center justify-center">
                <a class="mr-4 cursor-pointer font-bold" href="/">Inicio</a>
                <a class="mr-4 cursor-pointer font-bold" href="{{ route('registro') }}">Crear cuenta</a>
                <a class="cursor-pointer font-bold" href="{{ route('login') }}">Iniciar sesion</a>
            </nav>
    </header>
    <main class="mb-10">
        <h2 class="text-3xl font-bold text-center">@yield('titulo2')</h2>
        
        @yield('contenido')
    </main>
    <footer class="w-full text-center p-5 flex text-xl text-gray-500 bg-gray-300 justify-center items-center">
        <div class="border-r p-5 text-start h-32">
            <h1 class="font-bold">Informacion para tu viaje:</h1>
            <h2>
                Clima y pronosticos <br>
                Areas Naturales Protegidas <br>
                Tourist Police Perú
            </h2>
        </div>
        <div class="border-r p-5  h-32">
            <h1 class="font-bold">
                <span>
                    Siguenos: 
                </span>
                <br><br>
                <a href="" class="m-1 cursor-pointer text-2xl"><i class="fa-brands fa-facebook"></i></a>
                <a href="" class="m-1 cursor-pointer text-2xl"><i class="fa-brands fa-twitter"></i></a>
                <a href="" class="m-1 cursor-pointer text-2xl"><i class="fa-brands fa-instagram"></i></a>
                <a href="" class="m-1 cursor-pointer text-2xl"><i class="fa-brands fa-tiktok"></i></a>
                <a href="" class="m-1 cursor-pointer text-2xl"><i class="fa-brands fa-telegram"></i></a>
            </h1>
        </div>
        <div class=" h-32 flex items-center">
            <img src="{{asset('img/perusalen.png')}}" alt="perusalen" class="w-1/2 m-5">
        </div>
    </footer>
</body>
</html>