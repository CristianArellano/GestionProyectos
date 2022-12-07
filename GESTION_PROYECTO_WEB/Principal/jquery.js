//CLASE INACTIVA

const GestionUserClass = document.querySelector('.gestionUser');
const GestionCitasClass=document.querySelector('.gestionCitas');
const GestionHistorial=document.querySelector('.gestionHistorial');
const GestionReportes=document.querySelector('.gestionReportes');


//BOTON DONDE OCURRIRA EL EVENTO
const BotonGestionUser = document.querySelector('.GestionUsers');
const BotonGestionCitas = document.querySelector('.elementCitas');
const BotonGestionElementUser = document.querySelector('.elementUsuarios');
const BotonGestionHistorial = document.querySelector('.elementHistorial');


function aparecerUser(){GestionUserClass.classList.toggle('inactivo');

if(GestionCitasClass.classList.contains('inactivo')){
    GestionCitasClass.classList.remove('inactivo');
}
if(GestionHistorial.classList.contains('inactivo')){
    GestionHistorial.classList.remove('inactivo');
}
if(GestionReportes.classList.contains('inactivo')){
    GestionReportes.classList.remove('inactivo');
}

}

function aparecerCitas(){GestionCitasClass.classList.toggle('inactivo');

if(GestionUserClass.classList.contains('inactivo')){
    GestionUserClass.classList.remove('inactivo');
}
if(GestionHistorial.classList.contains('inactivo')){
    GestionHistorial.classList.remove('inactivo');
}
if(GestionReportes.classList.contains('inactivo')){
    GestionReportes.classList.remove('inactivo');
}

}
function aparecerHistorial(){GestionHistorial.classList.toggle('inactivo');

if(GestionCitasClass.classList.contains('inactivo')){
    GestionCitasClass.classList.remove('inactivo');
}
if(GestionUserClass.classList.contains('inactivo')){
    GestionUserClass.classList.remove('inactivo');
}
if(GestionReportes.classList.contains('inactivo')){
    GestionReportes.classList.remove('inactivo');
} 
}
function aparecerReportes(){GestionReportes.classList.toggle('inactivo');
if(GestionUserClass.classList.contains('inactivo')){
    GestionUserClass.classList.remove('inactivo');
}
if(GestionHistorial.classList.contains('inactivo')){
    GestionHistorial.classList.remove('inactivo');
}
if(GestionCitasClass.classList.contains('inactivo')){
    GestionCitasClass.classList.remove('inactivo');
} 
}

BotonGestionUser.addEventListener('click', aparecerUser);
BotonGestionCitas.addEventListener('click', aparecerCitas);
BotonGestionElementUser.addEventListener('click', aparecerReportes);
BotonGestionHistorial.addEventListener('click', aparecerHistorial);

