<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Panel Admin</title>
    <script src="https://kit.fontawesome.com/a22afade38.js" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
</head>
<body>
    <header class="w-full p-5 shadow-xl flex justify-between">
        <h1 class="font-bold text-2xl">
            Administrador
        </h1>
        <a href="{{ route('logout') }}" class="text-2xl mr-5"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
    </header>
</body>
</html>