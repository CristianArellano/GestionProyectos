

<?php
if(isset($_GET['crear-cuenta'])){?>
   <script> 

let texto="Hola bienvenido a la plataforma digital Del centro comunitario Sa may"

const hablar=(texto) =>speechSynthesis.speak(new SpeechSynthesisUtterance(texto));
hablar(texto);
</script>';
<?php 
header('location:y_Login/Login.php');
}


?>