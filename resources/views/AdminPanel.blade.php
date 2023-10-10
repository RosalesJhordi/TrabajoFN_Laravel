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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>

    @vite('resources/css3/contenido.css')
    <style>
        ::-webkit-scrollbar{
            width: 0;
        }
        .image{
            height: 80%;
        }
        .image img{
            height: 100%;
        }
    </style>
</head>
<body class="flex flex-col">
    <header class="w-full p-5 shadow-xl flex justify-between">
        <h1 class="font-bold text-2xl ml-5">
            Administrador
        </h1>
        <nav>
            <a href="{{route('agregar.index')}}" class="p-2 rounded mr-10 font-bold hover:bg-blue-500 hover:text-white">Agregar</button> 
            <a href="{{route('logout')}}" id="mostrarFormulario" class="text-2xl mr-5"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
        </nav>
    </header>
    <div class="w-full bg-gray-100 h-auto">
        <div class="flex flex-wrap justify-between cursor-pointer lugares">
            @foreach ($destinos as $lugar)
            <section class="sections">
                <div class="text-center image">
                    <h1 class="absolute font-bold text-xl bg-white p-2 bord precio text-start">
                        <span class="text-green-500">
                            Ahora: S/{{$lugar['costo'] - $lugar['descuento']}}
                        </span><br> 
                        <span class="line-through text-red-600 text-lg">
                           Antes: S/{{$lugar['costo']}} 
                        </span>                           
                    </h1>
                   <img src="{{ asset('Uploads') . '/' . $lugar['imagen'] }}" alt="Imagen del lugar"> 
                </div>
                <div class="informacion flex justify-between items-center m-5">
                    <h1>
                        <span class="font-bold text-xl">
                            {{$lugar['nombre']}} - {{$lugar['ubicacion']}}
                        </span>
                        <br>
                        <span class="font-semibold">
                            {{$lugar['descripcion']}}
                        </span>
                        
                    </h1>
                    <div class="text-2xl flex">
                        <a href="{{route('eliminar',$lugar['id'])}}">
                            <i class="fa-solid fa-trash text-red-600 p-3 hover:bg-blue-200 rounded-3xl"></i>  
                        </a>
                        <i class="fa-solid fa-pen text-yellow-500 p-3 hover:bg-blue-200 rounded-3xl"></i>
                    </div>
                </div>
            </section>
            @endforeach
        </div>
    </div>
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
    @if(session('success'))
    <script>
        iziToast.show({
            title: 'Éxito',
            message: '{{ session('success') }}',
            theme: 'light',
            color: 'green',
            position: 'topcenter',
        });
    </script>
@endif

</body>
</html>