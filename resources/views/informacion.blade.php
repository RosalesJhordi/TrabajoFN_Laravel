@foreach ($lugar as $lugares)
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>CityTours - {{$lugares->nombre}}</title>
        @vite('resources/css/app.css')
        @vite('resources/css3/informacion.css')
        <script src="https://kit.fontawesome.com/a22afade38.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header class="w-full shadow-xl text-4xl font-semibold flex justify-center items-center p-2">
            {{$lugares->nombre}} - {{$lugares->ubicacion}}
        </header>
        <div class="informacion flex justify-center items-center">
            <div class="lugar flex">
                <img src="{{ asset('Uploads') . '/' . $lugares->imagen }}" alt="Imagen del lugar" class="w-1/2 h-full">
                <div class="datos flex flex-col justify-center items-center">
                    <h1 class="text-center text-3xl font-bold">{{$lugares->costumbres}}</h1>
                    <div class="actividades">
                        <h1 class="text-xl">actividades:</h1>
                        <p class="text-xl mt-5 font-semibold"><i class="fa-solid fa-location-dot text-red-600 text-3xl"></i> Caminata por la calles de {{$lugares->nombre}}</p>
                        <p class="text-xl mt-2 font-semibold"><i class="fa-solid fa-location-dot text-red-600 text-3xl"></i> Probar comidas de {{$lugares->nombre}}</p>
                        <p class="text-xl mt-2 font-semibold"><i class="fa-solid fa-location-dot text-red-600 text-3xl"></i> Visitar los centros arqueologicos de {{$lugares->nombre}}</p>
                        <p class="text-xl mt-2 font-semibold"><i class="fa-solid fa-location-dot text-red-600 text-3xl"></i> Conocer los costumbre de {{$lugares->nombre}}</p>
                        <p class="text-xl mt-2 font-semibold"><i class="fa-solid fa-location-dot text-red-600 text-3xl"></i> Paseo por la Reserva Nacional de {{$lugares->nombre}}</p>
                    </div>
                    <div class="qr-container flex justify-between">
                        {!! QrCode::size(300)
                            ->color(0, 0, 0)
                            ->style('round')
                            ->backgroundColor(255, 255, 255)
                            ->generate(route('reservar', ['nombre' => $lugares->nombre])) 
                        !!}
                        
                        <div class="info-qr text-start font-bold text-3xl flex flex-col justify-center">
                            Reservar ya !
                            <h1 class="mt-5">
                                Tours por todo {{$lugares->nombre}}
                            </h1>
                            <h2 class="flex mt-5 items-center">
                                <i class="fa-regular fa-clock text-2xl"></i>
                                <p class="text-xl m-3">8 dias de duracion</p>
                            </h2>
                        </div>
                    </div>
                    <button class="p-3 bg-blue-700 text-white rounded-lg cursor-pointer hover:bg-blue-600 m-auto">
                        adquirir paquete
                    </button>
                </div>
            </div>
        </div>
    </body>
    </html>
@endforeach