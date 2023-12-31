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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
                        <button onclick="editar({{$lugar['id']}})">
                            <i class="fa-solid fa-pen text-yellow-500 p-3 hover:bg-blue-200 rounded-3xl" ></i>
                        </button>
                        
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
    <script>
        function editar(id){
            var uid = id;
            console.log(uid);
            Swal.fire({
                title: 'Editar datos',
                showCloseButton: true,
                showConfirmButton: false,
                html: `
                <form action="{{route('editar.store')}}" method="POST" class="datos-form rounded-lg m-auto flex flex-col p-5 w-full">
                    @csrf
                    @if(session('mensaje'))
                        <p class="bg-green-500 text-white my-2 font-bold rounded-lg text-sm p-2 text-center">{{ session('mensaje') }}</p>
                    @endif
                    <div class="mt-5">
                        <textarea id="descripcion" name="descripcion" type="text" placeholder="Descripcion del lugar" class="focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 border p-3 w-full rounded-lg @error('descripcion') border-red-500 @enderror" value={{ old('descripcion') }}></textarea>
                        @error('descripcion')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mt-5">
                        <input id="descuento" name="descuento" type="number" placeholder="Descuento de pasaje" class="focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 border p-3 w-full rounded-lg @error('descuento') border-red-500 @enderror" value={{ old('descuento') }}>
                        @error('descuento')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                        @enderror
                    </div>
                    <input type="hidden" name="id" value="${uid}">
                    <div class="flex justify-around">
                        <input type="submit" value="Guardar Cambios" class="bg-blue-500 mt-10 p-3 rounded-lg font-bold cursor-pointer text-white w-1/2">
                    </div>
                </form>
                `,
            });
        }
    </script>
</body>
</html>