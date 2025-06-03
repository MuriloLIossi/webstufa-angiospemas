// --- Projectiles ---
let Projectiles = [];

let ProjectileTypes = [
  {  
    name:"café",
    imgId: 0,
    speed: 5,
    doesRotate:false,
    range:120,
    pierce: 1,
  },
  {  
    name:"carrapicho",
    imgId: 1,
    speed: 10,
    doesRotate:false,
    range:120,
    pierce: 1,
  },
  {  
    name:"vitoria regia",
    imgId: 2,
    speed: 10,
    doesRotate:false,
    range:120,
    pierce: 1,
  },
  {  
    name:"pau brasil",
    imgId: 3,
    speed: 10,
    doesRotate:false,
    range:120,
    size: 1,
    pierce: 1,
  },
  {  
    name:"dente de leao",
    imgId: 4,
    speed: 10,
    doesRotate:false,
    range:120,
    size: 0.75,
    pierce: 1,
  },
  {  
    name:"coqueiro",
    imgId: 5,
    speed: 12,
    doesRotate:false,
    range:550,
    size: 2,
    pierce: 1,
  },
  {  
    name:"jaca",
    imgId: 6,
    speed: 4,
    doesRotate:false,
    range:120,
    pierce: 1,
  },
  
]

function newProjectile(type, x, y, angle, damage, range){
  let prototype = ProjectileTypes[type]

  let projectile = {
    id: getUniqueId(),
    type: type,
    name: prototype.name,
    imgId: prototype.imgId,
    speed: prototype.speed,
    range: range ?? prototype.range ?? 1000,
    size: prototype.size ?? 1,
    pierce: prototype.pierce,
    x: x,
    y: y,
    t: 0,
    angle: angle,
    damage: damage,
  }
  
  //console.log(projectile.name,projectile.imgId,type)
  Projectiles.push(projectile)
}

function runProjectiles(){
  for (let i = Projectiles.length - 1; i >= 0; i--) {
    let p = Projectiles[i]
    p.t++
   
    p.x += cos(p.angle) * p.speed;
    p.y += sin(p.angle) * p.speed;
    
    p.range -= p.speed
    
    
    
    // Check collision with target (simple distance check)
    const collisionDistance = 20 * p.size; // Radius of enemy + projectile
    
    // Lógica para colisão com inimigos
    for (let ii = Enemies.length - 1; ii >= 0; ii--) {
      let enemy = Enemies[ii];
      if (getDistance(p.x, p.y, enemy.x, enemy.y) < collisionDistance + 10) { // Adicionei +10 para uma área de colisão um pouco maior
        enemy.hp -= p.damage; // Aplica dano ao inimigo
        p.pierce--; // Reduz a perfuração do projétil

        if (enemy.hp <= 0) {

          
          Polens += enemy.prize
          
          enemy.onPop.forEach( (value, index) => { // Renamed 'v' to 'value' for clarity
            for (let k = 0; k < value; k++) { // Loop 'value' times
              const cx = (Math.random()-0.5)*40
              const cy = (Math.random()-0.5)*40
              newEnemy(index, enemy.x + cx, enemy.y + cy, enemy.objetivo);
            }
          })
          Enemies.splice(ii, 1); // Remove o inimigo se a HP for 0 ou menos
          
        }

        if (p.pierce <= 0) {
          Projectiles.splice(i, 1); // Remove o projétil se não tiver mais perfuração
          break; // Sai do loop interno para não verificar outros inimigos com este projétil
        }
      }
    }

    
    if(p.x < -50 || p.x > 650 ||
      p.y < -50 || p.y > 650){
      Projectiles.splice(i, 1);
    }
    if(p.range < 0){
      Projectiles.splice(i, 1);
    }
  }
}

function drawProjectiles(){
  Projectiles.forEach(p => {
    if(ProjectileImages[p.imgId]){
      // Draw the projectile image
      const angle = p.doesRotate ? p.angle : 0;
      noTint();
      renderImage(ProjectileImages[p.imgId], p.x, p.y, p.angle, p.size); 
    } else {
      // Fallback drawing (e.g., a simple circle) if image not loaded
      fill(255, 0, 0); // Red color
      circle(p.x, p.y, 10); // Draw a small circle
    }
  })
}