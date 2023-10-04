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
    <div class="aside">
        <div class="tt">
            <p class="font-bold text-5xl text-center mt-10" id="alias">ct</p>
            <span class="text font-bold text-4xl text-center mt-10" id="titulo">CityTours</span>
        </div>
        <div class="item active">
            <div class="text-2xl w-full flex justify-center p-4 mt-5 conte">
                <i class="fa-solid fa-house"></i>
                <span class="text text-center">Inicio</span>
            </div>
        </div>
        <div class="item">
            <div class="text-2xl w-full flex justify-center p-4 mt-5 conte">
                <i class="fa-solid fa-plane"></i>
                <span class="text text-center">Viajes</span>
            </div>
        </div>
        <div class="item">
            <div class="text-2xl w-full flex justify-center p-4 mt-5 conte">
                <i class="fa-solid fa-earth-africa"></i>
                <span class="text text-center">Lugares</span>
            </div>
        </div>
        <div class="item">
            <div class="text-2xl w-full flex justify-center p-4 mt-5 conte">
                <i class="fa-solid fa-star"></i>
                <span class="text text-center">Recomendado</span>
            </div>
        </div>
        <div class="item">
            <div class="text-2xl w-full flex justify-center p-4 mt-5 conte">
                <i class="fa-solid fa-clipboard-check"></i>
                <span class="text text-center">Mi Boleta</span>
            </div>
        </div>
    </div>
    <div class="full-container flex flex-col">
        @yield('container')
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const navItems = document.querySelectorAll('.item');
    
            navItems.forEach(item => {
                item.addEventListener("click", function () {
                    navItems.forEach(item => item.classList.remove("active"));
                    this.classList.add("active");
                });
            });
        });
    </script>    
</body>
</html>
