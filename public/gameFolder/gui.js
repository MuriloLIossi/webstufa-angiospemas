// --- GUI ---
let GUIElements = []

function newTextGUI(label, x, y, fontSize){
  let guiElement = {
    type: "text",
    label: label,
    x: x,
    y: y,
    fontSize: fontSize || 12,
  };
  
  GUIElements.push(guiElement);
}

function newButtonGUI(onClick, x, y, w, h, label) {
  let guiElement = {
    type: "button",
    label: label || "",
    x: x,
    y: y,
    w: w,
    h: h,
    onClick: onClick,
  };
  
  GUIElements.push(guiElement);
}

function newImageGUI(img, x, y, w, h, onClick){
  let guiElement = {
    type: "image",
    img: img,
    x: x,
    y: y,
    w: w,
    h: h,
    onClick: ()=>{return 0},
  };

  GUIElements.push(guiElement);
}


function drawGUI(){
  fill(255)
  rect(0,0,200,600)
  GUIElements.forEach( (v)=>{
    switch (v.type) {
    case "text":
        fill(0) //texto preto
        textSize(v.fontSize)
        text(valueOrFunc(v.label),v.x,v.y+v.fontSize)
        noTint()
      return 
    case "button":
      fill(255)
      rect(v.x, v.y, v.w, v.h);
      textAlign(CENTER, CENTER);
      fill(0)
      textSize(14); 
      text(valueOrFunc(v.label), v.x + v.w / 2, v.y + v.h / 2);
      textAlign(LEFT, BASELINE); // reset align if needed elsewhere
      return 
      
     case "image": 
      image(v.img, v.x, v.y, v.w, v.h);
      return
      
    default:
      throw new Error(`Unknown GUI element type: ${v.type}`);
  }
  })
}

function handleClickGUI(x, y){
  GUIElements.forEach( (v)=>{
    if(pointInRect(x,y,v.x,v.y,v.w,v.h) && v.type == "button"){
      v.onClick()
    }
  })
  console.log("click GUI", x ,y)
}


function innitGUI(){
  
  

  let textFunc = ()=> {
    let name
    if(SelectedPlantSlot != null){
      name = PlantTypes[SelectedPlantSlot].name
    } else {
      name = "Nenhuma"
    }
    
    return `Selecionada ${name} \nPolen ()   : ${Polens} \nRodada:  ${Round} \nVida:  ${Life}`
  }
  newTextGUI(textFunc,0,0,15)
  
  newImageGUI(Sprites.polen,50,30,50,50);
  
  PlantTypes.forEach((plant, index) => {
    const row = Math.floor(index / 2); 
    const col = index % 2; // 0 ou 1 (x)
    

    const buttonX = 0 + col*100;
    const buttonY = 100 + row*100;

    const buttonFunc = () => {
      SelectedPlantSlot = index;
    };
    
    newButtonGUI(buttonFunc, buttonX, buttonY, 100, 100, "");
    newTextGUI(`${plant.name}:${plant.price}`,buttonX+3,buttonY+100-20,12)
    
    newImageGUI(
      PlantImages[plant.imgId],
      buttonX + 50,
      buttonY + 40,
      80,
      80,
    );
  });
  

  // Recebe um PGraphics (ou PImage) e o valor de rotação do matiz (0 a 1)
  function applyHueShift(pg, shiftAmount) {
  pg.loadPixels(); // Carrega os pixels do PGraphics/PImage

  for (let i = 0; i < pg.pixels.length; i += 4) {
    let r = pg.pixels[i];
    let g = pg.pixels[i + 1];
    let b = pg.pixels[i + 2];
    let a = pg.pixels[i + 3];

    // Converte RGB para HSB (usando fórmulas matemáticas)
    // Normaliza RGB para 0-1
    let r_norm = r / 255;
    let g_norm = g / 255;
    let b_norm = b / 255;

    let maxVal = Math.max(r_norm, g_norm, b_norm);
    let minVal = Math.min(r_norm, g_norm, b_norm);
    let delta = maxVal - minVal;

    let h = 0;
    let s = 0;
    let br = maxVal; // Brightness é o valor máximo (0-1)

    if (delta !== 0) {
      s = delta / maxVal; // Saturation (0-1)
      if (maxVal === r_norm) {
        h = (g_norm - b_norm) / delta + (g_norm < b_norm ? 6 : 0);
      } else if (maxVal === g_norm) {
        h = (b_norm - r_norm) / delta + 2;
      } else {
        h = (r_norm - g_norm) / delta + 4;
      }
      h /= 6; // Hue (0-1)
    }

    // Aplica o hue shift
    h = (h + shiftAmount) % 1; // Rotação do matiz (0-1)
    if (h < 0) h += 1; // Garante que o matiz seja positivo

    // Converte de volta HSB para RGB (usando fórmulas matemáticas)
    let c_r, c_g, c_b;
    let i_h = Math.floor(h * 6);
    let f = h * 6 - i_h;
    let p = br * (1 - s);
    let q = br * (1 - f * s);
    let t = br * (1 - (1 - f) * s);

    switch (i_h % 6) {
      case 0: c_r = br; c_g = t; c_b = p; break;
      case 1: c_r = q; c_g = br; c_b = p; break;
      case 2: c_r = p; c_g = br; c_b = t; break;
      case 3: c_r = p; c_g = q; c_b = br; break;
      case 4: c_r = t; c_g = p; c_b = br; break;
      case 5: c_r = br; c_g = p; c_b = q; break;
    }

    // Converte de volta para 0-255 e atribui aos pixels
    pg.pixels[i] = Math.round(c_r * 255);
    pg.pixels[i + 1] = Math.round(c_g * 255);
    pg.pixels[i + 2] = Math.round(c_b * 255);
    pg.pixels[i + 3] = a; // Mantém o alpha original
  }
  pg.updatePixels(); // Atualiza a imagem com os novos pixels
}
  

  
  const upgradeClickFunc = () => {
    if(!SelectedPlant){
      return
    }
      
    if(SelectedPlant.upgradeLevel == SelectedPlant.maxUpgradeLevel){
      return
    }
    
    if(Polens < SelectedPlant.upgradePrices[SelectedPlant.upgradeLevel-1]){
      return
    }
      
    const newCanvas = createGraphics(SelectedPlant.img.width, SelectedPlant.img.height);

    newCanvas.image(SelectedPlant.img, 0, 0);

    const hueShiftAmount = 0.1;
    applyHueShift(newCanvas, hueShiftAmount);

    SelectedPlant.img = newCanvas;
      
    SelectedPlant.upgradeFunction(SelectedPlant)
    Polens -= SelectedPlant.upgradePrices[SelectedPlant.upgradeLevel-1]
    SelectedPlant.upgradeLevel++
    console.log("compra",SelectedPlant)


  };
  const upgradeTextFunc = () => {
    const sl = SelectedPlant
    if(sl == null){
      return "Nenhuma \nPlanta"
    }
    
    let upgradePrice
    console.log(sl.upgradeLevel , sl.maxUpgradeLevel)
    if(sl.upgradeLevel == sl.maxUpgradeLevel){
      upgradePrice = "Maximo"
    } else {
      upgradePrice = sl.upgradePrices[sl.upgradeLevel-1]
    }
    return `${sl.name} Lv.${sl.upgradeLevel} \nMelhorar: ${upgradePrice}`
  };
  newButtonGUI(upgradeClickFunc,100,500,100,50, upgradeTextFunc, 12)
  
  const speedUpClickFunc = () => {
    if(GameSpeed == 1){
      GameSpeed = 2
      return
    }
    GameSpeed = 1
  }
    
  const speedUpTextFunc = () => {
    return `Velocidade: ${GameSpeed}x`
  }
      
  newButtonGUI(speedUpClickFunc,100,550,100,50, speedUpTextFunc)
  
  /*
  if(DEBUG){
    textFunc = () => {
      if (!SelectedPlant) {
        return "Nenhuma planta Selecionada";
      }
      return JSON.stringify(SelectedPlant, (key, value) => {
        if (key === 'img') {return undefined;}
        return value; 
      },2);
    };
    newTextGUI(textFunc,0,360,10)
  }
  console.log(GUIElements)
  */
  //newButtonGUI(buttonFunc, 40,40,120,40,"Resetar Plantas")
}