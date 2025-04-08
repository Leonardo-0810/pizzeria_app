<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PizzeríaApp') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-900 antialiased bg-light">
    <div class="min-vh-100 d-flex flex-column justify-content-center align-items-center pt-5">
        <!-- Logo personalizado -->
        <div class="text-center mb-3">
            <img src="https://cdn-icons-png.flaticon.com/512/3132/3132693.png" alt="Pizza Logo" width="80">
        </div>

        <div class="bg-white p-4 rounded-4 shadow w-100" style="max-width: 450px;">
            {{ $slot }}
        </div>
    </div>
</body>
</html>
