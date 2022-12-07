
<?php

session_start();

if(!isset($_SESSION['user'])){
  
header("location:http://localhost/GESTION_PROYECTO_WEB/y_Login/Login.php");
}else{
    include("../conexionPDO.php");

$usuario=$_SESSION["user"];


$cons3=$conexion->query("SELECT*FROM login WHERE USUARIO='$usuario'");
$res3=$cons3->fetchAll(PDO::FETCH_OBJ);
foreach ($res3 as $user):
$correoDNI=$user->DNI;
endforeach;

}


$nombre_imagen=$_FILES['imagen']['name'];
$tipo_imagen=$_FILES['imagen']['type'];
$tamaño_imagen=$_FILES['imagen']['size'];


if($tipo_imagen="image/jpg"|| $tipo_imagen=="image/png" || $tipo_imagen="imagen/gif" ){


    //ruta de la carpeta de destino en servidor

    $carpeta_destino=$_SERVER['DOCUMENT_ROOT'] . '/img/';


    //Mover la imagen del directorio temporal al directorio escogido;
    move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta_destino.$nombre_imagen);
}else{
    echo "No se puede subir ese tipo de archivo";
}

require('../conexion.php');

if(mysqli_connect_errno()){
    echo "Fallo de conexión";
exit();
}

mysqli_select_db($conexion,$db_name) or die("No se encuentra la base de datos");

$sqlFoto="UPDATE dim_usuario SET FOTO='$nombre_imagen' WHERE DNI='$correoDNI'";

$resultadoFoto=mysqli_query($conexion, $sqlFoto);


header('location:http://localhost/GESTION_PROYECTO_WEB/Gesti%C3%B3n_Cuenta/indexCuenta.php');


?>
