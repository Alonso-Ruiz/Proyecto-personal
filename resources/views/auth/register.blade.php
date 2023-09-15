<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/registro.css"> 
    <title>Document</title>
</head>
<body>
    <form  action="{{route('register')}}" method="POST">
        @csrf
        <h2>Registro</h2>
        <span class="line" ></span>
        <p>Coloca tus Datos</p>

        <div class="input-group">

            <label for="name">{{ __('Nombre') }}</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror


            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>   
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                </span>
            @enderror


            <label for="password">{{ __('Contraseña') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror


            <label for="password-confirm">{{ __('Confirmar Contraseña') }}</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">


            <input class="btn" type="submit" value="{{ __('Registrarse') }}">

            <div class="form-txt">
                Ya tienes cuenta?<a href="{{route('login')}}">Iniciar Sesion</a>
            </div>

        </div>
    </form>
</body>
</html>