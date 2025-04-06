<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PizzeríaApp</title>

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <style>
        body {
            background-color: #fffbea;
            font-family: 'Instrument Sans', sans-serif;
        }
        .pizza-title {
            color: #dc3545;
        }
        .pizza-btn {
            font-weight: 600;
        }
    </style>
</head>
<body class="d-flex flex-column justify-content-center align-items-center min-vh-100 text-center">

  
    <div class="mb-4">
        <img src="https://cdn-icons-png.flaticon.com/512/3595/3595455.png" alt="Pizza Logo" class="mb-3" style="width: 100px;">
        <h1 class="pizza-title fw-bold display-5">¡Bienvenido a PizzeríaApp! 🍕</h1>
        <p class="text-muted fs-5">Gestiona tus pedidos, ingredientes, empleados y más desde un solo lugar.</p>
    </div>

 
    @if (Route::has('login'))
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            @auth
                <a href="{{ url('/dashboard') }}" class="btn btn-danger pizza-btn">
                    Ir al Dashboard 🍕
                </a>
            @else
                <a href="{{ route('login') }}" class="btn btn-warning text-dark pizza-btn">
                    Iniciar sesión 🍕
                </a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-success pizza-btn">
                        Registrarse 🧀
                    </a>
                @endif
            @endauth
        </div>
    @endif
</body>
</html>
