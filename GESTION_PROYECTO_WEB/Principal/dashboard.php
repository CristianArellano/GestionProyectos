<?php
    include("index.php")
?>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>    

<style>
    .contenido {
        grid-area: contenido;

       
        border: 2px solid rgba(0, 0, 0, 0.196);
        text-align: center;
        height:100%;
        display:grid;
        justify-content: center;
        background-image: url("../z_recursos/img/fondo_gestion.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }
    .contenido-contenedor{
        
     display:grid;
    grid-template-columns: auto auto auto ;
   grid-auto-rows: minmax(280px,auto);
    width:100%;
    height: 70%;
    max-width: 100%;
    justify-content: center;
    background: #000000;
    border-radius: 20px;
    overflow-y: scroll;
    overflow-x:auto;
    }

    .grid-item{
        display:grid;
        margin:2px;
        background-size: contain;
        background:var(--rojodegradado2);
        align-items: center;
        width:400px;
        border-radius: 10px;
        z-index: 1;
        margin-left:10px;
       
    }
/*
.director-general{
    
background-size:contain;

border-radius: 10px;


}

.director-general:hover{
   
    background: linear-gradient(90deg, rgba(67,221,224,0.5329482134650736) 6%, rgba(72,209,74,0.5749650201877626) 73%) , url(z_recursos/img/logo_samay.png) no-repeat center center ;
    background-size:contain;
    border-radius: 10px;
    cursor:pointer;
    
}



.subdirector-general{
background-position: center;
background-size:contain;
border-radius: 10px;

}
.subdirector-general:hover{
    background: linear-gradient(90deg, rgba(67,221,224,0.5329482134650736) 6%, rgba(72,209,74,0.5749650201877626) 73%) , url(z_recursos/img/logo_samay.png) no-repeat center center ;
    background-size:contain;
    border-radius: 10px;
    cursor:pointer;
    
}
.medicos{
background-size:contain;
border-radius: 10px;
}

.medicos:hover{
    background: linear-gradient(90deg, rgba(67,221,224,0.5329482134650736) 6%, rgba(72,209,74,0.5749650201877626) 73%) , url(z_recursos/img/logo_samay.png) no-repeat center center ;
    background-size:contain;
    border-radius: 10px;
    cursor:pointer;
}

.administrativo{
background-size:contain;
border-radius: 10px;
}
.administrativo:hover{
    background: linear-gradient(90deg, rgba(67,221,224,0.5329482134650736) 6%, rgba(72,209,74,0.5749650201877626) 73%) , url(z_recursos/img/logo_samay.png) no-repeat center center ;
    background-size:contain;
    border-radius: 10px;
    cursor:pointer;
}*/




.contenido h1{
    font-size: 30px;
   color:white  ;
}
@keyframes movimiento{
    0%{font-size: 30px;}
    0%{font-size: 31px;}
    100%{font-size: 32px;}
}

.img1{
background-image:url(../z_recursos/img/doctor1.jpg) ;
background-position: center;
background-repeat: no-repeat;
background-attachment:scroll;
background-size:contain;
z-index:1;
height: 100%;

}
@keyframes opacity{
0%{opacity:0}
30%{opacity:0.1;}
70%{opacity:0.2}
100%{opacity:0}

}



.img2{
    background:url(../z_recursos/img/img2.jpg);
  
    background-position: center;
background-repeat: no-repeat;
background-attachment:scroll;
background-size:contain;
}

.img3{
    background:url(../z_recursos/img/img3.jpg);
    background-position: center;
background-repeat: no-repeat;
background-attachment:scroll;
background-size:contain;
}

.img4{
    background:url(../z_recursos/img/img4.jpg);
    background-position: center;
background-repeat: no-repeat;
background-attachment:scroll;
background-size:contain;
    
}
.img5, .img6, .img7, .img7,.img8,.img9{
    background:url(../z_recursos/img/img_infinite.jpg);
    background-position: center;
background-repeat: no-repeat;
background-attachment:scroll;
background-size:contain;
}

.capa{
    background:linear-gradient(90deg, rgba(86,224,67,0.77) 6%, rgba(25,27,25,0.57) 73%);
 
    opacity:0.8;
    width:100%;
    height: 90%;
    z-index:5;
    border-radius:5px;
    animation-name:opacity;
animation-duration:10s;
animation-iteration-count: infinite;

}

.capa:hover{
    background:rgba(72,208,209,57);
    opacity:0.8;
    width:100%;
    height: 90%;
    z-index:5;
    border-radius:5px;
    animation-name:opacity;
animation-duration:10s;
animation-iteration-count: infinite;

}

.capa p{
    
    color:black;
}
.card{
    margin-bottom: 30px;
    margin-left:20px;
    width:18rem;
 
}
.elementoGrid{
    display:flex;   
    cursor:pointer;
}


#imagenDashboard1:hover{
    width:19rem;
}
.card-img-top{
    height: 250px;
    border:2px double #000000;
}

.sidebar{
    font-size: 1em !important;
}

p{
    margin-top:10px !important;
}
.card-body{
    background-image: radial-gradient(circle at 50% -20.71%, #ade5ff 0, #7dcefb 25%, #3cb5f2 50%, #009ce9 75%, #0085e0 100%);
}
.card-text{
    font-family:Arial, Helvetica, sans-serif;
}

    </style>

<script src="../z_recursos/Jquery/jquery-1.6.3.min.js"></script>
<script>
    $(function(){
        $(".contenido").hide().fadeIn(1000);
    });
</script>

        <!--CONTENIDO-->

        <div class="contenido">
        <h1 style="color:white; margin-top:20px; display:block;">Colaboradores del centro</h1>

        
<div class="elementoGrid">
        <div class="card" id="imagenDashboard1">
  <img src="../z_recursos/img/MINSA-FOND.jpg"   class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text" >El sistema de salud del Perú tiene dos sectores, el público y el privado. Para la prestación de servicios de salud, el sector público
         se divide en el régimen subsidiado o contributivo indirecto y el 
        contributivo directo, que es el que corresponde a la seguridad social.</p>
  </div>
</div>  


<div class="card"  id="imagenDashboard1">
  <img src="../z_recursos/img/psicologo.jpg  "  class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">El juramento hipocrático es un compromiso, que solo pueden hacer las personas que se gradúan en las carreras universitarias de Medicina. Tiene un contenido de carácter solo ético porque orienta al médico en la práctica de su profesión. </p>
  </div>
</div> 
 
<div class="card"  id="imagenDashboard1">
  <img src="../z_recursos/img/escudo_nacional.png  "  class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">El Estado tiene el mandato de la Constitución y las Leyes de velar por los derechos de todos los ciudadanos. Es un mandato irrenunciable, su razón de ser tal vez …
Por lo tanto es importante tener claro, tomar conciencia, que el Estado debe considerar ante todo, razones ideológicas, para cumplir con sus responsabilidades</p>
  </div>
</div> 

<div class="card"  id="imagenDashboard1">
  <img src="../z_recursos/img/midis-fondo.png"  class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Son órganos desconcentrados del Ministerio de Salud que dependen y ejercen, por desconcentración, 
        las funciones de la Dirección General de Operaciones en Salud en el ámbito de Lima Metropolitana.</p>
  </div>
</div> 




</div>







               <div class="contenido-contenedor">
               <div class="grid-item img1"><div class="capa"><p style="color:black">
                Personal calificado para la atención de nuestros pacientes, puedes
                encontrar su información</br><h4>Aqui</h4>
               </p></div></div>
               <div class="grid-item img2"><div class="capa"><p style="color:black">
                Personal calificado para la atención de nuestros pacientes, puedes
                encontrar su información</br><h4>Aqui</h4>
               </p></div></div>
               <div class="grid-item img3"><div class="capa"><p style="color:black">
                Personal calificado para la atención de nuestros pacientes, puedes
                encontrar su información</br><h4>Aqui</h4>
               </p></div></div>
               <div class="grid-item img4"><div class="capa"><p style="color:black">
                Personal calificado para la atención de nuestros pacientes, puedes
                encontrar su información</br><h4>Aqui</h4>
               </p></div></div>
               <div class="grid-item img5"><div class="capa"><p style="color:black">
                Personal calificado para la atención de nuestros pacientes, puedes
                encontrar su información</br><h4>Aqui</h4>
               </p></div></div>
               <div class="grid-item img6"><div class="capa"><p style="color:black">
                Personal calificado para la atención de nuestros pacientes, puedes
                encontrar su información</br><h4>Aqui</h4>
               </p></div></div>
               <div class="grid-item img7"><div class="capa"><p style="color:black">
                Personal calificado para la atención de nuestros pacientes, puedes
                encontrar su información</br><h4>Aqui</h4>
               </p></div></div>
               <div class="grid-item img8"><div class="capa"><p style="color:black">
                Personal calificado para la atención de nuestros pacientes, puedes
                encontrar su información</br><h4>Aqui</h4>
               </p></div></div>
               <div class="grid-item img9"><div class="capa"><p style="color:black">
                Personal calificado para la atención de nuestros pacientes, puedes
                encontrar su información</br><h4>Aqui</h4>
               </p></div></div>


</div>
        </div>


    </div>





</body>

</html>