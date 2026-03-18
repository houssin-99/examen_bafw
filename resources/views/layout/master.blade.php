<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Examen BAFW - @yield('title')</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        nav { margin-bottom: 20px; padding: 10px; background: #f4f4f4; }
        nav a { margin-right: 15px; text-decoration: none; font-weight: bold; }
        .container { border: 1px solid #ccc; padding: 20px; }
        .alert { color: green; font-weight: bold; margin-bottom: 15px; }
        .error { color: red; font-size: 0.8em; }
    </style>
</head>
<body>
    <header>
        <h1>Cursusbeheer Systeem</h1>
    </header>

    <nav>
        <a href="{{ route('courses.index') }}">Home</a>
        <a href="{{ route('courses.create') }}">Nieuwe cursus</a>
    </nav>

    @if(session('success'))
        <div class="alert">{{ session('success') }}</div>
    @endif

    <div class="container">
        @yield('content') {{-- Hier wordt de unieke content per pagina geplaatst --}}
    </div>
</body>
</html>