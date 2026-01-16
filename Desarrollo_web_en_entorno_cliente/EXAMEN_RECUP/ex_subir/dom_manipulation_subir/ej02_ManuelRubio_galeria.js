//Suerte!




const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');
const indicadoresContainer = document.getElementById('indicadores-container');
const autoBtn = document.getElementById('autoBtn');
const imagenes = document.querySelectorAll('img');

prevBtn.addEventListener('click', prevImage);
nextBtn.addEventListener('click', nextImage);
autoBtn.addEventListener('click', autoPlay);
autoBtn.dataset.auto = "false";


let indicador1 = document.createElement('span')
let indicador2 = document.createElement('span')
let indicador3 = document.createElement('span')
let indicador4 = document.createElement('span')
let indicador5 = document.createElement('span')
indicadores = [indicador1,indicador2,indicador3,indicador4,indicador5]

function muestraImg(parametro) {
    imagenes.forEach(element => {
        element.className = "";
    });
    imagenes[parametro].className ="active";
    activaIndicador(parametro);
}
function activaIndicador(x) {
  indicadores.forEach(element => {
        element.className = "";
    });
    indicadores[x].className ="active";
}
function nextImage() {
    for (let i = 0; i < imagenes.length; i++) {
        
        if (imagenes[i].className === "active" && i ===4) {
            muestraImg(0)
            break;
        } else if (imagenes[i].className == "active") {
           muestraImg(i+1);        
           break;
    }
}
}
function prevImage() {
    for (let i = 0; i < imagenes.length; i++) {
        
        if (imagenes[i].className == "active" && i ===0) {
            muestraImg(4)
            break;
        } else if (imagenes[i].className == "active") {
           muestraImg(i-1);       
           break; 
    }
}
}
function autoPlay() {
    if (autoBtn.dataset.auto ==="false") {
        autoBtn.dataset.auto = "true";
    } else if (autoBtn.dataset.auto ==="true") {
        autoBtn.dataset.auto = "false";
    }
    if (autoBtn.dataset.auto ==="true") {
        
        setInterval(() => {
    
            nextImage();
    
    }, 1000);
    }
}
