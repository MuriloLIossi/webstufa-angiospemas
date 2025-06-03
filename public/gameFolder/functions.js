// --- Funções de desenhio ---
function renderImage(img, x, y, angle, scaleX = 1, scaleY = scaleX) {
    push();                // Save drawing state
    translate(x, y);       // Move to (x, y)
    rotate(angle);         // Apply rotation
    scale(scaleX, scaleY); // Apply scaling
    image(img, 0, 0);      // Draw image at transformed origin
    pop();                 // Restore previous state
}

// --- Funções de variaveis ---
function valueOrFunc(value){
  if(typeof(value) == "function"){
    return value()
  }
  return value
}

let nextId = 0;
function getUniqueId() {
  //console.log("Gerei ID", nextId)
  return nextId++;
}

function toGame(x, y){
  return [x - 200, y];  // 200px pra direita
}

function toScreen(x, y){
  return [x + 200, y];  // 200px pra esquerda
}

// --- Funções de colisão ---
function pointInRect(px, py, rx, ry, rw, rh) {
  return px >= rx && px <= rx + rw &&
        py >= ry && py <= ry + rh;
}

function pointInCircle(px, py, cx, cy, cr){
  return dist(px, py, cx, cy) <= cr;
}

function getAngle(x1, y1, x2, y2) {
  return atan2(y2 - y1, x2 - x1);
}
function getDistance(x1, y1, x2, y2){
  return ((x1-x2)**2 + (y1-y2)**2)**0.5
}

