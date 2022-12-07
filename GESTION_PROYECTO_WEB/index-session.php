<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaz</title>

<style>

:root{
         
               
         --amarillo:#f6c23e;
         --verde:#1cc88a;
         --morado:#4e73df;
         --celeste:#36b9cc;
         --rojo:#e74a3b;
         --negro:#25252a;
         --blanco:#f8f9fc;
         --plomo:#37383e;
         --rojodegradado:linear-gradient(45deg, blue, red);
         --rojodegradado2:linear-gradient(to left top, blue, red);
         --rojoverdoso:linear-gradient(0deg, blue, green 40%, red);
         --triplecolor: linear-gradient(to right,red 20%,orange 20% 40%,yellow 40% 60%,green 60% 80%,blue 80%);
          --verdenegro:linear-gradient(45deg, rgb(2, 2, 2), rgb(0, 255, 136));
          --rasta:linear-gradient(red, yellow, green);
          --celeste2:linear-gradient(45deg, rgb(14, 13, 13), rgb(5, 196, 196));
         --blanco2:linear-gradient(100deg, rgb(255, 255, 255), rgb(5, 196, 196));

        /* --letramedia:;
         --letrapequeña:;
         --letragrande:;*/
     }

body{
        background:var(--blanco);
        margin:0px; 
    }
.contenedor-general{

    display:grid;
    grid-template-areas: 'sidebar header header' 
                         'sidebar contenido contenido';
   grid-template-rows: 3.2rem 100rem; /*largo*/
   grid-template-columns:15rem; /*ancho ---*/
   
}
a{
    text-decoration: none ;
    color:var(--blanco);
}

.header{
    grid-area:header;
    background:var(--blanco2);
    border:2px solid rgba(0, 0, 0, 0.196); 
    padding-top:0px;
    display:flex;
    justify-content:flex-end;
  
   
    
}

.contenedor-perfil{
    margin:0px;
    background: #f6c23e;
    width:35%;
    display:flex;
    flex-direction:row;
    justify-content:center;
}

.sidebar{
    grid-area:sidebar;
    background: var(--celeste2);
    display:flex;
    flex-direction: column;
    
    border:2px solid rgba(0, 0, 0, 0.196); 
    margin:-3px;
 
   
    
}

.elemento{
    margin-left:0px;
    text-align:start;
    color:var(--blanco);   
    
}

.elemento:hover{
  color:cyan;
  border-left: 8px solid greenyellow;
  background: var(--plomo);  
}



.principal{
background:var(--blanco);
text-align: center;

}

.logo{
    
    width:70%;
}



.dashboard{
    border-bottom:1px solid var(--blanco);
    border-top:1px solid var(--blanco);
    text-align: center;   
    
}

.usuarios{
    text-align: center;
}


.subcarpeta{
    display:none;
    text-align: end;
  
}

.elemento:hover > .subcarpeta{
    display:block;
}



.ver-usuarios{
    text-align: center; 
    
}


.ver-historial{
    text-align: center; 
}

.citas{
    text-align: center; 
}
.etiqueta{
    margin-left: 20px;
    color:var(--negro);
}

.contenido{
    grid-area:contenido;
    background: var(--white);
    border:2px solid rgba(0, 0, 0, 0.196); 

}





</style>
</head>
<body>

<?php
    session_start();
    if(!isset($_SESSION['user'])){
      
    header("location:http://localhost/GESTION_PROYECTOS/index.html");
    }
    $usuario=$_SESSION["user"];
?>

    
<div class="contenedor-general">

<div class="header">
<img src="./z_recursos/icons/facebook.svg">
<img src="./z_recursos/icons/whatsapp.svg">  

    
<div class="contenedor-perfil">
    <div class="informacion"><p>PERFIL</p></div></div>
</div>

<div class="sidebar">
    <div class="elemento principal">
        <img class="logo" src="./z_recursos/img/logo_samay.png" alt="logo">
    </div>

    <div class="elemento dashboard"><p><a href="#">Dashboard</a></p></div>
    <div class="etiqueta"><p>Interface</p></div> 


    <div class="elemento usuarios"><p><a href="#">Gestiones Usuarios</a></p>
        <div class="elemento subcarpeta"><p><a href="#">Registros Datos Usuarios</a></p></div>
        <div class="elemento subcarpeta"><p><a href="#">Modificar y Eliminar Usuarios</a></p></div></div>

    <div class="elemento citas"><p><a href="/">Gestión de citas</a></p>
    <div class="elemento subcarpeta"><p><a href="#">Registros De Citas</a></p></div>
    <div class="elemento subcarpeta"><p><a href="#">Modificar y Eliminar Citas</a></p></div></div>


    <div class="etiqueta"><p>Reportes</p></div> 
    <div class="elemento ver-usuarios"><p><a href="#">Usuarios</a></p>
    <div class="elemento subcarpeta"><p><a href="#">Record de usuarios</a></p></div></div>

    <div class="elemento ver-historial"><p><a href="#">Historial</a></p>
    <div class="elemento subcarpeta"><p><a href="#">Historial</a></p></div></div>

  

</div>

<div class="contenido">
    Contenido
</div>


</div>

</body>
</html>