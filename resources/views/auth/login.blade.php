<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css"> 
    <title>Document</title>
</head>
<body>
    <form  action="{{route('login')}}" method="post">
        @csrf
        <h2>Login</h2>
        <span class="line" ></span>
        <p>Coloca tu email</p>

        <div class="input-group">

            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Email" id="email">

            <label for="contraseña">Contaseña</label>
            <input type="password" name="password" id="contraseña" placeholder="Contraseña">

            <input class="btn" type="submit" value="Enviar" href="{{route('index')}}">

            <div class="form-txt">
                No tienes cuenta?<a href="{{route('register')}}">Registrarse</a>
            </div>

        </div>
    </form>
</body>
</html>