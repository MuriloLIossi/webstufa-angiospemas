<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Webstufa Angiospermas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="mt-4 bg-dark text-light p-4 rounded">

    <header>
      <h1 class="text-center my-4">WebStufa Angiospermas</h1>
    </header>

    <!-- Navbar responsiva -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
      <div class="container-fluid">
        <a class="navbar-brand d-lg-none" href="/">WebStufa</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active"><a class="nav-link" href="/">Menu inicial</a></li>
            <li class="nav-item"><a class="nav-link" href="/informacoes-gerais">Informações de plantas</a></li>
            <li class="nav-item"><a class="nav-link" href="/informacoes-angiospermas">Sobre angiospermas</a></li>
            <li class="nav-item"><a class="nav-link" href="/galeria">Galeria de espécies</a></li>
            <li class="nav-item"><a class="nav-link" href="/reproducao">Reprodução</a></li>
            <li class="nav-item"><a class="nav-link" href="/utilidades">Utilidades</a></li>
            <li class="nav-item"><a class="nav-link" href="/game">Joguinho</a></li>
            <li class="nav-item"><a class="nav-link" href="/bibliografia">Bibliografia</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <main class="container container-fluid">
      @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
