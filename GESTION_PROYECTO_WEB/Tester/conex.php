<?php

class conex {

    public function conectar($localhost,$nombredb,$user,$password){
    try{
        $conexion= new PDO("mysql:host=$localhost;dbname=$nombredb","$user","$password");
    
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if($conexion==true){
            $result=1;
        }else{
            $result=0;
        }

     return $result;        
    
    }catch(Exception $e){
    
        ECHO "ERROR en :".$e->getline()."</br>";
        echo "DE NOMBRE: ".$e->getMessage()."</br>";
    
    }
    }

    

    
    
}

?>