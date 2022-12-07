<?php
include('../Principal/index.php')

?>

<style>

.sidebar{
    grid-area:sidebar;
   
    display:flex !important;
    flex-direction: column !important;
    
    border:2px solid rgba(0, 0, 0, 0.196) !important;
    font-size: 1.2em !important;
    height: 153.8% !important;
}   

.contenido{
    height: 153%;
    z-index: 3;
    background-image: url("../z_recursos/img/fondo_gestion.jpg");
        background-repeat: no-repeat;
        background-size: cover;
}

.formulario_imagen{
    width:40%;
    background-color:whitesmoke;
    margin-left:300px;
    margin-top:100px;
    border-radius: 10%;
    padding:20px;
}
.contenedor_img{
    background-color:wheat; 
    margin-left:20%;width:300px;height:300px;
}

</style>

<?php
$sqlFoto2=$conexion->query("SELECT*FROM dim_usuario WHERE DNI='$correoDNI'");
$resultFot=$sqlFoto2->fetchAll(PDO::FETCH_OBJ);
foreach ($resultFot as $UserL):
$nombreIMG=$UserL->FOTO;
endforeach;
    ?>

<div class="contenido">

<form action="datos_imagen.php" class="formulario_imagen"  method="POST" enctype="multipart/form-data">
<div class="contenedor_img">
<img  class="imagen_bd" style="width:100%;height:100%;border-radius:10% !important;"src="/img/<?php echo $nombreIMG?>"  alt="">
</div>
<table style="margin-left:30%;">

<tr >
    <td>
      <tr><td><label for="imagen">Cambiar foto: </label></td></tr>
      <tr><td><input type="file" name="imagen" size="20"></td></tr>
      <tr><td colspan="2"><input type="submit" value="Aceptar"></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td><br>Cerrar sesión</b></td></tr>
    </td>
</tr>
</table>
</form>

</div>
