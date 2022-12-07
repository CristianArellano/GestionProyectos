<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<style>p{

margin-top: 10px;
}
</style>    


<?php
$DNI=$_GET['DNI'];
$NOMBRE=$_GET['NOM'];
$APELLIDO_P=$_GET['APEP'];
$APELLIDO_M=$_GET['APEM'];
$EDAD=$_GET['EDAD'];
$SEXO=$_GET['SEXO'];
$NRO_CELULAR=$_GET['NRO_CELULAR'];
$DEPARTAMENTO=$_GET['DEP'];
$PROVINCIA=$_GET['PRO'];
$DISTRITO=$_GET['DIS'];
?>

<h1>Actualizar Datos <span> del Centro Samay</span></h1>
<p>Estas revisando: DNI: <?php echo $DNI ?> || NOMBRE: <?php echo $NOMBRE ?> || Apellido: <?php echo $APELLIDO_P ?></p>
<form action="ActualizarU.php" method="POST">

  <table style="text-align:center">

<tr>
    <input type="hidden" name="DNI" VALUE="<?php echo $DNI ?>">
</tr>
<tr>
    <td>NOMBRE</td>
    <td><input type="text" name="NOM" VALUE="<?PHP echo $NOMBRE?>"> </td>
</tr>
<tr>
    <td>APELLIDO PATERNO</td>
    <td><input type="text" name="APEP" VALUE="<?PHP echo $APELLIDO_P?>"> </td>
</tr>
<tr>
    <td> Apellido Materno </td>
    <td><input type="text" name="APEM" VALUE="<?php echo $APELLIDO_M?>"></td>
</tr>
<tr>
    <td>Edad</td>
    <td><input type="text" name="EDAD" VALUE="<?php echo $EDAD?>"></td>
</tr>
<tr>
    <td>Sexo</td>
    <td><input type="text" name="SEXO" VALUE="<?php echo $SEXO?>"></td>
</tr>
<tr>
    <td>Numero Celular</td>
    <td><input type="text" name="NRO_CELULAR" value="<?php echo $NRO_CELULAR?>"> </td>
</tr>
<tr>
    <td>Departamento</td>
    <td><input type="text" name="DEP" value="<?php echo $DEPARTAMENTO?>"> </td>
</tr>
<tr>
    <td>Provincia</td>
    <td><input type="text" name="PRO" value="<?php echo $PROVINCIA?>"> </td>
</tr>
<tr>
    <td>Distrito</td>
    <td><input type="text" name="DIS" value="<?php echo $DISTRITO?>"></td>
</tr>
<tr>
       <td colspan="2"> <input type="submit" name="actualizar" value="Actualizar"> </td>
</tr>
   </table>

</form>
</body>
</html>