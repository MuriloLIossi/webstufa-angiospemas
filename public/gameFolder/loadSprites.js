function preload() {
  ParticleImages = [
    // Se "poluicao.png" estiver diretamente dentro de "public/game", use:
    loadImage("gameFolder/poluicao.png"), // Caminho corrigido
    loadImage("gameFolder/sprites/polen.png"), // Caminho corrigido
    loadImage("gameFolder/projeteis/maconha.png"), // Caminho corrigido
  ];

  PlantImages = [
    //loadImage("arvore.png"), fudida
    loadImage("gameFolder/plantas/cafe.png"), // Caminho corrigido
    loadImage("gameFolder/plantas/carrapicho.png"), // Caminho corrigido
    loadImage("gameFolder/plantas/vitoria_regia.png"), // Caminho corrigido
    loadImage("gameFolder/plantas/pau_brasil.png"), // Caminho corrigido
    loadImage("gameFolder/plantas/dente_de_leao.png"), // Caminho corrigido
    loadImage("gameFolder/plantas/ype.png"), // Caminho corrigido
    loadImage("gameFolder/plantas/coqueiro.png"), // Caminho corrigido
    loadImage("gameFolder/plantas/jaqueira.png"), // Caminho corrigido
    loadImage("gameFolder/plantas/maconha.png"), // Caminho corrigido
  ];

  ProjectileImages = [
    loadImage("gameFolder/projeteis/cafe.png"), // Caminho corrigido
    loadImage("gameFolder/projeteis/carrapicho.png"), // Caminho corrigido
    loadImage("gameFolder/projeteis/vitoria_regia.png"), // Caminho corrigido
    loadImage("gameFolder/projeteis/pau_brasil.png"), // Caminho corrigido
    loadImage("gameFolder/projeteis/dente_de_leao.png"), // Caminho corrigido
    //loadImage("projeteis/ype.png"),
    loadImage("gameFolder/projeteis/coqueiro.png"), // Caminho corrigido
    loadImage("gameFolder/projeteis/jaca.png"), // Caminho corrigido
    loadImage("gameFolder/projeteis/maconha.png"), // Caminho corrigido
  ];

  EnemyImages = [
    loadImage("gameFolder/inimigos/branca.png"), // Caminho corrigido
    loadImage("gameFolder/inimigos/amarela.png"), // Caminho corrigido
    loadImage("gameFolder/inimigos/verde.png"), // Caminho corrigido
    loadImage("gameFolder/inimigos/azul.png"), // Caminho corrigido
    loadImage("gameFolder/inimigos/preta.png"), // Caminho corrigido
    loadImage("gameFolder/inimigos/dourada.png"), // Caminho corrigido
  ];

  Sprites = {
    polen: loadImage("gameFolder/sprites/polen.png"), // Caminho corrigido
    menu: loadImage("gameFolder/sprites/menu.png"), // Caminho corrigido
    map: loadImage("gameFolder/sprites/mapa.png"), // Caminho corrigido
  };
}