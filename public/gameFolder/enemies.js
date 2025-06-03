let Enemies = [];

let EnemyTypes = [
  {
    name: "Lixo Branco",
    hp: 50,
    speed: 1.1,
    imgId: 0,
    prize: 3,
    onPop: [0,0,0,0,0,0],
    damage: 1,
  },
  {
    name: "Lixo Amarelo",
    hp: 50,
    speed: 2.5,
    imgId: 1,
    prize: 4,
    onPop: [2,0,0,0,0,0],
    damage: 2,
  },
  {
    name: "Lixo Verde",
    hp: 150,
    speed: 1.3,
    imgId: 2,
    prize: 5,
    onPop: [0,1,0,0,0,0],
    damage: 5,
  },
  {
    name: "Lixo Azul",
    hp: 200,
    speed: 1.4,
    imgId: 3,
    prize: 6,
    onPop: [0,0,1,0,0,0],  
    damage: 10,
  },
  {
    name: "Lixo Preto",
    hp: 250,
    speed: 1.5,
    imgId: 4,
    prize: 7,
    onPop: [1,1,1,1,0,0],  
    damage: 25,
  },
  {
    name: "Lixo Dourado",
    hp: 500,
    speed: 1.8,
    imgId: 5,
    prize: 10,
    onPop: [0,0,0,0,2,0],  
    damage: 50,
  },
]

const caminho = [
  [-50,200],
  [0, 195],
  [185, 188],
  [299, 179],
  [330, 128],
  [295, 55],
  [220, 49],
  [191, 92],
  [185, 183],
  [189, 295],
  [183, 402],
  [173, 496],
  [101, 537],
  [50, 484],
  [64, 414],
  [152, 397],
  [215, 399],
  [301, 395],
  [359, 357],
  [382, 294],
  [427, 229],
  [492, 248],
  [516, 310],
  [517, 391],
  [516, 470],
  [516, 557],
  [516, 597],
  [516, 650],
];

function newEnemy(typeIndex, x, y, target){
  let prototype = EnemyTypes[typeIndex];

  let enemy = {
    id: getUniqueId(),
    type: typeIndex,
    x: x ?? caminho[0][0],
    y: y ?? caminho[0][1],
    ...prototype,
    t: 0,
    objetivo: target ?? 1,
    angulo: 0,
  }
  
  //console.log(enemy)
  Enemies.push(enemy);
}

function runEnemies(){
  for (let i = Enemies.length - 1; i >= 0; i--) {
    let enemy = Enemies[i];

    enemy.t++;

    if (enemy.objetivo < caminho.length) {
      enemy.angulo = getAngle(
        enemy.x,
        enemy.y,
        caminho[enemy.objetivo][0],
        caminho[enemy.objetivo][1]
      );
      let vel
      if(enemy.slow > 0){
        vel = enemy.speed/2
        enemy.slow -= 1/frameRate()
      } else {
        vel = enemy.speed
      }
      
      enemy.x += cos(enemy.angulo) * vel;
      enemy.y += sin(enemy.angulo) * vel;

      let distParaObj = getDistance(
        enemy.x,
        enemy.y,
        caminho[enemy.objetivo][0],
        caminho[enemy.objetivo][1]
      );

      if (distParaObj < enemy.speed * 1.5) {
        enemy.objetivo++;
      }
    } else {
      Enemies.splice(i, 1);
      Life -= enemy.damage
      if(Life <= 0){
        GameState = "death"
      }
    }

  }
}

function drawEnemies(){
  Enemies.forEach(enemy => {
    image(EnemyImages[enemy.imgId],enemy.x,enemy.y)
    //fill(255, 0, 0);
    //circle(enemy.x, enemy.y, 20);
  });
}