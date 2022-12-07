<head>


</head>

<?php
include("../Principal/index.php")
?>
<!-- CSS only -->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link href="../Style/Style_RegistrarDatosU/Styleregistrar-datos.css" rel="stylesheet" >


<script src="../z_recursos/Jquery/jquery-1.6.3.min.js"></script>
<script>
    $(function(){
        $(".contenido").hide().fadeIn(1500);
    });
</script>

<style>.contenido {
        grid-area: contenido;
       
        border: 2px solid rgba(0, 0, 0, 0.196);
        text-align: center;  
        z-index: 3;
        background-image: url("../z_recursos/img/paciente_nuevo.png");
        background-repeat: no-repeat;
        background-size: cover; 
        
    }
    </style>

        <!--CONTENIDO-->

        <div class="contenido">
      <!--    <video muted autoplay loop>
            <source src="../z_recursos/img/humo.mp4" type="video/mp4">
          </video>-->
       
<!--PRUEB-->

<div class="login">


       
<div class="form-container">
    
<div class="encabezado_contenido">

<img src="../z_recursos/img/minsa.png" style="margin-top:20px;margin-left:130%;height:100px;">
    <h1 class="title" style="margin-top:30px; margin-top:60px ;color:WHITE;">REGISTRO</h1>
</div>


<form style="height:100%; margin-top:-170px; margin-left:40%;" action="RegistrarDatos_Gestion.php" method="POST" >

<!-- CSS only -->

			<legend style="margin-left:50%;"><b>DATOS DEL PERSONAL</b></legend> </br>

				  <div class="form-group" >
					<label for="inputEmail4" style="color:white;" >DNI</label>
					<input type="text" name="dni" style="text-align:center;" class="form-control" placeholder="Documento de Identidad" id="inputEmail4" >
				  </div>
				  <div class="form-group col-md-35">
					<label for="inputPassword4" style="color:white;">Nombres Completo</label>
					<input type="text" name="nombre" class="form-control" style="text-align:center;" id="inputPassword4" placeholder="">
				  </div>
				
				<div class="form-group col-md-25">
				  <label for="inputAddress " style="color:white;" >Apellidos Paternos</label>
				  <input type="text" name="apellidoPaterno" style="text-align:center;" class="form-control" id="inputAddress" placeholder="">
				</div>
				<div class="form-group col-md-25">
				  <label for="inputAddress2" style="color:white;">Apellidos Maternos</label>
				  <input type="text" name="apellidoMaterno" style="text-align:center;" class="form-control" id="inputAddress2" placeholder="">
				</div>

		
				  <div class="form-group col-md-25"  >
					<label for="inputCity" style="color:white;">Edad</label>
					<input type="number" name="edad" style="text-align:center;" class="form-control"  placeholder="" id="inputCity">
				  </div>

                 
				  <div class="form-group col-md-25"  >
					<label for="inputCity" style="color:white;">Celular</label>
					<input type="number" name="numero" style="text-align:center;"  placeholder="" class="form-control" id="inputCity">
				  </div>

          
				  <div class="form-group col-md-25"  >
          <label>DEPARTAMENTO</label>
          <select  name="departamento" class="form-control state"></select>

			<!--		<input type="text" name="departamento" style="text-align:center;"  placeholder="Lima" class="form-control" id="inputCity">
--> </div>

                  
				  <div class="form-group col-md-25"  >
					<label for="inputCity" style="color:white;">Provincia</label>
          <select name="provincia" class="form-control city"></select>

		<!--			<input type="text" name="provincia" style="text-align:center;"  placeholder="Lima" class="form-control" id="inputCity">
--> </div>

                  
				  <div class="form-group col-md-25"  >
					<label for="inputCity" style="color:white;" >Distrito</label>
       <select name="distrito" class="form-control district"></select>

				<!--	<input type="text" name="distrito" style="text-align:center;"  placeholder="Los Olivos" class="form-control" id="inputCity">
--></div>

				  <div class="form-group col-md-25" >
					<label for="inputState" style="color:white;">Sexo</label>
					<select id="inputState" name="Sexo" class="form-control">
					  <option selected>Elegir Sexo....</option>
					  <option value="Masculino">Masculino</option>
					  <option value="Femenino">Femenino</option>
					</select>
				  </div>
				  
				


    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script>

      //CARGAMOS LOS DEPARTAMENTOS
      $(document).ready(function(){
        $.ajax({
          type: 'POST',
          url: 'ajax/data.php',
          data: {action:'get-states'},
          dataType: 'JSON',
          success: function(response){
            var options = '<option value="">Seleccione</option>';
            $.each(response, function(index, value){
              options += '<option value="'+value.id+'">'+value.nombre+'</option>';
            }); 
            $('.state').html(options); 
            $('.city').html('<option value="">Seleccione</option>');  
            $('.district').html('<option value="">Seleccione</option>');   
            $('.ubigeo').val(null);  
          }
        }).fail(function(jqXHR, textStatus, errorThrown){
          console.log(jqXHR);
        });
      });

      //OBTENEMOS LAS CIUDADES POR DEPARTAMENTO
      $('.state').on('change', function(){
        var id = $(this).val();
        $.ajax({
          type: 'POST',
          url: 'ajax/data.php',
          data: {action:'get-cities', id:id},
          dataType: 'JSON',
          success: function(response){
            var options = '<option value="">Seleccione</option>';
            $.each(response, function(index, value){
              options += '<option value="'+value.id+'">'+value.nombre+'</option>';
             
            }); 
            $('.city').html(options);  
            $('.district').html('<option value="">Seleccione</option>');   
            $('.ubigeo').val(null); 
          }
        }).fail(function(jqXHR, textStatus, errorThrown){
          console.log(jqXHR);
        });
      });

      //OBTENEMOS LOS DISTRITOS POR CIUDAD
      $('.city').on('change', function(){
        var id = $(this).val();
        $.ajax({
          type: 'POST',
          url: 'ajax/data.php',
          data: {action:'get-districts', id:id},
          dataType: 'JSON',
          success: function(response){
            var options = '<option value="">Seleccione</option>';
            $.each(response, function(index, value){
              options += '<option value="'+value.id+'" ubigeo="'+value.ubigeo+'">'+value.nombre+'</option>';
            }); 
            $('.district').html(options);   
            $('.ubigeo').val(null); 
          }
        }).fail(function(jqXHR, textStatus, errorThrown){
          console.log(jqXHR);
        });
      });

      $('.district').on('change', function(){
        var ubigeo = $(this).find('option:selected').attr('ubigeo');
        $('.ubigeo').val(ubigeo);
      });
    </script>



<input type="submit" style="margin-left:50%;margin-right:100%; width:100%; margin-top:20px;" value="REGISTRAR DATOS" class="btn btn-primary">
			  
        </form>



   <!-- <form action="RegistrarDatos_Gestion.php" method="POST" class="form">

        <div>

            <label class="label" for="dni">DNI</label>
            <input type="number" name="dni" id="dni" placeholder="7462XXXX" class="input input-email">

            <label class="label" for="name">Nombre</label>
            <input type="text" name="nombre" id="name" placeholder="Nombre completo" class="input input-name">

            <label class="label" for="email">APELLIDO PATERNO</label>
            <input type="text" name="apellidoPaterno" id="email" placeholder="APELLIDO PATERNO" class="input input-email">

            <label class="label" for="email">APELLIDO MATERNO</label>
            <input type="text" name="apellidoMaterno" id="email" placeholder="APELLIDO MATERNO" class="input input-email">

            <label class="label" for="email">EDAD</label>
            <input type="number" name="edad" id="email" placeholder="EDAD" class="input input-email">

            <label class="label" for="email">SEXO</label>
            <input type="text" name="Sexo" id="email" placeholder="SEXO" class="input input-email">

        </div>
        <div class="costado">
            
            <label class="label" for="email">NUMERO DE CELULAR</label>
            <input type="number" name="numero" id="email" placeholder="925458192" class="input input-email">

            <label class="label" for="email">DEPARTAMENTO</label>
            <input type="text" name="departamento" id="email" placeholder="HUARAZ" class="input input-email">


            <label class="label" for="email">PROVINCIA</label>
            <input type="text" name="provincia" id="email" placeholder="HUARAZ" class="input input-email">

            <label class="label" for="email">DISTRITO</label>
            <input type="text" name="distrito" id="email" placeholder="LOS OLIVOS" class="input input-email">
			
                    <input type="submit" value="REGISTRAR DATOS" class="primary-button login-button">




            </div>
    
    </form>-->


   



</div>
</div>



<!--FIN-->
    

</body>

