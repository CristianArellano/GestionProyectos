

<?php

include("../conexionPDO.php");

$consultaU=$conexion->query("SELECT*FROM dim_usuario");

$resultado=$consultaU->fetchAll(PDO::FETCH_OBJ);
?>




<form action="Insertar.php" method="POST">
 <table  style="text-align:center; margin:0px auto;">
    <tr>
        <th>DNI</th>
        <th>NOMBRES</th>
        <th>APELLIDO PATERNO</th>
        <th>APELLIDO MATERNO</th>
        <th>EDAD</th>
        <th>SEXO</th>
        <th>NRO_CELULAR</th>
        <th>DEPARTAMENTO</th>
        <th>PROVINCIA</th>
        <th>DISTRITO</th>
        <th>Modificar</th>
    </tr>

<?php foreach ($resultado as $usuarios):?>

    <tr>
        <td><?php echo $usuarios->DNI;?></td>
        <td><?php echo $usuarios->NOMBRES;?></td>
        <td><?php echo $usuarios->APELLIDO_P;?></td>
        <td><?php echo $usuarios->APELLIDO_M;?></td>
        <td><?php echo $usuarios->EDAD;?></td>
        <td><?php echo $usuarios->SEXO;?></td>
        <td><?php echo $usuarios->NRO_CELULAR;?></td>
        <td><?php echo $usuarios->DEPARTAMENTO;?></td>
        <td><?php echo $usuarios->PROVINCIA;?></td>
        <td><?php echo $usuarios->DISTRITO;?></td>
        <td>
            <a href="../RegistrarDatosU/EliminarU.php?DNI=<?php echo $usuarios->DNI?>"><input type="button" name="Borrar" value="Borrar"></a>
            <a href="crudUsuarioActualizar.php?DNI=<?php echo $usuarios->DNI?> & NOM=<?php echo $usuarios->NOMBRES?> & APEP=<?PHP echo $usuarios->APELLIDO_P?> & APEM=<?PHP echo $usuarios->APELLIDO_M ?> & EDAD=<?PHP echo $usuarios->EDAD?>& SEXO=<?PHP echo $usuarios->SEXO?> & NRO_CELULAR=<?PHP echo $usuarios->NRO_CELULAR?> & DEP=<?PHP echo $usuarios->DEPARTAMENTO?> & PRO=<?PHP echo $usuarios->PROVINCIA?> & DIS=<?PHP echo $usuarios->DISTRITO?>"><input type="button" name="Actualizar" value="Actualizar"></a>
        </td>
    </tr>
<?php
endforeach;
?>
