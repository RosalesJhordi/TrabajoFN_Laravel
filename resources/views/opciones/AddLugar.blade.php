<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AgregarLugar</title>
    <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <form action="{{route('agregar.store')}}" method="POST">
        @csrf
        <input type="submit" value="subir">
    </form>
</body>
</html>