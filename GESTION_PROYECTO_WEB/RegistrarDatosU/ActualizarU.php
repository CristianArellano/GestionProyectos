<?php

include("../conexion.php");

$DNI=$_POST['DNI'];
$NOMBRE=$_POST['NOM'];
$APELLIDO_P=$_POST['APEP'];
$APELLIDO_M=$_POST['APEM'];
$EDAD=$_POST['EDAD'];
$SEXO=$_POST['SEXO'];
$NRO_CELULAR=$_POST['NRO_CELULAR'];
$DEPARTAMENTO=$_POST['DEP'];
$PROVINCIA=$_POST['PRO'];
$DISTRITO=$_POST['DIS'];

$consultaActualizar=$conexion->query("UPDATE `dim_usuario` SET `NOMBRES`='$NOMBRE', `APELLIDO_P`='$APELLIDO_P', `APELLIDO_M`='$APELLIDO_M', `EDAD`='$EDAD', `SEXO`='$SEXO',  `NRO_CELULAR`='$NRO_CELULAR', `DEPARTAMENTO`='$DEPARTAMENTO', `PROVINCIA`='$PROVINCIA', `DISTRITO`='$DISTRITO' WHERE DNI=$DNI");
header("location:../Principal/crudUsuario.php");

?>