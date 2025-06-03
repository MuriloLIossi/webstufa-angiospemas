let SelectedPlant;
let SelectedPlantId;
let SelectedPlantSlot;
let Polens;
let GameTicks;
let Round;
let RoundEnemiesLeft;
let RoundDelay;
let Life;
let GameState;
let GameSpeed;

GameState = "menu";


function drawGame(){
  
  [mx, my] = toGame(mouseX,mouseY)
  push();               
  translate(200, 0);    

  //background(65, 152, 10);
  image(Sprites.map,300,300)
  
  drawPlants();         
  drawParticles();    
  drawProjectiles();
  drawEnemies();
  
  // fill(0,0,0,0)
  // stroke(1);
  // for (let i = 0; i < caminho.length - 1; i++) {
  //   let p1 = caminho[i];
  //   let p2 = caminho[i + 1];
  //   line(p1[0], p1[1], p2[0], p2[1]);
  // }

  if(SelectedPlantSlot != null){
    const selectedPlant = PlantTypes[SelectedPlantSlot]
    fill(255,255,255,128)
    circle(mx,my,selectedPlant.range*2)
    image(PlantImages[selectedPlant.imgId], mx, my)
    fill(255,255,255,255)
  }
  
  pop();  
  smooth();
  drawGUI();
  noSmooth();

  
  if(GameState == "menu"){
    image(Sprites.menu,400,300)
  }
  
  if(GameState == "death"){
    fill(255)
    rect(250,200,300,200)

    fill(0)
    textSize(48)
    text("Você Morreu",260,260);
    
    textSize(18)
    const str = `Parabens!! \nVocê chegou até a rodada ${Round}`
    text(str, 260,285)
    
    fill(255)
    rect(260,325,280,65)
    
    fill(0)
    textSize(32)
    text("Ir para menu",310,370)
  }
  fill(255, 0, 0); 
  text(`${mouseX},${mouseY}`, mouseX + 10, mouseY + 40);  // Draw text slightly offset from mouse position
  fill(255,255,255)
  
}


function runGame(){
  if(GameState == "game"){
    for(let i = 0; i < GameSpeed; i++){
      GameTicks++
      runPlants();
      runProjectiles();
      runEnemies();
      if(GameTicks%30==0){
        Polens++;
      }


      if(GameTicks%RoundDelay==0){
        if(RoundEnemiesLeft){
          const typeToSpawn = Math.min(Math.round(Round/5), 5);
          RoundEnemiesLeft--;
          newEnemy(typeToSpawn)

          //console.log(RoundDelay, RoundEnemiesLeft, Round)

          if(Round < 12){
            RoundDelay = 80
          } else {
            RoundDelay = Math.max(80 - (Round), 20) // limita a 20 o tempo

          }
        } else {  
          Polens += Round * 10
          Round++
          RoundEnemiesLeft = 15 + Math.round(Round/10)
          RoundDelay = 160
        }
      }
    }
  }
  
}

function handleClickGame(x, y){
  console.log(x,y)
  if(GameState == "game"){
    const firstPlantInCircle = Plants.find((v) => {
      return pointInCircle(x, y, v.x, v.y, 50);
    });

    if (firstPlantInCircle) {
      //console.log(firstPlantInCircle)
      SelectedPlant = firstPlantInCircle
      SelectedPlantId = SelectedPlant.id
      return
    } 

    if(SelectedPlantSlot != null){
      [mx, my] = toGame(mouseX,mouseY)
      
      // Coordenadas dos centros dos círculos
      const circle1X = 269;
      const circle1Y = 455;
      const circle2X = 378;
      const circle2Y = 433;
      const circle3X = 310; // Novo círculo
      const circle3Y = 462;  
      const detectionRadius = 35; // Raio de 25px

      // Calcula a distância do mouse para cada círculo
      let distToCircle1 = dist(mx, my, circle1X, circle1Y);
      let distToCircle2 = dist(mx, my, circle2X, circle2Y);
      let distToCircle3 = dist(mx, my, circle3X, circle3Y);
        
        // Retorna se o mouse NÃO estiver a 25px de NENHUM dos círculos
      if (distToCircle1 > detectionRadius && distToCircle2 > detectionRadius && distToCircle3 > detectionRadius) {
        if(PlantTypes[SelectedPlantSlot].waterPlant){
          return;
        }
      } else {
        if(!PlantTypes[SelectedPlantSlot].waterPlant){
          return;
        }
      }

      const plantPrice = PlantTypes[SelectedPlantSlot].price
      if(Polens < plantPrice){
        console.log("pobre")
        SelectedPlantSlot = null;
        return
      }
      Polens = Polens - plantPrice;

      
      newPlant(SelectedPlantSlot,mx,my)
    }

    SelectedPlantSlot = null;
    SelectedPlantId = null;
    SelectedPlant = null;
  }  
}
    
    
function handleKeyPressed(key,keyCode)  {
  // let fs = fullscreen(); // Verifica o estado atual de tela cheia
  // fullscreen(!fs); // Alterna o estado de tela cheia
}

function innitGame(){
  // Game
  SelectedPlant = null;
  SelectedPlantId = null;
  SelectedPlantSlot = null;
  Polens = 200;
  GameTicks = 0;
  Round = 1;
  RoundEnemiesLeft = 15;
  RoundDelay = 200;
  Life = 100;
  GameState = "game";
  GameSpeed = 1;
  
  // Enemies
  Enemies = []
  
  // Particles
  Particles = []

  // Plants
  Plants = [];
  
  // Projectiles
  Projectiles = []
}