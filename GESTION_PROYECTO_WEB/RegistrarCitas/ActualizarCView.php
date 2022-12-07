<?php

include("../Principal/index.php")

?>

<style>
    .elemento-c{color:white;
   
   position:flex;
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
$CODIGO=$_GET['COD'];
$DNI=$_GET['DNI'];
$FECHA=$_GET['FECHA'];
$AreaProfesional=$_GET['AreaProfesional'];
$Estado=$_GET['ESTADO'];
$Notificarme=$_GET['NOTIFICARME'];

?>

<style>p{

margin-top: 10px;
}
</style>

<div class="contenido">
    <div class="encabezado-contenido">
<h1 class="elemento-c h">Actualizar Datos <span> del Centro Samay</span></h1>
<p class="elemento-c p">Estas revisando: DNI: <?php echo $DNI ?> || Area Profesional: <?php echo $AreaProfesional ?> || Estado: <?php echo $Estado ?></p>
</div>
<div class="contenido-contenedor">
<form action="ActualizarC.php" method="GET">

  <table style="text-align:center">

<tr>
    <th>Nombre</th>
    <th>Campos</th>
</tr>


<tr>
    <input type="hidden" name="COD" VALUE="<?php echo $CODIGO ?>">
</tr>
<tr>
    <input type="hidden" name="DNI" VALUE="<?php echo $DNI ?>">
</tr>

<tr>
    <td>CODIGO</td>
    <td><?php echo $CODIGO ?></td>
</tr>

<tr>
    <td>DNI</td>
    <td><?php echo $DNI ?></td>
</tr>

<tr>
    <td>FECHA</td>
    <td><input type="text" name="FECHA" VALUE="<?PHP echo $FECHA?>"> </td>
</tr>
<tr>
    <td>Area Profesional</td>
    <td><input type="text" name="AreaProfesional" VALUE="<?PHP echo $AreaProfesional?>"> </td>
</tr>
<tr>
    <td> ESTADO </td>
    <td><input type="text" name="ESTADO" VALUE="<?php echo $Estado?>"></td>
</tr>
<tr>
    <td> NOTIFICACIÓN </td>
    <td><input type="text" name="Notificarme" VALUE="<?php echo $Notificarme?>"></td>
</tr>


<tr>
       <td colspan="2"> <input type="submit" name="actualizar" value="Actualizar"> </td>
</tr>
   </table>

</form>
</div>
</div>