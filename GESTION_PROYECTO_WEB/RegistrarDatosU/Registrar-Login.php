


<?php

try{

    $conexion= new PDO("mysql:host=localhost;dbname=proyecto_final","root","");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $DNI=$_POST["DNI"];
    $usuario=htmlentities(addslashes($_POST["correo"]));
    $contraseña=htmlentities(addslashes($_POST["password"]));
    $cifrado=password_hash($contraseña, PASSWORD_DEFAULT);


    $consulta="INSERT INTO login(`USUARIO`,`PASSWORD`,`DNI`) VALUES (:user,:contra,:dni)";
    
    $resultado=$conexion->prepare($consulta);

    $resultado->execute(array(":user"=>$usuario, ":contra"=>$cifrado, ":dni"=>$DNI));

    $comprobar=$resultado->rowCount();
    
    if($comprobar==0){
      
        echo "<script>alert('ERROR AL INSERTAR DATOS')window.history.go(-1);</script>";
    }else{

        ?>
       <script>
        $mensaje="Registro exitoso. ¿Desea continuar agregando usuarios?";
         if(confirm($mensaje)){
         window.location='http://localhost/GESTION_PROYECTO_WEB/RegistrarDatosU/registrar-datos.php';
         }else{
         window.location='http://localhost/GESTION_PROYECTO_WEB/Principal/dashboard.php';
         }
         </script>

<?php
    }


}catch(Exception $e){
    echo "ERROR".$e->getMessage();
}




?>