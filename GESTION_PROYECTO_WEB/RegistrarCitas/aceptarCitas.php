

<?php
include("../conexion.php");

$codigo=$_GET['COD'];
$estd=$_GET['ESTADO'];
$estt=$_GET['EST'];



$consultaActualizar=$conexion->query("UPDATE `dim_citas` SET `ESTADO`='$estt' WHERE Codigo='$codigo'");

header("location:crudCitas.php");

?>



