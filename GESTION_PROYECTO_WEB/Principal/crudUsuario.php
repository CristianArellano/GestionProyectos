

<style>
    h1{color:white;}

    p{

margin-top: 10px;
}

    .contenido {
        grid-area: contenido;
        display:grid;
        border: 2px solid rgba(0, 0, 0, 0.196);
        height:100%;
        justify-content: center;
        background-image: url("../z_recursos/img/fondo_gestion.jpg") !important;
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
        
        text-align: left;
        border-collapse:separate;
        width:100%;
        border:3px solid #000;
        border-radius: 10px;

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


    h6{
      font-size: 20px;
      margin-bottom: 10px !important;
    }

    .conteiner-buscador{
        padding:5px;
        color:white;
        display:flex;
        align-items: center;
        justify-content: start;
    }
   
    .btn-primary{
        padding:0;
        border:none;
        color:white;
        background-color: #246355;
        cursor:pointer;
        border-radius: 10px;
        width:100px;
        height: 30px;
        margin-left: 10px;
    }
    .btn-primary:focus{
        outline: 0;
    }
    label{
        color:#000;
        margin-left:10px;
        margin-right: 10px;
    }


    
    </style>

<?php

include("index.php")

?>

        <!--CONTENIDO-->
        <!-- CSS only -->

        <div class="contenido">
        <h1 style="color:white"><span>  Datos de los Usuarios</span></h1>

        <div class="conteiner-buscador">
            <form action="" method="GET">
             <label style="color:white">DNI:</label><input type="text" placeholder="7432XXXX"  name="buscarDNI"><input type="submit" name="boton-busqueda" class="btn btn-primary" value="Buscar">
</form>
            </div>
        
            <!-- si no da clik en boton de busqueda -->
            <div class="contenido-contenedor">
                
        <?php if(isset($_GET['boton-busqueda'])==false){  ?>
                      
               <?php include("../RegistrarDatosU/CrudUsuario.php"); ?>
               
               

            <!--si da click en busqueda-->
            <?php
           }


if(isset($_GET['boton-busqueda'])==true){
include("../conexionPDO.php");

$DNI=$_GET['buscarDNI'];


$consultaU=$conexion->query("SELECT*FROM dim_usuario  WHERE DNI like '%$DNI%'");

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
}

?>


    </div>



























<?php
           
?>







</div>
        </div>


    </div>

</body>

</html>