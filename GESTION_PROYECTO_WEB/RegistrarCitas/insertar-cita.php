<?PHP


$DNI=$_POST['DNI'];
$FECHA=$_POST['FECHA'];
$ESTADO='PENDIENTE';
$ESPECIALIDAD=$_POST['ESPECIALIDAD'];
$CHECKBOX=$_POST['CHECKBOX'];
$resultCheck;

if($CHECKBOX=="on"){
     $resultCheck='SI';
}
if($CHECKBOX==null){
     $resultCheck='NO';
}


try{
    require("../conexion.php");

    $insertar="INSERT INTO `dim_citas`(`DNI`, `FECHA`,`ESTADO`, `AreaProfesional`, `Notificarme`) VALUES (?,?,?,?,? )";
    
    $resultado=mysqli_prepare($conexion, $insertar);

    $ok=mysqli_stmt_bind_param($resultado, "issss", $DNI, $FECHA, $ESTADO, $ESPECIALIDAD, $resultCheck);
    
    $ok=mysqli_stmt_execute($resultado);

    
    if($ok==true){

        ?><script>alert("La cita a sido añadida.");window.history.go(-1);</script><?php

    }else{
        ?>
        <script>alert("No se a podido agregar al usuario.");window.history.go(-1);</script><?php

    }

   
}catch(Exception $e){

    echo "Error: ".$e->getMessage();
    echo "Error: ".$e->getLine();

}


