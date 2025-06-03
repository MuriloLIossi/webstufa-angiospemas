console.log("Sketch loaded");
function mousePressed() {
  if(GameState == "game"){
    if(mouseX < 200){
      handleClickGUI(mouseX, mouseY)
    } else {
      const [x, y] = toGame(mouseX, mouseY);
      handleClickGame(x, y)
    }
  }
  if(GameState == "menu"){
    //169, 413
    //604, 504
    //534, 91
    if(pointInRect(mouseX, mouseY, 169, 413, 434, 91 )){
      innitGame();
    }
  }
  
  if(GameState == "death"){
    if(pointInRect(mouseX,mouseY,260,325,280,65)){    
      GameState = "menu"
    }      
  }
}

function keyPressed(){
  handleKeyPressed(key,keyCode)  
}

function setup() {
  createCanvas(800, 600).parent('game-container');
  imageMode(CENTER);
  noSmooth();
  innitGUI();
  //innitGame();
  //newPlant(0, 300, 50)
}

function update(){
  runParticles();
  runGame();
}

function draw() {
  update()
  
  drawGame()
}