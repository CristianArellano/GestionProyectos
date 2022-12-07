  
<?php
function comprobar(){
try{


    $conexion=new PDO("mysql:host=localhost;dbname=proyecto_final",'root','');
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $usuario=htmlentities(addslashes($_POST['correo']));
    $contraseña=htmlentities(addslashes($_POST['contraseña']));
    $contador=0;
    

    $sql="SELECT*FROM `login` WHERE usuario='$usuario'";
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
        $_SESSION['user']=$_POST['correo'];
        header('Location:http://localhost/GESTION_PROYECTO_WEB/y_Login/loader.php');   
      }

}catch(Exception $e){

echo "ERROR DE:".$e->getMessage();

}finally{


}
}
comprobar();
?>

