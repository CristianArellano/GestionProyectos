<?php

include("../Principal/index.php");



?>

<style>
    h1{color:white;}
    p{

margin-top: 10px;
}


    .contenido {
        grid-area: contenido;
        display:grid;
        background:white;
        border: 2px solid rgba(0, 0, 0, 0.196);
        height:100%;
        justify-content: center;
        background-image: url("../z_recursos/img/fondo_gestion.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        
    }
    .contenido-contenedor{
     display:grid;
    grid-template-columns: auto auto auto;
    grid-template-rows: 20rem 20rem;
    width:100%;
    height:80%;
   
    
     
    background: whitesmoke;
    border-radius: 20px;
    overflow-y: scroll;
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

    .conteiner-buscador{
        padding:5px;
        color:white;
        display:flex;
        align-items: center;
        justify-content: start;
    }

    h6{
        font-size: 1.5em;
        margin-top: 40px !important;
    }
    </style>


        <!--CONTENIDO-->

        <div class="contenido">
        <h1>CRUD<span> Banco de datos</span></h1>

        <div class="conteiner-buscador">
            <form action="" method="GET">
             <label style="margin-left:10px;">Filtro de DNI:</label><input  style="margin-left:10px" type="text" placeholder="7432XXXX" name="buscarDNI"><input type="submit" name="boton-busqueda" value="Buscar">
             <label style="margin-left:50px;">Filtro de Fechas: </label> 
             <select name="fechas" >
             <?php
             require("../conexionPDO.php");
             $sql = "SELECT FECHA FROM dim_citas";
             $stmt= $conexion->prepare($sql);
             $resultado= $stmt->execute();
             $rows=$stmt->fetchAll(\PDO::FETCH_OBJ);
             foreach($rows as $row){
                while($row != $valorRepetido){
               $valorRepetido=$row;
             ?>
                
               <option value="<?php print($row->FECHA) ?>"><?php print($row->FECHA) ?></option>
                <?php  
            }
        }
        
?>

             </select><input style="margin-left:10px" type="submit" name="busqueda-fecha" value="Buscar Fecha">


             <!--<label style='margin-left:100px;'>FECHA:</label><input type="date"  name="buscarFecha"><input style="margin-left:10px; margin-bottom:10px;" type="submit" name="boton-busqueda" value="Buscar">-->

            </form>
            </div>
        
            <!-- si no da clik en boton de busqueda -->
            <div class="contenido-contenedor">
                
        <?php if(isset($_GET['boton-busqueda'])==false and isset($_GET['busqueda-fecha'])==false ){  
              
            ?>
 
               <?php include("crudCitas-alter.php"); ?>
               
            <!--si da click en busqueda-->
            <?php
           }

if(isset($_GET['boton-busqueda'])==true){
include("../conexionPDO.php");

$DNI=$_GET['buscarDNI'];


$consultaU=$conexion->query("SELECT*FROM `dim_citas` WHERE DNI like '%$DNI%'");

$resultado=$consultaU->fetchAll(PDO::FETCH_OBJ);
?>

<form action="Insertar.php" method="POST">
 <table  style="text-align:center; margin:0px auto;">
    <tr>
        <th>CODIGO</th>
        <th>DNI</th>
        <th>FECHA</th>
        <th>AREA PROFESIONAL</th>
        <th>ESTADO</th>
        <th>NOTIFICACIÓN</th>
        <th>Modificar</th>
    
    </tr>

<?php foreach ($resultado as $citas):?>

    <tr>
        <td><?php echo $citas->Codigo;?></td>
        <td><?php echo $citas->DNI;?></td>
        <td><?php echo $citas->FECHA;?></td>
        <td><?php echo $citas->AreaProfesional;?></td>
        <td><?php echo $citas->ESTADO;?></td>
        <td><?php echo $citas->Notificarme;?></td>
        <td>
        <a href="aceptarCitas.php?COD=<?php echo $citas->Codigo?> & ESTADO=<?php echo $citas->ESTADO?>"><input type="button" name="Aceptar" value="Aceptar"></a>
            <a href="crudCitas-eliminar.php?COD=<?php echo $citas->Codigo?>"><input type="button" name="Borrar" value="Borrar"></a>
            <a href="ActualizarCView.php?COD=<?php echo $citas->Codigo?> & DNI=<?php echo $citas->DNI?> &  FECHA=<?PHP echo $citas->FECHA?> & AreaProfesional=<?php echo $citas->AreaProfesional?> & ESTADO=<?PHP echo $citas->ESTADO ?> & NOTIFICARME=<?PHP echo $citas->Notificarme?>"><input type="button" name="Actualizar" value="Actualizar"></a>
        </td>
    </tr>
<?php
endforeach;
}


include("../conexionPDO.php");

if(isset($_GET['busqueda-fecha'])==true){

    
    
    $FECHA=$_GET['fechas'];
    
    
    $consultaU=$conexion->query("SELECT*FROM `dim_citas` WHERE FECHA like '%$FECHA%'");
    
    $resultado=$consultaU->fetchAll(PDO::FETCH_OBJ);
    ?>
    
    <form action="Insertar.php" method="POST">
     <table  style="text-align:center; margin:0px auto;">
        <tr>
            <th>CODIGO</th>
            <th>DNI</th>
            <th>FECHA</th>
            <th>AREA PROFESIONAL</th>
            <th>ESTADO</th>
            <th>NOTIFICACIÓN</th>
            <th>Modificar</th>
        
        </tr>
    
    <?php foreach ($resultado as $citas):?>
    
        <tr>
            <td><?php echo $citas->Codigo;?></td>
            <td><?php echo $citas->DNI;?></td>
            <td><?php echo $citas->FECHA;?></td>
            <td><?php echo $citas->AreaProfesional;?></td>
            <td><?php echo $citas->ESTADO;?></td>
            <td><?php echo $citas->Notificarme;?></td>
            <td>
            <a href="aceptarCitas.php?COD=<?php echo $citas->Codigo?> & ESTADO=<?php echo $citas->ESTADO?>"><input type="button" name="Aceptar" value="Aceptar"></a>
                <a href="crudCitas-eliminar.php?COD=<?php echo $citas->Codigo?>"><input type="button" name="Borrar" value="Borrar"></a>
                <a href="ActualizarCView.php?COD=<?php echo $citas->Codigo?> & DNI=<?php echo $citas->DNI?> &  FECHA=<?PHP echo $citas->FECHA?> & AreaProfesional=<?php echo $citas->AreaProfesional?> & ESTADO=<?PHP echo $citas->ESTADO ?> & NOTIFICARME=<?PHP echo $citas->Notificarme?>"><input type="button" name="Actualizar" value="Actualizar"></a>
            </td>
        </tr>
    <?php
    endforeach;
    }

    



?>


    </div>

