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
  <link href="css/style-form.css" rel="stylesheet">

  <!-- boxed bg -->
  <link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
  <!-- template skin -->
  <link id="t-colors" href="color/default.css" rel="stylesheet">

</head>

<body style="background: linear-gradient(210deg, #505467 0, #1f3259 50%, #00154b 100%)" id="page-top" data-spy="scroll" data-target=".navbar-custom">

  <div id="wrapper">
   
    <nav  style="z-index:2;background: linear-gradient(210deg, #505467 0, #1f3259 50%, #00154b 100%); border-radius:1%; padding:1px; ; opacity:1;" class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <!--<div class="top-area">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <p class="bold text-left">Monday - Saturday, 8am to 10pm </p>
            </div>
            <div class="col-sm-6 col-md-6">
              <p class="bold text-right">Call us now +62 008 65 001</p>
            </div>
          </div>
        </div>
      </div>-->
      <div class="container navigation">

        <div class="navbar-header page-scroll" style="margin-top:-20px !important;">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
          <a class="navbar-brand" href="index.html">
                    <img src="img/logo.png" alt=""  width="150" height="60" />
                </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div  class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
            <li ><a href="#">Citas</a></li>
            <li class="active"><a href="#intro">Registrar Cita</a></li>
            <li><a href="#doctor">Configuración</a></li>

            <li class="dropdown">
              
              <?php

              session_start();
  
  if(!isset($_SESSION['user'])){?>
               
              <li style="top:15px;"><a href="./Login/loginindex.php">INICIAR SESIÓN</a></li>
             <?php } else{?>
              <li style="top:-5px; margin:0px !important;" class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge custom-badge red pull-right">Usuario</span><img  style="border-radius:50%;width: 40px;height: 40px; margin:0px !important;" class="imagen_bd" src="/img/NULL.jpg"  alt=""> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a style="color:black !important;" href="index.html">Cuenta</a></li>
                  <li><a style="color:black !important;;" href="index-form.html">Configuración</a></li>
                  <li><a style="color:black !important;;" href="./Login/cerrarsesion.php" name="salir-session">Cerrar Sesión</a></li>
                </ul>
              </li>
              <?php }?>
           
           
           
           
              <ul class="dropdown-menu">
                <li ><a href="index.html">Home CTA</a></li>
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


    <!-- Section: intro -->
    <section id="intro" class="intro">
      <main class="hero">
        <div class="promo">
          
        </div>
        <video muted autoplay loop>
          <source src="./img/video_background2.mp4" type="video/mp4">
        </video>
        <div class="capa"></div>
      </main>
      <div style="z-index:1;" class="intro-content">
        <div class="container">
          <div class="row">
            


            </div>
            <div class="col-lg-6">
              <div class="form-wrapper">
                <div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">

                  <div class="panel panel-skin">
                    <div style="background: linear-gradient(210deg, #505467 0, #1f3259 50%, #00154b 100%); " class="panel-heading">
                      <h3 class="panel-title"><span class="fa fa-pencil-square-o"></span> Configuración de Pagina<small> - Datos Personales</small></h3>
                    </div>
                    <div class="panel-body">
                      <div id="sendmessage">Your message has been sent. Thank you!</div>
                      <div id="errormessage"></div>

                      <form action="" method="post" role="form" class="contactForm lead">
                        aaaa
                        
                      </form>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   
  </div>
  <section id="partner" class="home-section paddingbot-60">
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow lightSpeedIn" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h2 class="h-bold">Our partner</h2>
                <p>Take charge of your health today with our specially designed health packages</p>
              </div>
            </div>
            <div class="divider-short"></div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <div class="partner">
              <a href="#"><img src="img/dummy/partner-1.jpg" alt="" /></a>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="partner">
              <a href="#"><img src="img/dummy/partner-2.jpg" alt="" /></a>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="partner">
              <a href="#"><img src="img/dummy/partner-3.jpg" alt="" /></a>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="partner">
              <a href="#"><img src="img/dummy/partner-4.jpg" alt="" /></a>
            </div>
          </div>
        </div>
      </div>
    </section>
            


  <!-- Core JavaScript Files -->
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
