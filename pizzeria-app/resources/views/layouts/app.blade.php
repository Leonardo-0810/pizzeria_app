<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


    @vite(['resources/css/app.css', 'resources/js/app.js'])

    
</head>
<body class="font-sans antialiased">
    <div class="min-vh-100 bg-light">
        @include('layouts.navigation')

      
        @isset($header)
            <header class="bg-white shadow-sm mb-4">
                <div class="container py-4">
                    {{ $header }}
                </div>
            </header>
        @endisset

       
        <main class="container">
        @yield('content')
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
</body>
</html>
