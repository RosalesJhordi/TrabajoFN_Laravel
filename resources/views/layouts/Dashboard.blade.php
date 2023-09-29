<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CityTours</title>
    @vite('resources/css/app.css')
    @vite('resources/css/dash.css')
    <script src="https://kit.fontawesome.com/a22afade38.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="aside2">
        <h1 class="text-2xl text-center text-white font-bold pt-5 pb-5">CT</h1>
        <ul>
            <li class="active">
                <i class="fa-solid fa-house"></i>
            </li>
            <li class="text-2xl">
                <i class="fa-solid fa-plane"></i>
            </li>
            <li class="text-2xl">
                <i class="fa-solid fa-earth-africa"></i>
            </li>
            <li class="text-2xl">
                <i class="fa-solid fa-star"></i>
            </li>
            <li class="text-2xl">
                <i class="fa-solid fa-clipboard-check"></i>
            </li>
            <li class="menu" onclick="mostrar()">
                <i class="fa-solid fa-bars"></i>
            </li>
        </ul>
    </div>
    <div class="aside bg-blue-500 w-10 h-full">
        <i class="fa-solid fa-xmark" onclick="ocultar()"></i>
        <h1 class="text-3xl text-center text-white font-bold pt-5 pb-5">CityTours</h1>
        <ul>
            <li class="active" id="item1">
                <i class="fa-solid fa-house"></i>
                <span>Inicio</span>
            </li>
            <li class="text-2xl font-semibold text-white" id="item1">
                <i class="fa-solid fa-plane"></i>
                Viajes
            </li>
            <li class="text-2xl font-semibold text-white" id="item1">
                <i class="fa-solid fa-earth-africa"></i>
                Lugares
            </li>
            <li class="text-2xl font-semibold text-white" id="item1">
                <i class="fa-solid fa-star"></i>
                Recomendado
            </li>
            <li class="text-2xl font-semibold text-white" id="item1">
                <i class="fa-solid fa-clipboard-check"></i>
                Mi Boleta
            </li>
        </ul>
    </div>
    <div class="full-container flex flex-col">
        @yield('container')
    </div>
    
    <script>
        const aside = document.querySelector('.aside');
        const aside2 = document.querySelector('.aside2');
        document.addEventListener("DOMContentLoaded", function () {
            const navItems = document.querySelectorAll("ul li");
            navItems.forEach(item => {
                item.addEventListener("click", function () {
                    navItems.forEach(item => item.classList.remove("active"));
                    this.classList.add("active");
                });
            });
        });
    </script>
    
    <script>
        function mostrar() {
            const aside = document.querySelector('.aside');
            const aside2 = document.querySelector('.aside2');
            
            aside2.style.display = 'none';
            aside.style.display = 'block';
        }
        function ocultar() {
            const aside = document.querySelector('.aside');
            const aside2 = document.querySelector('.aside2');
            
            aside.style.display = 'none';
            aside2.style.display = 'block';
        }
    </script>
</body>
</html>
