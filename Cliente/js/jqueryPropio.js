

const claseInactiva=document.querySelector(".dropdown-menu");
const botonPulsar=document.querySelector(".dropdown-toggle");


function aparecerOption(){
    claseInactiva.classList.toggle('activar');
}
botonPulsar.addEventListener('click', aparecerOption);