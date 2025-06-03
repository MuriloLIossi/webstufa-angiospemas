// --- Particulas ---
const PARTICLE_OPACITY = 1
const ROTATE_PARTICLES = false

let Particles = [];

function newParticle(imgId, x, y, duration){
  let particle = {
    imgId: imgId,
    x: x,
    y: y,
    sx: Math.random() - 0.5, 
    sy: Math.random() * -2,
    duration: duration || 60,
    opacity: 1,
    angle: 0,
    t:0,
    angleToChange: (Math.random() - 0.5) * 0.10, // -0.5 ate 0.5
  };
  
  Particles.push(particle);
  
}
function runParticles(){
  for (let i = Particles.length - 1; i >= 0; i--) {
    v = Particles[i]
    v.x += v.sx
    v.y += v.sy
    v.angle += v.angleToChange
    v.duration--
    v.t++
    if(v.duration <= 0){
      Particles.splice(i,1)
    }
  }
}
function drawParticles(){
  Particles.forEach( (v) => {
    const opacity = v.duration / 10
    tint(255,255,255, opacity*255)
    
    if(ROTATE_PARTICLES){
      renderImage(ParticleImages[v.imgId],v.x,v.y,v.angle)
    } else {
      image(ParticleImages[v.imgId],v.x,v.y)
    }
  })
  noTint()
}
