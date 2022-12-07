<?php

include("index.php")

?>

<style>
    .elemento-c{color:white;
   
   position:flex;
}

p{

margin-top: 10px;
}

.encabezado-contenido{
   
    height:50%;
}

    .contenido {
        grid-area: contenido;
        display:grid;
        
        border: 2px solid rgba(0, 0, 0, 0.196);
        height:100%;
        justify-content: center;
        background-image: url("../z_recursos/img/fondo_gestion.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        
    }
    .contenido-contenedor{
     display:grid;
    grid-template-columns: auto  ;
    grid-template-rows: 20rem 20rem;
    width:100%;
    height:66%;
    background: whitesmoke;
    border-radius: 20px;
    }
   

    table{
      
        background-color: white;
        text-align: left;
        border-collapse: collapse;
        width:100%;
    }

    th, td{
       padding: 10px;

    }
    th{
        background-color: #246355;
        border-bottom: solid 5px #0f362D;
        color:white;
    }
    tr:nth-child(even){
        background-color: #ddd;
    }
    tr:hover td{
        background-color: #369681;
        color:white;
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

<div class="contenido">
    <div class="encabezado-contenido">
<h1 class="elemento-c h">Actualizar Datos <span> del Centro Samay</span></h1>
<p class="elemento-c p">Estas revisando: DNI: <?php echo $DNI ?> || NOMBRE: <?php echo $NOMBRE ?> || Apellido: <?php echo $APELLIDO_P ?></p>
</div>
<div class="contenido-contenedor">
<form action="../RegistrarDatosU/ActualizarU.php" method="POST">

  <table style="text-align:center">

<tr>
    <th>Nombre</th>
    <th>Campos</th>
</tr>


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
</div>
</div>