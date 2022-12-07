<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.lds-roller {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
  margin-top:20%;
  left:50%;
}
.lds-roller div {
  animation: lds-roller 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
  transform-origin: 40px 40px;
}
.lds-roller div:after {
  content: " ";
  display: block;
  position: absolute;
  width: 7px;
  height: 7px;
  border-radius: 50%;
  background: #fff;
  margin: -4px 0 0 -4px;
}
.lds-roller div:nth-child(1) {
  animation-delay: -0.036s;
}
.lds-roller div:nth-child(1):after {
  top: 63px;
  left: 63px;
}
.lds-roller div:nth-child(2) {
  animation-delay: -0.072s;
}
.lds-roller div:nth-child(2):after {
  top: 68px;
  left: 56px;
}
.lds-roller div:nth-child(3) {
  animation-delay: -0.108s;
}
.lds-roller div:nth-child(3):after {
  top: 71px;
  left: 48px;
}
.lds-roller div:nth-child(4) {
  animation-delay: -0.144s;
}
.lds-roller div:nth-child(4):after {
  top: 72px;
  left: 40px;
}
.lds-roller div:nth-child(5) {
  animation-delay: -0.18s;
}
.lds-roller div:nth-child(5):after {
  top: 71px;
  left: 32px;
}
.lds-roller div:nth-child(6) {
  animation-delay: -0.216s;
}
.lds-roller div:nth-child(6):after {
  top: 68px;
  left: 24px;
}
.lds-roller div:nth-child(7) {
  animation-delay: -0.252s;
}
.lds-roller div:nth-child(7):after {
  top: 63px;
  left: 17px;
}
.lds-roller div:nth-child(8) {
  animation-delay: -0.288s;
}
.lds-roller div:nth-child(8):after {
  top: 56px;
  left: 12px;
}
@keyframes lds-roller {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

</style>
<body style="background:#000;">
    
<div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>




<?PHP

$DNI=$_POST['Dni'];
$FECHA=$_POST['Fecha'];
$ESTADO='Pendiente';
$ESPECIALIDAD=$_POST['ESPECIALIDAD'];
/*$CHECKBOX=$_POST['CHECKBOX'];*/
$resultCheck="SI";

/*if($CHECKBOX=="on"){
     $resultCheck='SI';
}
if($CHECKBOX==null){
     $resultCheck='NO';
}*/

try{
    
/* PART SECOND */


session_start();


$conex= new PDO("mysql:host=localhost;dbname=proyecto_final","root","");

$conex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$usuario=$_SESSION["usuario"];

$cons2=$conex->query("SELECT*FROM loginusuarios WHERE USUARIO='$usuario'");
$res2=$cons2->fetchAll(PDO::FETCH_OBJ);
foreach ($res2 as $user):
$correoDNI=$user->DNI;
endforeach;


$cons=$conex->query("SELECT*FROM dim_citas WHERE DNI='$DNI'");


$res=$cons->fetchAll(PDO::FETCH_OBJ);
 foreach ($res as $usuarios):
$citaPendiente=null;
$citaPendiente=$usuarios->ESTADO;
$ValidarUser=$usuarios->DNI;
endforeach; 



/* PART FIRST */

    require("../baseDatos/conexionMysqli.php");

if($DNI==$correoDNI){

    if($citaPendiente=="Pendiente" or $citaPendiente=="PENDIENTE"){
       ?> <script>
        const conteo1=function(){ setTimeout(function() {
        alert("Usted ya tiene una cita Pendiente.");window.history.go(-1);
      }, 4000); }
conteo1();
        </script><?php
    }else if($citaPendiente=="Aceptado" or $citaPendiente==null){
   
    

    $insertar="INSERT INTO `dim_citas`(`DNI`, `FECHA`,`ESTADO`, `AreaProfesional`, `Notificarme`) VALUES (?,?,?,?,? )";
    
    $resultado=mysqli_prepare($conexion, $insertar);

    $ok=mysqli_stmt_bind_param($resultado, "issss", $DNI, $FECHA, $ESTADO, $ESPECIALIDAD, $resultCheck);
    
    $ok=mysqli_stmt_execute($resultado);
    if($ok==true){

        ?><script>
          const conteo=function(){ setTimeout(function() {
          
          alert("La cita a sido añadida.");window.history.go(-1);
        }, 4000); }
       conteo();
      
          
          
          </script><?php
    }else{
        ?>
        <script>
        
        const conteo=function(){ setTimeout(function() {
        alert("No se a podido agregar al usuario.");window.history.go(-1);
      }, 300000000); }
conteo();
          
        </script><?php
    }
}

}else{
  ?><script> alert("ERROR NO MANIPULAR LOS DATOS.");window.history.go(-1); </script> <?php
}
   


}catch(Exception $e){

    echo "Error: ".$e->getMessage();
    echo "Error: ".$e->getLine();

}
?>

</body>
</html>
