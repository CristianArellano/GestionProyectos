<style>
   
   form{

    width: 100% !important;
    height: 100% !important;
    text-align: center;
   }
    table{
        
        text-align: center;
        border-collapse:separate;
        width:134%;
        border-radius: 10px;


    }

    th, td{
        text-align: center;
       
       padding: 10px;
       border-top:1px solid #ddd;
      

    }
    th{
        
      background-color: #246355;      
        border-bottom: solid 5px #0f362D;
        color:white;
        margin-top:10px;
    }
    tr:nth-child(even){
        
        background-color: #ddd;
    }
    tr:hover td{
        
        background-color: #369681;
        color:white;
    }
    td{
        margin: 50px;
    }
    .container-scroll{
        background-color:white;
        opacity: 1;
        padding:2px;
        display:grid;
    grid-template-columns: auto auto auto;
    grid-template-rows: 20rem 20rem;
    width:100%;
    height:65%;
    border-radius: 20px;
    overflow-y: scroll;
    }
</style>


<?php
 session_start();
$usuario=$_SESSION["usuario"];
include('./baseDatos/conexionMysqli.php');
include("./baseDatos/conexionPDO.php");


$cons2=$conexion->query("SELECT*FROM  loginusuarios WHERE USUARIO='$usuario'");
$res2=$cons2->fetchAll(PDO::FETCH_OBJ);
foreach ($res2 as $user):
$correoDNI=$user->DNI;
endforeach;

$cons=$conexion->query("SELECT*FROM dim_usuario WHERE DNI='$correoDNI'");

$res=$cons->fetchAll(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Pagina Samy">
  <meta name="author" content="Arellano">

  <title>Centro Samay | Diris II</title>

  <!-- css -->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
  <link href="css/nivo-lightbox.css" rel="stylesheet" />
  <link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
  <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
  <link href="css/animate.css" rel="stylesheet" />
  <link href="css/style4.css" rel="stylesheet">

  <!-- boxed bg -->
  <link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
  <!-- template skin -->
  <link id="t-colors" href="color/default.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">



<nav style="background: linear-gradient(210deg, #505467 0, #1f3259 50%, #00154b 100%); border-radius:1%; padding:1px;" class="navbar navbar-custom navbar-fixed-top" role="navigation">
      
      <div class="container navigation">

        <div class="navbar-header page-scroll" style="margin-top:-20px !important;">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
          <a class="navbar-brand" href="index.html">
                    <img src="img/logo.png" alt=""  width="150" height="60"/>
                </a>
        </div>

     


        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#intro"> Citas</a></li>
            <li><a href="#service">Registrar Cita</a></li>
            <li><a href="#doctor">Configuración</a></li>
            <li class="dropdown">
            <?php

foreach ($res as $usuarios):
if(!isset($_SESSION['usuario'])){?>
 
<li style="top:15px;"><a href="./Login/loginindex.php">INICIAR SESIÓN</a></li>
<?php } else{?>

  <li style="color:white;">
               <ul><li style=" list-style-type:none; margin-bottom:-30px;"><?php echo $usuarios->NOMBRES; echo " ",$usuarios->APELLIDO_P; echo " ",$usuarios->APELLIDO_M?></li><br>
               <li style="text-align:center;list-style-type:none;"><b><?php echo $usuarios->ROL;?></b></li>
              </ul>
             </li>
  <li style="top:-5px; margin:0px !important;" class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge custom-badge red pull-right">Usuario</span><img  style="border-radius:50%;width: 40px;height: 40px; margin:0px !important;" class="imagen_bd" src="/img/NULL.jpg"  alt=""> <b class="caret"></b></a>
  <ul class="dropdown-menu">
    <li><a style="color:black !important;" href="index.html">Cuenta</a></li>
    <li><a style="color:black !important;;" href="index-form.html">Configuración</a></li>
    <li><a style="color:black !important;;" href="./Login/cerrarsesion.php" name="salir-session">Cerrar Sesión</a></li>
  </ul>
</li>
<?php } endforeach;?>



            <ul class="dropdown-menu">
                <li><a href="index.html">Home CTA</a></li>
                <li><a href="index-form.html">Home Form</a></li>
                <li><a href="index-video.html">Home video</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>

<section id="intro" class="intro">
<div style="z-index:1;" class="intro-content">
  <div class="container" style="margin-top:-40px;">
  <label style="margin-bottom:30px;" ><a href="#">Volver</a></label>
     
  <label  style="margin-left:30px;color:whitesmoke;">Codigo de Cita:</label><input  style="margin-left:10px" type="text" placeholder="" name="buscarDNI"><input style="border-radius:10px;" type="submit" name="boton-busqueda" value="Buscar">

   <?php

$consultaPDO=$conexion->query("SELECT*FROM  `loginusuarios` WHERE usuario='$usuario'");

$resultadoPDO=$consultaPDO->fetchAll(PDO::FETCH_OBJ);

foreach ($resultadoPDO as $userCita):
$correoDNI2=$userCita->DNI;
endforeach;
?>
<script> console.log('consola: '.$correoDNI2); </script>
<?php

$consultaU=$conexion->query("SELECT*FROM dim_citas WHERE DNI='$correoDNI2'");




$resultado=$consultaU->fetchAll(PDO::FETCH_OBJ);

?>
<div class="container-scroll">

<form action="aceptarCitas.php" method="POST">
 <table  style="text-align:center; margin:0px;">
 <tr>
        <th>CODIGO</th>
        <th>DNI</th>
        <th>FECHA</th>
        <th>AREA PROFESIONAL</th>
        <th>NOTIFICACIÓN</th>
        <th>ESTADO</th>
        <th>Comprobante</th>
       
    </tr>

<?php  



?>    

<?php foreach ($resultado as $citas):
    $estadoModificar;
    $elEstado = $citas->ESTADO;
    if($elEstado=='Aceptado'){
        $estadoModificar='Pendiente';
    }else{
        $estadoModificar='Aceptado';
    }
    ?>
    <tr>
        <td><?php echo $citas->Codigo;?></td>
        <td><?php echo $citas->DNI;?></td>
        <td><?php echo $citas->FECHA;?></td>
        <td><?php echo $citas->AreaProfesional;?></td>
        <td><?php echo $citas->Notificarme;?></td>
        <td><?php echo $citas->ESTADO;?></td> 
        <?php $estadoComprobante=$citas->ESTADO;
        if($estadoComprobante=="Aceptado"){
        ?>
        <td><a href="./fpdf/PruebaV.php?COD=<?php echo $citas->Codigo ?>" target="_blank"><img src="./img/ICONO.png" alt="" width=30px;></a></td> 
        <?php } else{?>  
          <td>Sin registro</td>
        <?php } ?>
        <td>
        
    </tr>
<?php
endforeach;
?>
</table>
</form>
</div>
</div>
</div>
</section>
    
    <footer>

      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>About SystemDNS</h5>
                <p>
                  Lorem ipsum dolor sit amet, ne nam purto nihil impetus, an facilisi accommodare sea
                </p>
              </div>
            </div>
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Information</h5>
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Laboratory</a></li>
                  <li><a href="#">Medical treatment</a></li>
                  <li><a href="#">Terms & conditions</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>SystemDNS center</h5>
                <p>
                  Nam leo lorem, tincidunt id risus ut, ornare tincidunt naqunc sit amet.
                </p>
                <ul>
                  <li>
                    <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
								</span> Monday - Saturday, 8am to 10pm
                  </li>
                  <li>
                    <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
								</span> +62 0888 904 711
                  </li>
                  <li>
                    <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
								</span> hello@SystemDNS.com
                  </li>

                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Our location</h5>
                <p>The Suithouse V303, Kuningan City, Jakarta Indonesia 12940</p>

              </div>
            </div>
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Follow us</h5>
                <ul class="company-social">
                  <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                  <li class="social-dribble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="sub-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="wow fadeInLeft" data-wow-delay="0.1s">
                <div class="text-left">
                  <p>&copy;Copyright - ProOnliPc Theme. All rights reserved.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="wow fadeInRight" data-wow-delay="0.1s">
                <div class="text-right">
                  <div class="credits">
        
                    <a href="https://www.youtube.com/channel/UCDH0DJaVLkCDtl_YN9hhByw?view_as=subscriber">ProOnliPc Education Templates</a> by ProOnliPc
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

  </div>
  <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

   <!--Core JavaScript Files -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.scrollTo.js"></script>
  <script src="js/jquery.appear.js"></script>
  <script src="js/stellar.js"></script>
  <script src="plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/nivo-lightbox.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>
