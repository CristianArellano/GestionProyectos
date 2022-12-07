

<?php

include("../conexionPDO.php");

$consultaU=$conexion->query("SELECT*FROM dim_citas");

$resultado=$consultaU->fetchAll(PDO::FETCH_OBJ);
?>

<form action="aceptarCitas.php" method="POST">
 <table  style="text-align:center; margin:0px auto;">
 <tr>
        <th>CODIGO</th>
        <th>DNI</th>
        <th>FECHA</th>
        <th>AREA PROFESIONAL</th>
        <th>NOTIFICACIÓN</th>
        <th>ESTADO</th>
        <th>Modificar</th>
    </tr>

<?php  



?>    

<?php foreach ($resultado as $citas):
    
    $estadoModificar;
    $elEstado = $citas->ESTADO;
    
    if($elEstado=='Aceptado'){
        $estadoModificar='Pendiente';
    }else{
        $estadoModificar='Aceptado';
    }
    ?>


    <tr>
        <td><?php echo $citas->Codigo;?></td>
        <td><?php echo $citas->DNI;?></td>
        <td><?php echo $citas->FECHA;?></td>
        <td><?php echo $citas->AreaProfesional;?></td>
        <td><?php echo $citas->Notificarme;?></td>
        <td><?php echo $citas->ESTADO;?></td>
      
        <td>
        <a href="aceptarCitas.php?COD=<?php echo $citas->Codigo?> & ESTADO=<?php echo $citas->ESTADO?> & EST=<?php echo $estadoModificar?>"><input type="button" name="Aceptar" value="<?php echo $estadoModificar?>"></a>
            <a href="crudCitas-eliminar.php?COD=<?php echo $citas->Codigo?>"><input type="button" name="Borrar" value="Borrar"></a>
            <a href="ActualizarCView.php?COD=<?php echo $citas->Codigo?> & DNI=<?php echo $citas->DNI?> &  FECHA=<?PHP echo $citas->FECHA?> & AreaProfesional=<?php echo $citas->AreaProfesional?> & ESTADO=<?PHP echo $citas->ESTADO ?> & NOTIFICARME=<?PHP echo $citas->Notificarme?>"><input type="button" name="Actualizar" value="Actualizar"></a>
        </td>
    </tr>
<?php
endforeach;
?>
</form>
