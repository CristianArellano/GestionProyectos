<?php

include('conex.php');
use PHPUnit\Framework\TestCase;

class Test  extends TestCase{
    
/*public function testDB(){
   
    $resultado='';

$mysql = new conex();

    if($mysql->conectar()==true){

        $resultado=true;
    }else{
        $resultado= false;
    }
    return  $resultado;
}*/
public $prueba;

public function setUp():void{
    $this->prueba=new conex();
}

public function testDB(){
    
    $this->assertEquals(1, $this->prueba->conectar('localhost','proyectoaa_final','root',''));
 
 }




}


//$pruebita = new Test();
//echo $pruebita->testDB();

?>