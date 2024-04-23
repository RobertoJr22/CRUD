<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{-- CSS DA APLICACAO --}}
    <link rel="stylesheet" href="/css/style.css">
    {{-- FONTE DO GOOGLE --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,100..1000&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    {{-- BOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand">
                    <h3>Meu Site</h3>
                </a>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/" class="nav-link">Eventos</a>
                </li>
                <li class="nav-item">
                    <a href="/Eventos/Criar" class="nav-link">Criar Eventos</a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link">Entrar</a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link">Cadastrar</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        Curso HDC EVENTS &COPY; 
    </footer>

    {{--IONICONS ABAIXO--}}
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>