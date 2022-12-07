<?php

include("../conexion.php");

$COD=$_GET['COD'];
$DNI=$_GET['DNI'];
$FECHA=$_GET['FECHA'];
$AREA=$_GET['AreaProfesional'];
$ESTADO=$_GET['ESTADO'];
$NOTIFICARME=$_GET['Notificarme'];

$consultaActualizar=$conexion->query("UPDATE `dim_citas` SET `DNI`='$DNI', `FECHA`='$FECHA', `AreaProfesional`='$AREA', `ESTADO`='$ESTADO', `Notificarme`='$NOTIFICARME' WHERE Codigo='$COD'");
header("location:crudCitas.php");

?>