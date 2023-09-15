<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(document).ready(function() {
    $('.nav-link').click(function(e) {
        e.preventDefault();
        var target = $(this).data('target');
        $('html, body').animate({
            scrollTop: $(target).offset().top
        }, 500);
    });
});
</script>
</head>
<body action="{{route('index')}}" method="post">
    <header class="header">

        <div class="menu">
            
            <a href="#" class="logo">Four J's</a>

            <input type="checkbox" id="menu">
            <label for="menu"><img src="img/menu.png" class="menu-icono" alt=""></label>
            <nav class="navbar">
                <ul>
                    <li><a style="color: white" href="#" >Inicio</a></li>
                    <li><a style="color: white" href="#lista-1" >Productos</a></li>
                    <li><a style="color: white" href="#" class="nav-link" data-target=".footer-distributed">Contactos</a></li>
                    <li><a style="color: white" href="{{route('rventa')}}">Vender</a></li>
                    {{-- <li>
                    <input type="text" id="search-input" class="search-input" placeholder="Buscar producto">
                    <button id="search-button" class="search-button">Buscar</button>
                    </li>     --}}
                </ul>
            </nav>
        </div>

        <div class="header-content container">
            <h2></h2>
            <div class="swiper mySwiper-1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="header-info">
                            <div class="header-txt">
                                    <h1 style="color: #4b4b4b">Audifonos premium - Version 1</h1>
                                    <div class="prices3">
                                        <p style="color: #4b4b4b" class="price-1">S/.199</p>
                                    </div>
                                    <a href="{{ route('audifonos')}}" class="btn-1" style="color: white">Informacion</a>
                            </div>
                            <div class="header-img">
                                <img src="img/bg1.png" alt="">
                            </div>
                        </div>
                        
                    </div>
                    <div class="swiper-slide">
                        <div class="header-info">
                            <div class="header-txt">
                                    <h1 style="color: #4b4b4b">Samsung Galaxy k40</h1>
                                    <div class="prices3">
                                        <p style="color: #4b4b4b" class="price-1">S/.800</p>
                                    </div>
                                    <a href="{{ route('telefono') }}" class="btn-1" style="color: white">Informacion</a>
                            </div>
                            <div class="header-img">
                                <img src="img/celular-removebg-preview.png" alt="">
                            </div>
                        </div>
                        
                    </div>
                    <div class="swiper-slide">
                        <div class="header-info">
                            <div class="header-txt">
                                    <h1 style="color: #4b4b4b">Larborghini Murcielago - Amarillo</h1>
                                    <div class="prices3">
                                        <p style="color: #4b4b4b" class="price-1">S/.2.000.000</p>
                                    </div>
                                    <a href="{{ route('carro') }}" class="btn-1" style="color: white">Informacion</a>
                            </div>
                            <div class="header-img">
                                <img src="img/auto3.png" alt="">
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div> 
    </header>

    <hr>
    
    
    {{-- <h2 style="color: #feffff">Detalles de Venta</h2><br>
    <table class="container">
        <thead>
            <tr>
                <th>Imagen</th>
                <th>Nombre del Producto</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($detallesVenta as $detalle)
        <tr>
            <td>
                @if ($detalle->foto)
                    <img class="custom-image" src="{{ asset('storage/' . $detalle->foto) }}" alt="Imagen del producto">
                @else
                    Sin imagen
                @endif
            </td>
            <td>{{ $detalle->nombre_producto }}</td>
            <td>{{ $detalle->precio }}</td>
            <td>
                <a href="{{ route('detalleventa.show', $detalle->id) }}" style="color: #feffff">Ver más</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table> --}}
    
    <section class="promos container" id="lista-1">
        <h2 style="color: #4b4b4b">Computadora</h2>
        <div class="categories">
            @isset($detallesVenta)
                @foreach ($detallesVenta as $detalleVenta)
                    @if($detalleVenta->id_categoria == 1)
                        <div class="categorie">
                            <div class="categorie-1">
                                <img class="custom-image" src="{{ asset('storage/' . $detalleVenta->foto) }}" alt="Imagen del producto">
                                <div class="prices">
                                    <h3 style="color: #4b4b4b">{{ $detalleVenta->nombre_producto }}</h3>
                                    <p style="color: #4b4b4b">calidad premium</p>
                                    <p class="price-1" style="color: #4b4b4b">{{ $detalleVenta->precio }}</p>
                                    <a href="{{ route('detalleventa.show', $detalleVenta->id) }}" class="agregar-carrito btn-3" data-id="1">Detalles</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endisset
        </div>
    </section>

    <hr>

    <section class="promos container" id="lista-1">
        <h2 style="color: #4b4b4b">Vehiculos</h2>
        <div class="categories">
            @isset($detallesVenta)
                @foreach ($detallesVenta as $detalleVenta)
                    @if($detalleVenta->id_categoria == 2)
                        <div class="categorie">
                            <div class="categorie-1">
                                <img class="custom-image" src="{{ asset('storage/' . $detalleVenta->foto) }}" alt="Imagen del producto">
                                <div class="prices">
                                    <h3 style="color: #4b4b4b">{{ $detalleVenta->nombre_producto }}</h3>
                                    <p style="color: #4b4b4b">calidad premium</p>
                                    <p class="price" style="color: #4b4b4b">{{ $detalleVenta->precio }}</p>
                                    <a href="{{ route('detalleventa.show', $detalleVenta->id) }}" class="agregar-carrito btn-3" data-id="1">Detalles</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endisset
        </div>
    </section>

    <hr>

    <section class="promos container" id="lista-1">
        <h2 style="color: #4b4b4b">Muebles</h2>
        <div class="categories">
            @isset($detallesVenta)
                @foreach ($detallesVenta as $detalleVenta)
                    @if($detalleVenta->id_categoria == 3)
                        <div class="categorie">
                            <div class="categorie-1">
                                <img class="custom-image" src="{{ asset('storage/' . $detalleVenta->foto) }}" alt="Imagen del producto">
                                <div class="prices">
                                    <h3 style="color: #4b4b4b">{{ $detalleVenta->nombre_producto }}</h3>
                                    <p style="color: #4b4b4b">calidad premium</p>
                                    <p class="price-1" style="color: #4b4b4b">{{ $detalleVenta->precio }}</p>
                                    <a href="{{ route('detalleventa.show', $detalleVenta->id) }}" class="agregar-carrito btn-3" data-id="1">Detalles</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endisset
        </div>
    </section>

    <hr>

    <section class="promos container" id="lista-1">
        <h2 style="color: #4b4b4b">Moda</h2>
        <div class="categories">
            @isset($detallesVenta)
                @foreach ($detallesVenta as $detalleVenta)
                    @if($detalleVenta->id_categoria == 4)
                        <div class="categorie">
                            <div class="categorie-1">
                                <img class="custom-image" src="{{ asset('storage/' . $detalleVenta->foto) }}" alt="Imagen del producto">
                                <div class="prices">
                                    <h3 style="color: black">{{ $detalleVenta->nombre_producto }}</h3>
                                    <p style="color: black">calidad premium</p>
                                    <p class="price-1" style="color: black">{{ $detalleVenta->precio }}</p>
                                    <a href="{{ route('detalleventa.show', $detalleVenta->id) }}" class="agregar-carrito btn-3" data-id="1">Detalles</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endisset
        </div>
    </section>

    <footer class="footer-distributed">

        <div class="footer-right">
        <p style="color: white">¿Tienes alguna duda?</p><br>
        <p style="color: white">(+51) 928 - 088 - 145</p>
        <p style="color: white">(+51) 978 - 257 - 927</p>
        </div>

        <div class="footer-right">
            <p style="color: white">Horario de atencion a llamadas</p><br>
            <p style="color: white">L- M - MI- J - V</p>
            <p style="color: white">9:00 AM - 6:00 PM</p>
        </div>

        <div class="footer-right">
            <p style="color: white">Nos ubicamos:</p><br>
            <p style="color: white">Independencia  Av.Baltazar Grados</p>
            <p style="color: white"></p>
            </div>
  
        <div class="footer-left">
  
          <p class="footer-links">
            <a class="link-1" href="#">Dedicacion</a>
  
            <a href="#">Compromiso</a>
  
            <a href="#">Seguridad</a>
  
            <a href="#">Esfuerzo</a>
  
          </p>
  
          <p>FourJ's &copy; 2023 <br>
            Trabajamos mejor bajo presion</p>
        </div>
  
      </footer>

    {{-- <footer class="footer">


        <div class="link1">
            <h1 style="color: white">Nos ubicamos en:</h1><br>

            <ul>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3903.6806160409415!2d-77.05106002566195!3d-11.927300839686533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105d1119008f46f%3A0xc75050f561b9b31e!2sParque%20Sinchi%20Roca!5e0!3m2!1ses!2spe!4v1685550233012!5m2!1ses!2spe" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </ul>
        </div>

        <div class="link">
            <h3 style="color: #7270EC">&nbsp;&nbsp;</h3>

        </div> 

    <div class="misiones">
        <div class="link">
            <h1 style="color: white">Mision</h1><br>
                <p style="color: white">
                    <h4 style="color: white">
                        Nuestro sistema también se encargará de hacer que nuestros clientes vendan sus productos los cuales están separados por categoría computadoras, modas, muebles, vehículos y brindándole y buena seguridad.
                    </h4>
                </p><br>
        </div>

        <div class="link">
            <h3 style="color:#7270EC">&nbsp;&nbsp;</h3>
        </div> 

        <div class="link">
            <h1 style="color: white">Vision</h1><br>
                <p style="color: white">
                    <h4 style="color: white">
                    LLegar a mas clientes para ser una pagina conociday de su 
                    preferencia y seguridad para que pueda navegar con toda 
                    comodidad y tranquilidad 
                    </h4>
                </p>
        </div> 
    </div>

        {{-- <div class="link">
            <h3 style="color:#7270EC">&nbsp;&nbsp;</h3>
        </div> 

    </footer> --}}

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="../js/script.js"></script>
    <script>
        $(function() {
        var productos = [];
    
        @isset($detallesVenta)
            @foreach ($detallesVenta as $detalleVenta)
            productos.push({
                label: "{{ $detalleVenta->nombre_producto }}",
                value: "{{ $detalleVenta->nombre_producto }}"
            });
            @endforeach
        @endisset
    
        $('#search-input').autocomplete({
            source: function(request, response) {
            var term = request.term.toLowerCase();
            var filtered = productos.filter(function(producto) {
                return producto.label.toLowerCase().indexOf(term) >= 0;
            });
            response(filtered);
            },
            select: function(event, ui) {
            $('#search-input').val(ui.item.value);
            return false;
            }
        });
    
        $('#search-input').on('keydown', function(event) {
            if (event.keyCode === 13) {
            event.preventDefault();
            return false;
            }
        });
    
        $('#search-button').on('click', function() {
        var selectedProduct = $('#search-input').val();
        scrollToProduct(selectedProduct);
        });
    
    function scrollToProduct(productName) {
        var targetElement = $("h3:contains('" + productName + "')");
        if (targetElement.length > 0) {
        var scrollTop = targetElement.offset().top - ($(window).height() / 2);
        $('html, body').animate({
            scrollTop: scrollTop
        }, 500);
        }
    }
    });
    </script>
        
</body>
</html>
