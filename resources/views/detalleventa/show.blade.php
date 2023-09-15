<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/RCompra.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <form>
        <h2 style="color: #4b4b4b">Detalles de Venta</h2>
        <span class="line" ></span>
        <ul>
            <div class="grid">
            <div>
            <li><h3 style="color: #4b4b4b"><strong>Nombre del Vendedor:</strong> {{ $detalle->nombre_vendedor }}</h3></li>
            <li><h3 style="color: #4b4b4b"><strong>Producto:</strong>{{ $detalle->nombre_producto }}</h3></li>
            <li><h3 style="color: #4b4b4b"><strong>Cantidad de Productos en venta:</strong> {{ $detalle->cantidad }}</h3></li>
            <li><h3 style="color: #4b4b4b"><strong>Dirección:</strong> {{ $detalle->direccion }}</h3></li>
            <li><h3 style="color: #4b4b4b"><strong>Fecha de publicacion:</strong> {{ $detalle->fecha }}</h3></li>
            </div>
              @if ($detalle->foto)
            <img class="custom-image" src="{{ asset('storage/' . $detalle->foto) }}" alt="Imagen del producto">
            @else
                <p>No hay imagen disponible</p>
            @endif
            </div>

            <div class="grid1">
            <li><h2 style="color: green"><strong><i class="fab fa-whatsapp fa-sm"> </i>Teléfono del vendedor:</strong> {{ $detalle->telefono }}</h2></li>
            <li><h2 style="color: #4b4b4b"><strong>Precio: S/.</strong> {{ $detalle->precio }}</h2></li>
            </div>
            
            <div class="map-responsive">
            {{-- <li><h3><strong>Imagen:</strong> {{ $detalle->imagen }}</h3></li> --}}
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3903.6806160409415!2d-77.05106002566195!3d-11.927300839686533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105d1119008f46f%3A0xc75050f561b9b31e!2sParque%20Sinchi%20Roca!5e0!3m2!1ses!2spe!4v1685550233012!5m2!1ses!2spe" width="800" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </ul>

        {{-- @if ($detalle->foto)
            <img class="custom-image" src="{{ asset('storage/' . $detalle->foto) }}" alt="Imagen del producto">
        @else
            <p>No hay imagen disponible</p>
        @endif --}}
        <br><br>
        <input type="submit" class="boton" value="Volver" formaction="{{ url('home') }}">
    </form>
</body>
</html>