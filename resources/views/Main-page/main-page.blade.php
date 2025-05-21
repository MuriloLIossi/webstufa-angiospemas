@extends('layout')

@section('content')
  <div class="container main-page">
    <h1 class="text-center mb-3">Seja bem-vindo</h1>
    <h2 class="text-center mb-5">ao <strong>WebStufa</strong> das Angiospermas!</h2>

    <p class="lead text-center">Aqui você encontrará as principais informações sobre plantas e, especialmente, sobre o grupo das angiospermas.</p>

    <hr class="my-5">

    <h3 class="mb-3 titulo">Quem somos?</h3>
    <p>Somos um grupo de alunos do terceiro ano do curso de <strong>Desenvolvimento de Sistemas</strong> da <strong>ETEC João Belarmino</strong> (Amparo - SP), que se dedicou à criação deste site como parte de um projeto proposto pela professora de Biologia e Estudos Avançados em Ciências da Natureza, <strong>Taline Bueno Pínola</strong>.</p>

    <h3 class="mt-4 mb-3 titulo">Quem compõe este grupo?</h3>
    <p><strong>Nosso grupo é composto por quatro membros:</strong></p>
    <ul>
      <li>Murilo Luis Iossi Lopes – <a class="links" href="https://github.com/MuriloLIossi" target="_blank">GitHub</a></li>
      <li>Valentina Bastos de Souza – <a class="links" href="https://github.com/skykn0ws" target="_blank">GitHub</a></li>
      <li>Renan Andrade dos Santos – <a class="links" href="https://github.com/Laggh" target="_blank">GitHub</a></li>
      <li>Sarah Porsch Milani – <a class="links" href="https://github.com/SarahPuppy" target="_blank">GitHub</a></li>
    </ul>

    <h3 class="mt-5 mb-3 titulo">Qual é o objetivo do projeto?</h3>
    <p>O objetivo principal deste projeto é promover o conhecimento sobre os diferentes grupos de plantas. Nosso grupo trabalhou especificamente com as <strong>angiospermas</strong>, o grupo mais recente na cadeia evolutiva das plantas, sendo o único que possui <strong>flores e frutos</strong>.</p>

    <h3 class="mt-5 mb-3 titulo">O que você encontra em nossa WebStufa?</h3>
    <ul>
      <li>Informações gerais sobre as plantas – <a class="links"  href="/informacoes-gerais">Clique aqui para ver</a></li>
      <li>Informações específicas sobre as angiospermas – <a class="links"  href="/informacoes-angiospermas">Clique aqui para ver</a></li>
      <li>Galeria de espécies – <a class="links"  href="/galeria">Clique aqui para ver</a></li>
      <li>Detalhes sobre a reprodução das angiospermas – <a class="links"  href="/reproducao">Clique aqui para ver</a></li>
      <li>Informações sobre as utilidades das angiospermas – <a class="links"  href="/utilidades">Clique aqui para ver</a></li>
      <li>Um game com as angiospermas – <a class="links"  href="/game">Clique aqui para ver</a></li>      
      <li>Bibliografia utilizada – <a class="links"  href="/bibliografia">Clique aqui para ver</a></li>
    </ul>

    <hr class="my-5">

    <h3 class="mt-4 mb-3 titulo">🔗 Repositório do Projeto</h3>
    <p>Você pode acessar o código-fonte completo do projeto através do nosso repositório no GitHub:</p>
    <p><a href="https://github.com/MuriloLIossi/webstufa-angiospemas" target="_blank" class="btn btn-outline-success">Acessar Repositório</a></p>

  </div>
@endsection