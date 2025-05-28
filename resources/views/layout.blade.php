<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Webstufa Angiospermas</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }} ")">
    <link rel="icon" type="img" href="{{ asset('favicon.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class=" bg-bege rounded">

    <div class="color-verdem">
    <header>
      <a class="text-decoration-none text-light" href="/"><h1 class="text-center">WebStufa Angiospermas</h1></a>
    </header>

    <!-- Navbar responsiva -->
    <nav class="navbar navbar-expand-lg color-verdef mb-4 mt-4">
      <div class="container-fluid">
        <a class="navbar-brand d-lg-none" href="/">WebStufa</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active fw-bold"><a class="nav-link nav-color" href="/">Menu inicial</a></li>
            <li class="nav-item fw-bold"><a class="nav-link nav-color" href="/informacoes-gerais">Sobre plantas</a></li>
            <li class="nav-item fw-bold"><a class="nav-link nav-color" href="/informacoes-angiospermas">Sobre angiospermas</a></li>
            <li class="nav-item fw-bold"><a class="nav-link nav-color" href="/galeria">Espécies</a></li>
            <li class="nav-item fw-bold"><a class="nav-link nav-color" href="/reproducao">Reprodução</a></li>
            <li class="nav-item fw-bold"><a class="nav-link nav-color" href="/utilidades">Utilidades</a></li>
            <li class="nav-item fw-bold"><a class="nav-link nav-color" href="/game">Joguinho</a></li>
            <li class="nav-item fw-bold"><a class="nav-link nav-color" href="/bibliografia">Bibliografia</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
    <main class="container container-fluid container-font">
      @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
