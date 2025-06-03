@extends('layout')

@section('content')
<h1 class="text-center">Angiospermas vs Poluição</h1>
<div class="d-flex justify-content-center align-items-center vh-100">
    {{-- Esta div será o contêiner do seu jogo P5.js --}}
    <div id="game-container" class="bg-secondary" style="width: 800px; height: 600px;">
        {{-- Carrega o CSS do seu jogo P5.js --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('gameFolder/style.css') }}">

        {{-- Carrega as bibliotecas P5.js de CDN --}}
        <script src="https://cdn.jsdelivr.net/npm/p5@1.11.5/lib/p5.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/p5.js-compatibility@0.1.2/src/shapes.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.11.3/addons/p5.sound.min.js"></script>

        {{-- Carrega os seus arquivos JavaScript do jogo P5.js --}}
        {{-- Todos os seus arquivos JS estão na raiz da pasta 'gameFolder'. --}}
        <script src="{{ asset('gameFolder/configs.js') }}"></script>
        <script src="{{ asset('gameFolder/functions.js') }}"></script>
        <script src="{{ asset('gameFolder/projectiles.js') }}"></script>
        <script src="{{ asset('gameFolder/plants.js') }}"></script>
        <script src="{{ asset('gameFolder/particles.js') }}"></script>
        <script src="{{ asset('gameFolder/enemies.js') }}"></script>
        <script src="{{ asset('gameFolder/gui.js') }}"></script>
        <script src="{{ asset('gameFolder/loadSprites.js') }}"></script>
        <script src="{{ asset('gameFolder/game.js') }}"></script>
        <script src="{{ asset('gameFolder/sketch.js') }}"></script>

    </div>
</div>
@endsection