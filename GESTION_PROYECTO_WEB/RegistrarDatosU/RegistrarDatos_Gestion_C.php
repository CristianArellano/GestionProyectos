<?PHP


$DNI=$_POST['dni'];
$NOMBRE=$_POST['nombre'];
$APELLIDO_P=$_POST['apellidoPaterno'];
$APELLIDO_M=$_POST['apellidoMaterno'];
$EDAD=$_POST['edad'];
$SEXO=$_POST['Sexo'];
$NUMERO=$_POST['numero'];
$DEPARTAMENTO=$_POST['departamento'];
$PROVINCIA=$_POST['provincia'];
$DISTRITO=$_POST['distrito'];
$ROL="Paciente";

try{
    $conex= new PDO("mysql:host=localhost;dbname=proyecto_final","root","");

    $conex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $consultad=$conex->query("SELECT*FROM distritos WHERE id='$DISTRITO'");
$result=$consultad->fetchAll(PDO::FETCH_OBJ);
 foreach ($result as $distrito):
$distritoF=$distrito->nombre;
 endforeach;

 $consulta2=$conex->query("SELECT*FROM provincias WHERE id='$PROVINCIA'");
$result2=$consulta2->fetchAll(PDO::FETCH_OBJ);
 foreach ($result2 as $provincia):
$provinciaf=$provincia->nombre;
 endforeach;

 $consulta3=$conex->query("SELECT*FROM departamentos WHERE id='$DEPARTAMENTO'");
$result3=$consulta3->fetchAll(PDO::FETCH_OBJ);
 foreach ($result3 as $departamento):
$departamentof=$departamento->nombre;
 endforeach;




    require("../conexion.php");


    $insertar="INSERT INTO `dim_usuario`(`DNI`, `ROL`, `NOMBRES`, `APELLIDO_P`, `APELLIDO_M`, `EDAD`, `SEXO`, `NRO_CELULAR`, `DEPARTAMENTO`, `PROVINCIA`, `DISTRITO`) VALUES ( ?,?,?,?,?,?,?,?,?,?,? )";
    
    $resultado=mysqli_prepare($conexion, $insertar);

    $ok=mysqli_stmt_bind_param($resultado, "issssisisss", $DNI, $ROL, $NOMBRE, $APELLIDO_P, $APELLIDO_M, $EDAD, $SEXO, $NUMERO, $departamentof, $provinciaf, $distritoF);
    
    $ok=mysqli_stmt_execute($resultado);
    
    if($ok==true){
        ?>
        <script>alert(`El ${ROL} a sido añadido.`);
    </script>
        <?php include('../Principal/index.php'); ?>
 
<style>

.contenido{
    grid-area:contenido;
 
    border:2px solid rgba(0, 0, 0, 0.196);
    background-image: url("../z_recursos/img/fondo_gestion.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    
}

</style>
<link href="../Style/Style_RegistrarDatosU/StyleregistrarDatosGestionC.css" rel="stylesheet" >


 <div class="contenido">
    
       
       <!--PRUEB-->
           <div class="login">
       <div class="form-container">  
      
       <div class="encabezado_contenido">
       
           <img src="../z_recursos/img/logo-minsa.png" alt="logo" class="logo_minsa">
           <h1 class="title">REGISTRO de usuario</h1>
       </div>
       

 <form action="Registrar_Login_C.php" method="POST" class="form_credenciales">
<label class="label" for="DNI">DNI:</label><input type="number" value="<?php echo $DNI?>"name="DNI" id="DNI" placeholder="743261XX" class="input input-email" readonly="readonly">

 <label class="label" for="email">Correo Electronico</label>
     <input type="email" name="correo" id="email" placeholder="ucv@edu.pe" class="input input-email" required>

     <label class="label" for="password">Contraseña</label>
     <input type="password" name="password" id="password" placeholder="*****" class="input input-password"  value="<?php echo $NOMBRE ?>"required>
     <input type="submit" value="Crear Cuenta" class="primary-button login-button">
    </div>
</form>


    </div>
    
    </div>

    </html>
    <?php
    //echo "".mysqli_affected_rows($conexion);
    }else{
        ?>
        <script>alert("No se a podido agregar al usuario.");window.history.go(-1);</script>
    <?php
    }

}catch(Exception $e){

    echo "Error: ".$e->getMessage();
    echo "Error: ".$e->getLine();

}



?>
