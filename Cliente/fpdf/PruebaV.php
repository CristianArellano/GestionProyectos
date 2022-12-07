<?php

require('./fpdf.php');

class PDF extends FPDF
{

   // Cabecera de página
   function Header()
   {




      //include '../../recursos/Recurso_conexion_bd.php';//llamamos a la conexion BD

      //$consulta_info = $conexion->query(" select *from hotel ");//traemos datos de la empresa desde BD
      //$dato_info = $consulta_info->fetch_object();
      $this->Image('../img/logo2.png', 0, 10, 50); //logo de la empresa,moverDerecha,moverAbajo,tamañoIMG
      $this->SetFont('Arial', 'B', 15); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
      $this->Cell(45); // Movernos a la derecha
      $this->SetTextColor(0, 0, 0); //color
      //creamos una celda o fila
      $this->Cell(120, 15, utf8_decode('Centro de Salud Comunitario Mental Samay'), 0, 1, 'C', 0); // AnchoCelda,AltoCelda,titulo,borde(1-0),saltoLinea(1-0),posicion(L-C-R),ColorFondo(1-0)
      $this->Ln(3); // Salto de línea
      $this->SetTextColor(103); //color

      /* UBICACION */
      $this->Cell(110);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(96, 10, utf8_decode("Ubicación : Virreyes 205, Rímac 15094"), 0, 0, '', 0);
      $this->Ln(5);

      /* TELEFONO */
      $this->Cell(110);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(59, 10, utf8_decode("Teléfono : 016011574"), 0, 0, '', 0);
      $this->Ln(5);

      /* COREEO */
      $this->Cell(110);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(85, 10, utf8_decode("Correo : samaySalud@gmail.com"), 0, 0, '', 0);
      $this->Ln(5);

      /* TELEFONO */
      $this->Cell(110);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(85, 10, utf8_decode("Adscrita : Diris LN"), 0, 0, '', 0);
      $this->Ln(25);

      /* TITULO DE LA TABLA */
      //color
      $this->SetTextColor(0,0,0);
      $this->Cell(50); // mover a la derecha
      $this->SetFont('Arial', 'B', 15);
      $this->Cell(100, 10, utf8_decode("Comprobante de Citas "), 0, 1, 'C', 0);
      $this->Ln(7);

      /* CAMPOS DE LA TABLA */
      //color
      $this->SetFillColor(255, 255, 255); //colorFondo
      $this->SetTextColor(0, 0, 0); //colorTexto
      $this->SetDrawColor(163, 163, 163); //colorBorde
      $this->SetFont('Arial', 'B', 11);
      $this->Cell(20, 10, utf8_decode('N°'), 1, 0, 'C', 1);
      $this->Cell(25, 10, utf8_decode('DNI'), 1, 0, 'C', 1);
      $this->Cell(70, 10, utf8_decode('Nombres y Apellidos'), 1, 0, 'C', 1);
      $this->Cell(40, 10, utf8_decode('Especialidad'), 1, 0, 'C', 1);
      $this->Cell(35, 10, utf8_decode('Fecha'), 1, 1, 'C', 1);
     
   }

   // Pie de página
   function Footer()
   {
      $this->SetY(-15); // Posición: a 1,5 cm del final
      $this->SetFont('Arial', 'I', 8); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
      $this->Cell(0, 10, utf8_decode('Página ') . $this->PageNo() . '/{nb}', 0, 0, 'C'); //pie de pagina(numero de pagina)

      $this->SetY(-15); // Posición: a 1,5 cm del final
      $this->SetFont('Arial', 'I', 8); //tipo fuente, cursiva, tamañoTexto
      $hoy = date('d/m/Y');
      $this->Cell(355, 10, utf8_decode($hoy), 0, 0, 'C'); // pie de pagina(fecha de pagina)
   }
}

//include '../../recursos/Recurso_conexion_bd.php';
//require '../../funciones/CortarCadena.php';
/* CONSULTA INFORMACION DEL HOSPEDAJE */
//$consulta_info = $conexion->query(" select *from hotel ");
//$dato_info = $consulta_info->fetch_object();

$pdf = new PDF();
$pdf->AddPage(); /* aqui entran dos para parametros (horientazion,tamaño)V->portrait H->landscape tamaño (A3.A4.A5.letter.legal) */
$pdf->AliasNbPages(); //muestra la pagina / y total de paginas

$i = 0;
$pdf->SetFont('Arial', '', 12);
$pdf->SetDrawColor(163, 163, 163); //colorBorde

/*$consulta_reporte_alquiler = $conexion->query("  ");*/

/*while ($datos_reporte = $consulta_reporte_alquiler->fetch_object()) {      
   }*/
$i = $i + 1;
/* TABLA */

session_start();
$usuario=$_SESSION["usuario"];
include('../baseDatos/conexionMysqli.php');
include("../baseDatos/conexionPDO.php");

$COD=$_GET['COD'];

$cons2=$conexion->query("SELECT*FROM loginusuarios WHERE USUARIO='$usuario'");
$res2=$cons2->fetchAll(PDO::FETCH_OBJ);
foreach ($res2 as $user):
$correoDNI=$user->DNI;
endforeach;


$consultaU=$conexion->query("SELECT*FROM dim_citas WHERE DNI='$correoDNI' AND Codigo='$COD'");

$resultado=$consultaU->fetchAll(PDO::FETCH_OBJ);


$cons=$conexion->query("SELECT*FROM dim_usuario WHERE DNI='$correoDNI'");

$res=$cons->fetchAll(PDO::FETCH_OBJ);
foreach ($resultado as $citas):
foreach ($res as $usuarios):
  
   $nombres=$usuarios->NOMBRES." ".$usuarios->APELLIDO_P." ".$usuarios->APELLIDO_M;
   $DNI=$usuarios->DNI;
   $nCita=$citas->Codigo;
   $especialidad=$citas->AreaProfesional;
   $fecha=$citas->FECHA;
$pdf->Cell(20, 10, utf8_decode($nCita), 1, 0, 'C', 0);
$pdf->Cell(25, 10, utf8_decode($DNI), 1, 0, 'C', 0);
$pdf->Cell(70, 10, utf8_decode($nombres), 1, 0, 'C', 0);
$pdf->Cell(40, 10, utf8_decode($especialidad), 1, 0, 'C', 0);
$pdf->Cell(35, 10, utf8_decode($fecha), 1, 1, 'C', 0);
endforeach;
endforeach;



$pdf->Output('Prueba.pdf', 'I');//nombreDescarga, Visor(I->visualizar - D->descargar)
