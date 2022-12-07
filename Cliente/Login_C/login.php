<?php

try{

    $conexion=new PDO("mysql:host=localhost;dbname=proyecto_final",'root','');
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $usuario=htmlentities(addslashes($_POST['correo']));
    $contraseña=htmlentities(addslashes($_POST['contraseña']));
    $contador=0;

    $sql="SELECT*FROM `loginusuarios` WHERE usuario='$usuario'";
    $resultado=$conexion->prepare($sql);
    $resultado->execute();

    
     
      while($filas=$resultado->fetch(PDO::FETCH_ASSOC)){

       
        if(password_verify($contraseña, $filas['PASSWORD'])){
           $contador=$contador+1;
        
        } }

      if($contador==0){
  
      echo "<script>alert('Usuario o contraseña incorrecta');window.history.go(-1);</script>"; 

      }else{
        session_start();
        $_SESSION['usuario']=$_POST['correo'];
        header('Location:http://localhost/Cliente/index.php');   
      }

}catch(Exception $e){

echo "ERROR DE:".$e->getMessage();

}finally{


}





?>