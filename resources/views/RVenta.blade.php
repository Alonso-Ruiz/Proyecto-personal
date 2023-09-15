<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/RVenta.css">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('rventa.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <h2 style="color: #4b4b4b">Realice su venta</h2>
        <span class="line" ></span>
        <p>Coloca los datos</p>

        <div class="input-group">
            
            <label for="nombre_producto">Nombre del Producto:</label>
            <input type="text" id="nombre_producto" name="nombre_producto">
            
            <label for="imagen">Suba una imagen:</label>
            <input type="file" id="foto" name="foto">
            <img id="preview" src="#" alt="Vista previa de la imagen" style="display: none; width: 356px; height: 200px;">
            
            <br>

            <div class="grid">
            <div>
            <label for="cantidad">Cantidad:</label>
            <input type="number" name="cantidad" id="cantidad">
            </div>

            <div>
            <label for="precio">Precio:</label>
            <input type="number" name="precio" id="precio" placeholder="S/.">
            </div>
            </div>

            <label for="vendedor">Nombre del Vendedor:</label>
            <input type="text" id="nombre_vendedor" name="nombre_vendedor">

            <div class="grid1">
            <div>
            <label for="telefono">Telefono:</label>
            <input type="tel" id="telefono" name="telefono">
            </div>
            
            <div>
            <label for="fecha">Fecha:</label>
            <input class="control" type="date" id="fecha" name="fecha" required >
            </div>

            <select id="id_categoria" name="id_categoria" required>
                <option value="">Categoria</option>
                @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id_categoria }}">{{ $categoria->nombre_categ }}</option>
                @endforeach
            </select>

            </div>
            <label for="direccion">Ingresa tu dirección:</label>
            <input type="text" id="direccion" name="direccion">
       

            <br>

            <input class="btn" type="submit" value="Publicar Venta">

        </div>
        <script>
            document.getElementById('foto').addEventListener('change', function(event) {
                var input = event.target;
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById('preview').setAttribute('src', e.target.result);
                        document.getElementById('preview').style.display = 'block';
                    };
                    reader.readAsDataURL(input.files[0]);
                } else {
                    document.getElementById('preview').setAttribute('src', '#');
                    document.getElementById('preview').style.display = 'none';
                }
            });
        </script>
    </form>
</body>
</html>