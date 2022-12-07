<?php

include("../conexionPDO.php");

$DNI=$_GET["DNI"];

$consultaEliminar=$conexion->query("DELETE FROM `dim_usuario` WHERE DNI='$DNI'");
$consultaEliminar1=$conexion->query("DELETE FROM `loginusuarios` WHERE DNI='$DNI'");



echo "<script>alert('Usuario Eliminado');</script>";

header('location:../Principal/crudUsuario.php');

?>