<?php


function cerrarSesion(){
    
   
        session_start();
    session_destroy();
    header("location:http://localhost/Cliente/index.php");
    }
    
    cerrarSesion();
?>