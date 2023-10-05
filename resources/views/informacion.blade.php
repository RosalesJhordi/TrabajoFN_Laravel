@foreach ($lugar as $lugares)
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>CityTours - {{$lugares->nombre}}</title>
    </head>
    <body>
        <header class="w-full text-center ">
            {{$lugares->nombre}}
        </header>
        {{-- <div class="w-full h-10">
            <img src="{{ asset('Uploads') . '/' . $lugares->imagen }}" alt="Imagen del lugar" class=" h-">
        </div> --}}
    </body>
    </html>
@endforeach