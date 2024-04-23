<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{-- CSS DA APLICACAO --}}
    <link rel="stylesheet" href="/css/style.css">
    {{-- FONTE DO GOOGLE --}}

    {{-- BOOTSTRAP --}}

</head>
<body>
    <header>
        <h3>espaco header</h3>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        Curso HDC EVENTS &COPY; 2024
    </footer>
</body>
</html>