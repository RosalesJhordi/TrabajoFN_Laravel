@extends('layouts.Dashboard')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@vite('resources/css3/contenido.css')

<style>
    .anuncios{
        background-image: url('{{ asset('img/Peru02.jpg') }}');
    }
</style>
@section('container')

    @if (auth()->user()->email == "Rosales@gmail.com")
        <div class=" w-full h-10 flex justify-end items-end mt-2 shadow-md pb-2">
            <input type="checkbox" id="modoOscuro" onclick="document.documentElement.classList.toggle('modoOscuro')" class="mr-5 mb-1 w-4 h-4 cursor-pointer">
            <h1 class="mr-5 text-lg font-bold">Hola: {{ $user->name}}</h1>
            <a href="{{ route('logout') }}" class="text-2xl mr-5"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
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
    @elseif (auth()->user())
        <div class=" w-full h-10 flex justify-end items-end mt-2 shadow-md pb-2">
            <h1 class="mr-5 text-lg font-bold">Hola: {{ $user->name}}</h1>
            <img src="{{ asset('img/usuario.svg')}}" alt="Imagen usuario" class="w-8 mr-5 cursor-pointer" onclick="datos()"/>

            <a href="{{ route('logout') }}" class="text-2xl mr-5"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
        </div> 
    @endif
    
        <div class="w-full bg-gray-100 h-auto">
            <div class="m-auto anuncios">
                <div class="shape flex justify-center items-center flex-col text-center text-6xl">
                    <h1 class="font-bold text-white mt-20">Viaja desde <br> <span class="text-green-400">s/ 200</span></h1>
                    <img src="{{ asset('img/image.png')}}" class="w-60">
                </div>
            </div>
            <h1 class="text-center text-4xl m-5 first-letter text-black font-semibold ">Elige tu siguiente ruta</h1>
            <div class="flex flex-wrap justify-between cursor-pointer lugares">
                @foreach ($destinos as $lugar)
                <section class="sections">
                    <div class="text-center">
                        <h1 class="absolute font-bold text-xl bg-white p-2 bord precio text-start">
                            <span class="text-green-500">
                                Ahora: S/{{$lugar->costo - $lugar->descuento}}
                            </span><br> 
                            <span class="line-through text-red-600 text-lg">
                               Antes: S/{{$lugar->costo}} 
                            </span>                           
                            
                        </h1>
                       <img src="{{ asset('Uploads') . '/' . $lugar->imagen }}" alt="Imagen del lugar"> 
                    </div>
                    <div class="informacion flex justify-between items-center m-5">
                        <h1>
                            <span class="font-bold text-xl">
                                {{$lugar->nombre}} - {{$lugar->ubicacion}}
                            </span>
                            <br>
                            <span class="font-semibold">
                                {{$lugar->costumbres}}
                            </span>
                        </h1>
                        <div class="text-2xl">
                            <i class="fa-solid fa-heart p-1 text-red-300"></i>
                            <i class="fa-solid fa-bookmark p-1 text-gray-400"></i>
                            <i class="fa-solid fa-ticket ml-3 p-3 bg-orange-500 text-white"></i>
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
    <script>
        function datos(){
            Swal.fire({
                position: 'top-end',
                showCloseButton: true,
                title: '{{ $user->name }}',
                imageUrl: '{{ asset("img/usuario.svg")}}',
                imageWidth: 400,
                imageHeight: 200,
                imageAlt: 'Custom image',
                confirmButtonText: 'Editar datos'
            })
        }
        function asientos(){
            Swal.fire({
                title: 'Seleciona tu asiento',
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
                confirmButtonText: 'Confirmar',
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
@endsection