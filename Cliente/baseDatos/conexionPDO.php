<?php

try{
    $conexion= new PDO("mysql:host=localhost;dbname=proyecto_final","root","");

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(Exception $e){

    ECHO "ERROR en :".$e->getline()."</br>";
    echo "DE NOMBRE: ".$e->getMessage()."</br>";

}




?>