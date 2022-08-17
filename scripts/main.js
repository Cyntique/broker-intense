
const atmblock = document.getElementById('dato-atm');
const lanueva = document.getElementById('dato-lanueva');
const rivadavia = document.getElementById('dato-rivadavia');
const uruguay = document.getElementById('dato-riouruguay');
const fed = document.getElementById('dato-fedpatronal');
const providencia = document.getElementById('dato-providencia');
const zurich = document.getElementById('dato-zurich');

const todas = document.querySelector(".dato");

function elige(idButton){
    switch(idButton){
        case 1:
            atmblock.style.display = "flex";
            lanueva.style.display = "none";
            rivadavia.style.display = "none";
            uruguay.style.display = "none";
            fed.style.display = "none";
            providencia.style.display = "none";
            zurich.style.display = "none";
            break;
        case 2: 
            atmblock.style.display = "none";
            lanueva.style.display = "flex";
            rivadavia.style.display = "none";
            uruguay.style.display = "none";
            fed.style.display = "none";
            providencia.style.display = "none";
            zurich.style.display = "none";
            break;
        case 3:
            atmblock.style.display = "none";
            lanueva.style.display = "none";
            rivadavia.style.display = "flex";
            uruguay.style.display = "none";
            fed.style.display = "none";
            providencia.style.display = "none";
            zurich.style.display = "none";
            break;
        case 4:
            atmblock.style.display = "none";
            lanueva.style.display = "none";
            rivadavia.style.display = "none";
            uruguay.style.display = "flex";
            fed.style.display = "none";
            providencia.style.display = "none";
            zurich.style.display = "none";
            break;
        case 5:
            atmblock.style.display = "none";
            lanueva.style.display = "none";
            rivadavia.style.display = "none";
            uruguay.style.display = "none";
            fed.style.display = "flex";
            providencia.style.display = "none";
            zurich.style.display = "none";
            break;
        case 6:
            atmblock.style.display = "none";
            lanueva.style.display = "none";
            rivadavia.style.display = "none";
            uruguay.style.display = "none";
            fed.style.display = "none";
            providencia.style.display = "flex";
            zurich.style.display = "none";
            break;
        case 7:
            atmblock.style.display = "none";
            lanueva.style.display = "none";
            rivadavia.style.display = "none";
            uruguay.style.display = "none";
            fed.style.display = "none";
            providencia.style.display = "none";
            zurich.style.display = "flex";
            break;

    }
}