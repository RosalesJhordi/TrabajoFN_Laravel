<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CityTours</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite('resources/css3/contenido.css')
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/a22afade38.js" crossorigin="anonymous"></script>
    <style>
    .anuncios{
        height: 80vh;
        background-image: url('{{ asset('img/Peru02.jpg') }}');
    }
</style>
</head>
<body>
    <header class="flex justify-between items-center p-2 shadow-2xl bg-white w-full z-50">
        <div class="text-2xl w-60 flex justify-around items-center text-black">
            <a href="{{route('inicio')}}">
                <i class="cursor-pointer fa-solid fa-house hover:scale-125 hover:text-blue-600"></i>
            </a>
            <a href="{{route('reservas')}}">
                <i class="cursor-pointer fa-solid fa-plane hover:-rotate-90 transition-transform ease-in-out hover:text-blue-600"></i>
            </a>
            <i class="cursor-pointer fa-solid fa-earth-africa hover:-rotate-180 transition-transform ease-in-out hover:text-blue-600"></i>
            <i class="cursor-pointer fa-solid fa-star hover:scale-125 hover:text-blue-600"></i>
            <i class="cursor-pointer fa-solid fa-clipboard-check hover:-rotate-45 transition-transform ease-in-out hover:text-blue-600"></i>
        </div>
        <div>
            @if ($user['email'] == "Rosales@gmail.com")
                <div class=" w-full h-10 flex justify-end items-end mt-2 pb-2">
                    <h1 class="mr-5 text-lg font-bold">Hola: {{ $user['name']}}</h1>
                    <a href="{{ route('logout') }}" class="text-2xl mr-5"><i class="fa-solid fa-arrow-right-from-bracket text-gray-500 hover:text-black"></i></a>
                </div>
                {{-- opciones de admin --}}
                <a href="{{ route('admin') }}">
                <div class="fixed bottom-0 right-0 m-5 bg-gray-200 w-1/5 h-1/4 cursor-pointer box-editar">
                    <div class=" w-full h-40 bg-pink-500 flex justify-center items-center">
                        <i class="fa-solid fa-plus text-5xl p-2 rounded-full w-16 h-16 text-center bg-white"></i>
                    </div>
                    <h3 class="font-bold ml-5 text-2xl p-1">Editar</h3>
                    <p class="ml-5 font-semibold p-1">Puedes editar pasajes, horario, etc</p>
                </div></a>
                {{-- usuario normal --}}
            @else
                <div class=" w-full h-10 flex justify-end items-end mt-2 pb-2">
                    <h1 class="mr-5 text-lg font-bold">Hola: {{ $user['name']}}</h1>
                    <img src="{{ asset('img/usuario.svg')}}" alt="Imagen usuario" class="w-8 mr-5 cursor-pointer" onclick="datos()"/>
                    <a href="{{ route('logout') }}" class="text-2xl mr-5"><i class="fa-solid fa-arrow-right-from-bracket text-gray-500 hover:text-black hover:translate-x-2 transition-transform ease-in-out"></i></a>
                </div> 
            @endif
        </div>
    </header>
        <div class="w-full bg-gray-100 h-auto">
            @yield('contenido')
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
                    <a href="" class="m-1 cursor-pointer text-2xl hover:text-black"><i class="fa-brands fa-facebook"></i></a>
                    <a href="" class="m-1 cursor-pointer text-2xl hover:text-black"><i class="fa-brands fa-twitter"></i></a>
                    <a href="" class="m-1 cursor-pointer text-2xl hover:text-black"><i class="fa-brands fa-instagram"></i></a>
                    <a href="" class="m-1 cursor-pointer text-2xl hover:text-black"><i class="fa-brands fa-tiktok"></i></a>
                    <a href="" class="m-1 cursor-pointer text-2xl hover:text-black"><i class="fa-brands fa-telegram"></i></a>
                </h1>
            </div>
            <div class=" h-32 flex items-center">
                <img src="{{asset('img/perusalen.png')}}" alt="perusalen" class="w-1/2 m-5">
            </div>
        </footer>
    <script>
        function datos(){
            Swal.fire({
                position: 'top-right',
                showCloseButton: true,
                html: `
                <div class="w-full m-auto h-96 flex flex-col justify-center mb-2">
                    <div class="w-full flex justify-center items-end">
                        <i class="fa-solid fa-user-pen relative left-40 text-4xl"></i>
                        <img src="{{ asset('img/usuario.svg')}}" alt="Imagen usuario" class="w-1/2 mr-5 cursor-pointer"/>
                    </div>
                    <div class="text-2xl text-black text-center mt-10">
                        <span class="mt-5 font-semibold text-4xl">
                            {{ $user["name"]}} {{ $user["apellidos"]}} <br>
                        </span >
                    </div>
                </div>
                `
            })
        }
        function asientos(){
            Swal.fire({
                title: 'Seleciona tu asiento',
                showCloseButton: true,
                html: `
                <div class="asientos">
                    <div class="w-full flex justify-center items-center">
                        <P class="p-2 m-5 w-10 h-10 text-center text-white font-bold cursor-pointer bg-green-500">1</P>
                        <P class="p-2 m-5 w-10 h-10 text-center text-white font-bold cursor-pointer bg-green-500">2</P>
                        <P class="p-2 m-5 w-10 h-10 text-center text-white font-bold cursor-pointer bg-green-500">3</P>
                        <P class="p-2 m-5 w-10 h-10 text-center text-white font-bold cursor-pointer bg-green-500">4</P> 
                    </div>
                    <div class="w-full flex justify-center items-center">
                        <P class="p-2 m-5 w-10 h-10 text-center text-white font-bold cursor-pointer bg-green-500">5</P>
                        <P class="p-2 m-5 w-10 h-10 text-center text-white font-bold cursor-pointer bg-green-500">6</P>
                        <P class="p-2 m-5 w-10 h-10 text-center text-white font-bold cursor-pointer bg-green-500">7</P>
                        <P class="p-2 m-5 w-10 h-10 text-center text-white font-bold cursor-pointer bg-green-500">8</P>
                    </div>
                    <div class="w-full flex justify-center items-center">
                        <P class="p-2 m-5 w-10 h-10 text-center text-white font-bold cursor-pointer bg-green-500">9</P>
                        <P class="p-2 m-5 w-10 h-10 text-center text-white font-bold cursor-pointer bg-green-500">10</P>
                        <P class="p-2 m-5 w-10 h-10 text-center text-white font-bold cursor-pointer bg-green-500">11</P>
                        <P class="p-2 m-5 w-10 h-10 text-center text-white font-bold cursor-pointer bg-green-500">12</P>
                    </div>
                    <div class="w-full flex justify-center items-center">
                        <P class="p-2 m-5 w-10 h-10 text-center text-white font-bold cursor-pointer bg-green-500">13</P>
                        <P class="p-2 m-5 w-10 h-10 text-center text-white font-bold cursor-pointer bg-green-500">14</P>
                        <P class="p-2 m-5 w-10 h-10 text-center text-white font-bold cursor-pointer bg-green-500">15</P>
                        <P class="p-2 m-5 w-10 h-10 text-center text-white font-bold cursor-pointer bg-green-500">16</P>
                    </div>
                    <div class="w-full flex justify-center items-center">
                        <P class="p-2 m-5 w-10 h-10 text-center text-white font-bold cursor-pointer bg-green-500">17</P>
                        <P class="p-2 m-5 w-10 h-10 text-center text-white font-bold cursor-pointer bg-green-500">18</P>
                        <P class="p-2 m-5 w-10 h-10 text-center text-white font-bold cursor-pointer bg-green-500">19</P>
                        <P class="p-2 m-5 w-10 h-10 text-center text-white font-bold cursor-pointer bg-green-500">20</P>
                    </div>
                </div>
                `,
                showCancelButton: true,
                cancelButtonText: 'Cancelar'
                });

                // Puedes agregar eventos o manipular elementos después de que se muestre el cuadro de diálogo
                const asientosNumerados = document.querySelectorAll('.asientos .bg-green-500');
                asientosNumerados.forEach((asiento, index) => {
                    asiento.addEventListener('click', function () {
                        // Acción cuando se hace clic en un asiento
                        Swal.fire(`Has seleccionado el asiento ${index + 1}`, '', 'success');
                    });
            });
        }
    </script>
</body>
</html>