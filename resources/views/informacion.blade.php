
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>CityTours - {{$lugar['nombre']}}</title>
        @vite('resources/css/app.css')
        @vite('resources/css3/informacion.css')
        <script src="https://kit.fontawesome.com/a22afade38.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body>
        <header class="w-full shadow-xl text-4xl font-semibold flex justify-center items-center p-3">
            {{$lugar['nombre']}} - {{$lugar['ubicacion']}}
        </header>
        <div class="informacion flex justify-center items-center">
            <div class="lugar flex">
                <img src="{{ asset('Uploads') . '/' . $lugar['imagen'] }}" alt="Imagen del lugar" class="w-1/2 h-full rounded-xl shadow-lg">
                <div class="datos flex flex-col justify-center items-center">
                    <h1 class="text-center text-3xl font-bold">{{$lugar['descripcion']}}</h1>
                    <div class="actividades">
                        <h1 class="text-xl">actividades:</h1>
                        <p class="text-xl mt-5 font-semibold"><i class="fa-solid fa-location-dot text-red-600 text-3xl"></i> Caminata por la calles de {{$lugar['nombre']}}</p>
                        <p class="text-xl mt-2 font-semibold"><i class="fa-solid fa-location-dot text-red-600 text-3xl"></i> Probar comidas de {{$lugar['nombre']}}</p>
                        <p class="text-xl mt-2 font-semibold"><i class="fa-solid fa-location-dot text-red-600 text-3xl"></i> Visitar los centros arqueologicos de {{$lugar['nombre']}}</p>
                        <p class="text-xl mt-2 font-semibold"><i class="fa-solid fa-location-dot text-red-600 text-3xl"></i> Conocer los costumbre de {{$lugar['nombre']}}</p>
                        <p class="text-xl mt-2 font-semibold"><i class="fa-solid fa-location-dot text-red-600 text-3xl"></i> Paseo por la Reserva Nacional de {{$lugar['nombre']}}</p>
                    </div>
                    <div class="qr-container flex justify-between">
                        <div class="p-3 border-2 border-slate-900 rounded-xl">
                            {!! QrCode::size(300)
                                ->eye('circle')
                                ->color(0, 0, 0)
                                ->style('round')
                                ->backgroundColor(255, 255, 255)
                                ->generate(route('reservar', ['nombre' => $lugar['nombre']])) 
                            !!}
                        </div>
                        <div class="info-qr text-start font-bold text-3xl flex flex-col justify-center">
                            <span class="text-5xl text-red-600">Reservar ya !</span> 
                            <h1 class="mt-5">
                                Tours por todo {{$lugar['nombre']}}
                            </h1>
                            <h2 class="flex mt-5 items-center">
                                <i class="fa-regular fa-clock text-2xl"></i>
                                <p class="text-xl m-3">8 dias de duracion</p>
                            </h2>
                        </div>
                    </div>
                    <form action="{{route('Boletos.store',['user' => $user['id'],'lugar' => $lugar['id']])}}" method="POST" class="w-full flex justify-center">
                        @csrf
                       <input type="submit" value="adquirir paquete" class="p-3 bg-blue-700 text-white rounded-lg cursor-pointer hover:bg-blue-600 m-auto">
                    </form>
                    
                </div>
            </div>
        </div>
    </body>
    </html>