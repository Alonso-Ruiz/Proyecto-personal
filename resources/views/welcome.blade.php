<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/welcome.css">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> 
    </head>
    <body class="antialiased">
        <div class=" navbar relative sm:flex sm:justify-center sm:items-center min-h-screen bg-center selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-black-600 hover:text-black-900 dark:text-black-400 dark:hover:text-black focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" style="color: white">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-black-600 hover:text-black-900 dark:text-black-400 dark:hover:text-black focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" style="color: white">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-black-600 hover:text-black-900 dark:text-black-400 dark:hover:text-black focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" style="color: white">Registrate</a>
                        @endif
                    @endauth
                </div>
            @endif 
        </div>
    <div class="palabras">
        <h1 style="font-family:Arial, Helvetica, sans-serif; color:#4b4b4b">Empresa de Ventas</h1><br>
         <div class="empresa">
            <img src="img/empresafondo1.png" alt="">
        </div>
        <h2 style="font-family:Arial, Helvetica, sans-serif; color:#4b4b4b">Four'Js</h2>
        <h4 style="font-family:Arial, Helvetica, sans-serif; color:#4b4b4b">Tienda Online para Compra y Venta de Productos</h4>
    </div>
    
     {{-- <div class="image">
        <img class="large-image" src="img/welcome-pro.png" alt="Imagen grande">
    </div>  --}}
    <footer>
        <div class="footer">
          <div class="footer-content">
            <h2 style="font-family: Impact, sans-serif; color:#292828">Descuentos las 24 horas</h2>
            <h5 style="font-family: Georgia, serif; color:#292828">Registrate y aprovecha de todas las ventajas 🥳</h5>
          </div>
        </div>
    </footer>
    </body>
</html>