

<?php
session_start();

if(!isset($_SESSION['user'])){
  
header("location:http://localhost/GESTION_PROYECTO_WEB/y_Login/Login.php");
}
$usuario=$_SESSION["user"];


include('../conexion.php');

include("../conexionPDO.php");


$cons2=$conexion->query("SELECT*FROM login WHERE USUARIO='$usuario'");
$res2=$cons2->fetchAll(PDO::FETCH_OBJ);
foreach ($res2 as $user):
$correoDNI=$user->DNI;
endforeach;

$cons=$conexion->query("SELECT*FROM dim_usuario WHERE DNI='$correoDNI'");

$res=$cons->fetchAll(PDO::FETCH_OBJ);


//$consultardatos=$conexion->query("SELECT*FROM `dim_usuario` WHERE usuario='$usuario'")


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaz</title>
    <link rel="shortcut icon" href="../z_recursos/img/logo_samay - copia.png">
    <!-- CSS only -->
    
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
        font-family: monospace;
       
    }

.contenedor-general{

    display:grid;
    grid-template-areas: 'sidebar header header' 
                         'sidebar contenido contenido';
   grid-template-rows: 3.5rem 100% 3.5rem ; /*largo*/
   grid-template-columns:16rem; /*ancho ---*/
   
   
   
}
a{ 
    text-decoration: none !important;
    color:var(--blanco) !important;
}

.header{
    grid-area:header;
    background-image: linear-gradient(10deg, #b2eaff 0, #5389f2 10%, #003265 100%);
     border-bottom-right-radius: 20px;
    border:2px solid rgba(0, 0, 0, 0.196); 
    padding-top:0px;
    display:flex;
   justify-content: space-around;
   align-items: center;
   padding-left:100px;
    
   
    
}

.contenedor-perfil{
    margin-left:10px;
    width:35%;
    display:flex;
    flex-direction:row;
    justify-content:center;
    color:white;
    
}
body{
    background-color: #f8f9fc;
}

.sidebar{
    grid-area:sidebar;
    
    display:flex !important;
    flex-direction: column !important;
    border:2px solid rgba(0, 0, 0, 0.196) !important;
    margin:-3px !important;
    font-size: 1.2em !important;
    height: 100% !important;
    background-image: linear-gradient(10deg, #b2eaff 0, #5389f2 10%, #003265 100%);
    border-left:10px solid #25252a;
    margin-bottom:60px !important;

   
    
}



.elemento{
    
    text-align:start;
    color:var(--blanco);  
    background: #25252a; 
    margin-top:10px;    
    border-radius: 10px;
    background-image: linear-gradient(10deg, #b2eaff 0, #5389f2 10%, #003265 100%);

    
    
}

.elemento:hover{
  color:var(--blanco);
  border-left: 8px solid greenyellow;
  
}



.principal{
    background:url("../z_recursos/img/fondo_blanco.jpg");
    border-radius: 50%;
    background-repeat: no-repeat;
    background-size: cover;
text-align: center;
}

.principal:hover{
    cursor:pointer;


}


.logo{
    
    width:70%;
    margin: 40px;
}



.dashboard{
    border-bottom:1px solid var(--blanco);
    border-top:1px solid var(--blanco);
    text-align: center;   
    
}

.usuarios{
    text-align: center;
   
}


.GestionUsers{
    display: block;
}


.subcarpeta{
 
    text-align: end;
}
.gestionUser{
    display:none;
}
.gestionCitas{
    display:none
}
.gestionReportes{
    display:none;   
}

.gestionHistorial{
    display:none;
}

.inactivo{
    display:block;
}


.logoelement{
    height: 150px;
}

/*
.elemento:hover > .subcarpeta{
    display:block;
}*/



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
    color:var(--blanco);
}

.contenido{
    grid-area:contenido;
    background: var(--white);
    border:2px solid rgba(0, 0, 0, 0.196); 
    margin-left: 3px;

}
.facebook{
    height: 100%;
    
}

@keyframes animacion{
    0%{height: 80%}
    25%{height: 110%;}
    50%{height: 80%;}
    75%{height: 110%;}
    100%{height: 80%;}
}
.header h1{
        animation-name:animacion;
        animation-duration:2s;
        animation-iteration-count: infinite;
    font-size: 2em;

    color:white;
}


.socialbar{
    position:fixed;
    right: 0;
    top:35%;
    font-size:1.5rem;
    display:flex;
    flex-direction:column;
    align-items: flex-end;
    z-index: 100;
}

.icono{
    color:white;
    text-decoration: none;
    padding: .7rem;
    display:flex;
    transition:all .5s;

}
.icono_facebook{
    background:var(--negro);
   
}
.whatsapp{
    background:var(--negro);
}
.twitter{
    background:var(--negro);
}
.icono_instagram{
    background:var(--negro);
}
.icono:first-child{
    border-radius:1rem 0 0 0;
}

.icono:last-child{
    border-radius:0 0 0 1rem;
}

.icono:hover{
    padding-right: 3rem;
    border-radius:1rem 0 0 1rem;
    box-shadow: 0 0 .5rem rgba(0,0,0,0.42);
}

#home{
    color:#1cc88a;  
    margin-top:5px;
    animation-name:animationHome;
    animation-duration:5s;
    animation-iteration-count: infinite; 
}

@keyframes animationHome{
    0%{ color:#1cc88a;}
    30%{color:darkcyan}
    70%{ color:aquamarine}     
}


.imagen_bd{
    width:40px; 
    height:40px; 
    border-radius:50%;
}

</style>

<!--<script src="./z_recursos/Jquery/jquery-1.6.3.min.js"></script>
<script>
    $(function(){
        $("body").hide().fadeIn(1000);
    });
</script>
-->
</head>
<body>

    
<div class="contenedor-general">


<div class="header">
<div style="margin-left:-115px;"><a href="#" name="salir-session"><img src="../z_recursos/img/bx-menu.svg"></a></div>
    <a href="http://localhost/GESTION_PROYECTO_WEB/Principal/dashboard.php"><h6 id="home">HOME</h6></a>
    <h1>Intranet de Administración </h1>
    <div class="redes">

</div>
    
<div class="contenedor-perfil">
    <div class="informacion"><p>

    <b>   <label style="color:whitesmoke">Usuario: </b><?php
        foreach ($res as $usuarios):
       echo  "  ",$usuarios->NOMBRES;
       echo " ",$usuarios->APELLIDO_P;
       echo " ",$usuarios->APELLIDO_M;

      ?> <b><br><label style="color:whitesmoke">Funciones:</b>
      <?php echo "", $usuarios->ROL; ?>
      <?php
       
    endforeach;
       ?></label>
    </p></div></div>

    <div>

    <?php
$sqlFoto2=$conexion->query("SELECT*FROM dim_usuario WHERE DNI='$correoDNI'");
$resultFot=$sqlFoto2->fetchAll(PDO::FETCH_OBJ);
foreach ($resultFot as $UserL):
$nombreIMG=$UserL->FOTO;
endforeach;
    ?>

        <img  class="imagen_bd" src="/img/<?php echo $nombreIMG?>"  alt="">
    </div>

    <div class="cerrar-buttom"><a href="../y_Login/cerrarsesion.php" name="salir-session"><img src="../z_recursos/icons/salir_door.svg"></a></div>
</div>


<div class="sidebar">
    <div style="margin-top:10px; margin-bottom:20px;" class="logoelement elemento principal">
        <img  class="logo" src="../z_recursos/img/logo_samay.png" alt="logo">
    </div>
    <div class="elemento dashboard"><p><img class="icon-user"  style="margin-top:-5px;width:24px; height:24px;"  src="../z_recursos/img/inicio.svg" alt=""> <a href="../Principal/dashboard.php">INICIO</a></p></div>

    <div class="elemento dashboard"><p><img class="icon-user"  style="margin-top:-5px;width:24px; height:24px;"  src="../z_recursos/img/dash.svg" alt=""> <a href="#" onclick="alert('EN DESARROLLO');">Dashboard</a></p></div>
    <div class="etiqueta"><p>Interface</p></div> 


    <div class="elemento usuarios">
        
    <a class="GestionUsers" href="#"> <p><img class="icon-user" style="margin-top:-10px;width:24px; height:24px;" src="../z_recursos/icons/gestion.svg" alt=""> Gestiones Usuarios  </p></a>
    <div class="gestionUser">
        <div class="elemento subcarpeta "><p><img class="icon-user" style="margin-top:-10px;width:24px; height:24px;" src="../z_recursos/icons/user-add.svg" alt=""><a href="../RegistrarDatosU/registrar-datos_c.php">Registrar Usuarios</a></p></div>
        <div class="elemento subcarpeta "><p><img class="icon-user" style="margin-top:-10px;width:24px; height:24px;" src="../z_recursos/icons/user-add.svg" alt=""> <a  href="../RegistrarDatosU/registrar-datos.php">Registrar Personal</a></p></div>
        <div class="elemento subcarpeta "><p><img class="icon-user" style="margin-top:-10px;width:24px; height:24px;" src="../z_recursos/icons/configuration.svg" alt=""><a  href="../Principal/crudUsuario.php">Modificar y Eliminar Datos de Usuarios</a></p></div>
    </div>
   </div>

    
   <div class="elemento citas">  <a href="#" class="elementCitas"><p><img class="icon-user"  style="margin-top:-10px;width:24px; height:24px;"  src="../z_recursos/icons/gestion.svg" alt="">   Gestión de citas</p></a>
<div class="gestionCitas">
    <div class="elemento subcarpeta"><p><a  href="../RegistrarCitas/registrar-citas.php">Registros De Citas</a></p></div>
    <div class="elemento subcarpeta"><p><a  href="../RegistrarCitas/crudCitas.php">Modificar y Eliminar Citas</a></p></div></div>
</div>

   
    <div class="etiqueta"><p>Reportes</p></div> 

    <div class="elemento ver-usuarios"> <a href="#" class="elementUsuarios"><p><img class="icon-user" style="margin-top:-15px;width:28px; height:28px;" src="../z_recursos/icons/user-color.svg" alt="">  Cuenta</p></a>
    <div class="gestionReportes"> 
    <div class="elemento subcarpeta"><p><a  href="../Gestión_Cuenta/indexCuenta.php">Modificar datos</a></p></div></div>
</div>


<div class="elemento ver-historial"><a  href="#" class="elementHistorial"><p>Historial</p><a  href="#">
<div class="gestionHistorial">
    <div class="elemento subcarpeta"><p><a  href="#">Historial</a></p></div></div>
</div>

</div>

<div class="socialbar">
<a href="#" class="icono icono_facebook" target="_blank"><img src="../z_recursos/icons/facebook_2.svg"></a>
<a  href="#" class="icono twitter" target="_blank"><img src="../z_recursos/icons/youtube.svg"></a>
<a  href="#" class="icono whatsapp" target="_blank"><img src="../z_recursos/icons/whatsapp.svg"></a>
<a  href="#" class="icono icono_instagram" target="_blank"><img src="../z_recursos/icons/telefono.svg"></a>
</div>
<script src="jquery.js"></script>
<script src="../Principal/jquery.js "></script>





