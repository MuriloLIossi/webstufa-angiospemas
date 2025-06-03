function getClosestEnemy(x, y, range){
  let closestEnemy = null;
  let minDistance = range;
  
  Enemies.forEach((enemy) => {
    let d = dist(x, y, enemy.x, enemy.y); // Example using p5.js dist()
    if (d < minDistance) {
      minDistance = d;
      closestEnemy = enemy;
    }
  });
  
  return closestEnemy
}



const DEFAULT_PLANT_FUNCTION = (self) => {
  let [mx, my] = toGame(mouseX,mouseY) 
    
  if(pointInCircle(mx,my,self.x,self.y,50)){
    self.scaleX = 1.1
  } else {
    self.scaleX = 1
  }
}

const ype_delayFunction = (plant)=>{
  Polens += plant.upgradeLevel*10
  
  for (let i = 0; i < 10; i++) {
    const x = (Math.random()-0.5)*75
    const y = (Math.random()-0.5)*75
    newParticle(1,plant.x + x,plant.y + y,50);
  }
}

const dLeao_DelayFuncion = (plant)=>{
  const enemy = getClosestEnemy(plant.x,plant.y,plant.range);
  if(!enemy){
    return
  }
  plant.delayControl = (plant.delayControl - plant.delay)%plant.delay
  
  
  for (let i = 0; i < 10; i++) {
    const spread = 0.3
    
    setTimeout(()=>{
      const angle = getAngle(plant.x,plant.y,enemy.x,enemy.y)
      newProjectile(4,plant.x + (Math.random()-0.5)*20,plant.y + (Math.random()-0.5)*20,angle + (Math.random()-0.5)*spread,plant.damage,plant.range)
    },frameRate() * i / GameSpeed)
    
  }
}

const coqueiro_delayFunction = (plant)=>{
  const enemy = getClosestEnemy(plant.x,plant.y,plant.range);
  if(!enemy){
    return
  }
  plant.delayControl = (plant.delayControl - plant.delay)%plant.delay
  
  
  for (let i = -1; i <= 1; i++) { // -1 até 1
    const angle = getAngle(plant.x,plant.y,enemy.x,enemy.y) + (i*0.1)
    newProjectile(5,plant.x,plant.y,angle, plant.damage, plant.range)

    
  }
}

const maconha_delayFunction = (plant) => {
  const effectRange = plant.range; // Área de efeito da Maconha
  const slowDuration = 2 + plant.upgradeLevel*0.5; // Duração do slow em segundos
  
  plant.delayControl = (plant.delayControl - plant.delay)%plant.delay
  Enemies.forEach((enemy) => {
    let d = dist(plant.x, plant.y, enemy.x, enemy.y);
    if (d < effectRange) {
      enemy.slow = slowDuration
    }
  });

  // Solta partículas na área de efeito, similar ao Ipê
  for (let i = 0; i < 20; i++) {
    const angle = Math.random() * Math.PI * 2; // Ângulo aleatório
    const radius = (Math.random()**2) * (effectRange * 0.8); // Raio aleatório dentro da área de efeito
    const x = plant.x + Math.cos(angle) * radius;
    const y = plant.y + Math.sin(angle) * radius;
    newParticle(2, x, y, 20); // Usando o mesmo tipo de partícula que o Ipê
  }
};
  
let Plants = [];

let PlantTypes = [
  {
    name: "Café",
    imgId: 0,
    projectileType: 0,
    damage: 10,
    delay: 0.30,
    range: 100,
    price: 100,
    tickFunction: DEFAULT_PLANT_FUNCTION,
    upgradePrices: [100, 200, 500],
    maxUpgradeLevel: 4,
    upgradeFunction: (p) => {
      p.damage += 5;
      p.delay -= 0.05;
    },
  },
  {
    name: "Carrapicho",
    imgId: 1,
    projectileType: 1,
    damage: 20,
    delay: 0.50,
    range: 100,
    price: 150,
    tickFunction: DEFAULT_PLANT_FUNCTION,
    upgradePrices: [150, 250, 600],
    maxUpgradeLevel: 4,
    upgradeFunction: (p) => {
      p.damage += 8;
      p.delay -= 0.02;
      p.range += 10;
    },
  },
  {
    name: "V. Regia",
    imgId: 2,
    projectileType: 2,
    damage: 5,
    delay: 0.15,
    range: 250,
    price: 350,
    tickFunction: DEFAULT_PLANT_FUNCTION,
    waterPlant: true,
    upgradePrices: [200, 400, 800],
    maxUpgradeLevel: 4,
    upgradeFunction: (p) => {
      p.damage += 2;
      p.delay -= 0.01;
      p.range += 50;
    },
  },
  {
    name: "Pau Brasil",
    imgId: 3,
    projectileType: 3,
    damage: 10,
    delay: 0.2,
    range: 80,
    price: 300,
    tickFunction: DEFAULT_PLANT_FUNCTION,
    upgradePrices: [250, 400, 800],
    maxUpgradeLevel: 4,
    upgradeFunction: (p) => {
      p.damage += 7;
      p.delay -= 0.02;
      p.range += 15;
    },
  },
  {
    name: "D. d. leão",
    imgId: 4,
    projectileType: null,
    delayFunction: dLeao_DelayFuncion,
    ignoreDefaultDelayReduction: true,
    damage: 15,
    delay: 3,
    range: 100,
    price: 500,
    tickFunction: DEFAULT_PLANT_FUNCTION,
    upgradePrices: [400, 700, 1500],
    maxUpgradeLevel: 4,
    upgradeFunction: (p) => {
      p.damage += 10;
      p.range += 40;
      p.delay -= 0.25;
    },
  },
  {
    name: "Ipê",
    imgId: 5,
    projectileType: null,
    damage: 0,
    delay: 10,
    delayFunction: ype_delayFunction,
    range: 0,
    price: 300,
    tickFunction: DEFAULT_PLANT_FUNCTION,
    upgradePrices: [250, 500, 1200],
    maxUpgradeLevel: 4,
    upgradeFunction: (p) => {
      p.delay -= 1;
    },
  },
  {
    name: "Coqueiro",
    imgId: 6,
    projectileType: null,
    delayFunction: coqueiro_delayFunction,
    ignoreDefaultDelayReduction: true,
    damage: 25,
    delay: 1.5,
    range: 500,
    price: 500,
    tickFunction: DEFAULT_PLANT_FUNCTION,
    upgradePrices: [450, 800, 1600],
    maxUpgradeLevel: 4,
    upgradeFunction: (p) => {
      p.damage += 15;
    },
  },
  {
    name: "Jaqueira",
    imgId: 7,
    projectileType: 6,
    damage: 50,
    delay: 2,
    range: 100,
    price: 250,
    tickFunction: DEFAULT_PLANT_FUNCTION,
    upgradePrices: [200, 300, 500],
    maxUpgradeLevel: 4,
    upgradeFunction: (p) => {
      p.damage += 25;
      p.delay -= 0.2;
    },
  },
  {
    name: "Maconha",
    imgId: 8,
    projectileType: null, // Não usa projétil padrão
    delayFunction: maconha_delayFunction, // Usa a nova delayFunction
    ignoreDefaultDelayReduction: true, // Importante para delayFunctions customizadas
    damage: 0, // Maconha pode não causar dano direto, mas sim slow/suporte
    delay: 6, // Ativa a cada 2 segundos
    range: 150, // O alcance do efeito
    price: 200, // Preço inicial
    tickFunction: DEFAULT_PLANT_FUNCTION,
    upgradePrices: [150, 300, 700], // Preços de upgrade
    maxUpgradeLevel: 4, // Nível máximo de upgrade
    upgradeFunction: (p) => {
      p.delay -= 0.2; // Reduz o tempo entre os efeitos
      p.range += 20; // Aumenta a área de efeito
    },
  },
];

function newPlant(type, x, y, tickFunction){
  let prototype = PlantTypes[type]
  
  let plant = {
    ...prototype, // Copia do prototipo
    id: null, // começa null
    img: null,
    type: type, // Index
    x: x,
    y: y,
    delayControl: 0,
    scaleX: 1,
    scaleY: 1,
    tickFunction: tickFunction || prototype.tickFunction,
    upgradeLevel: 1,
    upgradePrices: prototype.upgradePrices ?? [0,0,0],
    maxUpgradeLevel: prototype.maxUpgradeLevel ?? 1,
    upgradeFunction: prototype.upgradeFunction,
    target: null,
    t: 0,
  };
  
  plant.img = PlantImages[plant.imgId].get()
  plant.id = getUniqueId();

  Plants.push(plant);
  sortPlants()
}

function runPlants(){
  Plants.forEach((v)=>{
    v.t++;
    v.tickFunction(v);
    v.delayControl += 1/frameRate()
    
    
    if(v.delayControl > v.delay){
      if(v.projectileType != null){
        
        closestEnemy = getClosestEnemy(v.x,v.y,v.range)

        if(closestEnemy){
          v.delayControl = (v.delayControl - v.delay)%v.delay
          let angle = getAngle(v.x,v.y,closestEnemy.x,closestEnemy.y)
          newProjectile(v.projectileType,v.x,v.y,angle, v.damage, v.range);
        }
      } else { // N tem projetil ent roda uma função
        if(!v.ignoreDefaultDelayReduction){
          v.delayControl = (v.delayControl - v.delay)%v.delay
        }
        v.delayFunction(v)
      }
    }
  });
}

function drawPlants(){
  Plants.forEach((v) => {
    
    // Sombra
    fill(0, 20, 50, 100);  // Set the shadow color (semi-transparent)
    noStroke();  // Disable the outline for the shadow
    //ellipse(v.x, v.y + 50, 50,20);  // Adjust the size/position of the shadow
    
    
    if(v.id == SelectedPlantId){
      const sx = v.scaleX;
      const sy = v.scaleY;
      //rect(v.x-40*sx,v.y-40*sy,80*sx,80*sy)
      

      const plant = SelectedPlant
      fill(255,255,255,128)
      circle(plant.x,plant.y,plant.range*2)
      fill(255,255,255,255)

    }
    // Now draw the actual plant
    renderImage(v.img, v.x, v.y, 0, v.scaleX, v.scaleY);
    
    if(DEBUG){
      fill(0,0,0,0);
      stroke('red');
      circle(v.x,v.y,80)
      
      stroke('blue');
      circle(v.x,v.y,v.range*2)
      
      if(v.target){
        line(v.x,v.y,v.x+50,v.y+50)
      }
    }
    
  });
}

function sortPlants(){
  Plants.sort((a, b) => a.y - b.y);
}
