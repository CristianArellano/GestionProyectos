<?php


if(!isset($_SESSION['usuario'])){
?>

<!DOCTYPE html>
<html>
<head>
	<title>SAMAY</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="js/main.js"></script>
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" id="image_costado" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">

			<form action="login.php" method="POST">
				<img id="logo_samay" src="img/logo_samay.png">
				<h2 class="title">Bienvenido</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<input placeholder="Correo Electronico" name="correo" type="email" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<input type="password" name="contraseña" placeholder="Contraseña" class="input">
            	   </div>
            	</div>
            	<a href="#">No recuerdas tu contraseña?</a>
            	<input type="submit" class="btn" value="Ingresar">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>


<?php } else{
	header("location:http://localhost/Cliente/index.php");
} ?>