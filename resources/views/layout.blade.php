<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agende Agora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container mt-4 bg-dark text-light p-4 rounded">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark  ">
  <div class="collapse navbar-collapse  justify-content-center" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Menu inicial</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/informacoes-gerais">Informações de plantas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/informacoes-angiospermas">sobre angiospermas</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="/galeria">Galeria de espécies</a>
      </li> 
      <li class="nav-item">
      <a class="nav-link" href="/reproducao">Reprodução</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="utilidades">utilidades</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="/game">Joguinho</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="/bibliografia">Bibliografia</a>
      </li>
    </ul>
  </div>
</nav>
    <main class="container">
      @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
