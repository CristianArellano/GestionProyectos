<?php

include("../conexionPDO.php");

$COD=$_GET["COD"];

$consultaEliminar=$conexion->query("DELETE FROM `dim_citas` WHERE Codigo='$COD'");

echo "<script>alert(`Cita con \n     CODIGO: ${COD} \n ha sido eliminado. `);</script>";

header('location:crudCitas.php');

?>