<?php
include("../Principal/index.php");

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<style>


body{
  height: 100%;
  width: 100%;
}





.contenido {
        grid-area: contenido;

        background: white;
        border: 2px solid rgba(0, 0, 0, 0.196);
        text-align: center;  
        z-index: 3;
        background-image: url("../z_recursos/img/paciente_nuevo.png");
        background-repeat: no-repeat;
        background-size: cover; 
        height: 100% !important;
        
    }

 
.login{
    width:100%;
    display:grid;
    place-items:start;

   
}





form{
    display:flex;
    flex-direction: column;
    background-image: linear-gradient(210deg, #505467 0, #1f3259 50%, #00154b 100%);
    
    width:50%;
    height: 25em;
    padding:5%;
    margin-left:25%;
    margin-top: 7%;
    border-radius: 10px;
}





.title{
    font-size: var(--lg);
    margin-bottom: 10px;
    text-align:center;
    margin-top:20px;
}


.label{
    font-size:var(--sm);
    font-weight: bold !important;
    margin-bottom:4px;
    color:var(--black);
}
.input{
    background-color: var(--text-input-field);
    border:1px solid;
    border-color: var(--Hospital-green);
    border-radius:8px;
    height: 30px;
    font-size: var(--md) !important;
    padding: 6px;
    margin-bottom:12px;
    margin-right: 10px;
    
   
}


.input-name,.input-email,.input-password{
    margin-bottom: 22px;
}




.primary-button{
    background-color: var(--negro);
    border-radius:8px;
    border:none;
    color:white;
    width:100%;
    cursor:pointer;
    font-size:var(--md);
    font-weight: bold;
  
    height: 50px;
}

.primary-button:hover{
    background-color: yellowgreen;
    color:black;
    
}
p{

margin-top: 10px;
}


.sidebar{
    grid-area:sidebar;
   
    display:flex !important;
    flex-direction: column !important;
    
    border:2px solid rgba(0, 0, 0, 0.196) !important;
    margin:-3px !important;
    font-size: 1em !important;
    height: 100% !important;
    border-left:10px solid #25252a;
    margin-bottom:60px !important;
}   

.login-button{
    margin-top:14px;
    margin-bottom:30px;
}

input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}


a{ 
    text-decoration: none !important;
    color:var(--blanco) !important;
}
label{
    color:white;
}

.header h1{
    animation-name:animacion;
    animation-duration:2s;
    animation-iteration-count: infinite;
    font-size: 2em;
    

   
}

.encabezado_contenido h1{
    color:white;
}

/*reposive*/
@media (max-width:640px){

    .form-container{
        height: 100%;
    }

    .form{
        height: 100%;
        justify-content: space-between;
    }
}




    /*CONTENIDO */ /*CONTENIDO */ /*CONTENIDO */ /*CONTENIDO */ /*CONTENIDO */ /*CONTENIDO */
/*CONTENIDO */ /*CONTENIDO */ /*CONTENIDO */ /*CONTENIDO */ /*CONTENIDO */ /*CONTENIDO */




    </style>

        <!--CONTENIDO-->

        <div class="contenido">
       
<!--PRUEB-->

       
<form action="insertar-cita.php" method="POST">
  <span style="margin-top:-30px;color:aliceblue;">REGISTRAR CITA DE USUARIO </span>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">DNI</label>
      <input type="text" name="DNI" class="form-control" id="inputEmail4" placeholder="DNI">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">FECHA</label>
      <input type="date" name="FECHA" class="form-control" id="inputPassword4" placeholder="FECHA">
    </div>
  </div>
  <div class="form-row">
    
    <div class="form-group col-md-4">
      <label for="inputState">AREA PROFESIONAL</label>
      <select name="ESPECIALIDAD" id="inputState" class="form-control">
        <option selected>Especialidad...</option>
        <option value="Terapia ocupacional">Terapia ocupacional</option>
        <option value="Terapia lenguaje">Terapia lenguaje</option>
        <option value="Psicología adultos">Psicología adultos</option>
        <option value="Psicología adicciones">Psicología adicciones</option>
        <option value="Psiquiatría">Psiquiatría</option>
        <option value="Medicina Familiar">Medicina Familiar</option>
      </select>
    </div>
   
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" name="CHECKBOX" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Notificar al Usuario
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Registrar</button>
</form>


   



</div>




<!--FIN-->
    

</body>

