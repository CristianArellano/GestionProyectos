<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<style>

:root{
        --white: #FFFFFF;
        --black: #000000;
        --very-light-pink: #C7C7C7;
        --text-input-field: #F7F7F7;
        --Hospital-green: #33c346;
        --sm: 14px;
        --md:16px;
        --lg:18px;
    }


    body{
      margin:0;
      font-family: 'Quicksand', sans-serif;
      background: linear-gradient(rgba(255, 3, 3, 0.2), rgba(0, 72, 255, 0.75)), url(../z_recursos/img/FONDO-MINSA.jpg);    
      background-repeat: no-repeat;
      background-size:contain;
      background-position:top;
      
    }

.login{
    width:100%;
    height: 100vh;
    display:grid;
    place-items:center;
   
}
.form-container{
    display:grid;
    grid-template-rows: auto 1fr auto;
    width:300px;
   
}
.logo{
    width: 150px;
    margin-bottom:48px;
    justify-self: center;
    display:none;
    text-align: center;
}

.form{
    display:flex;
    flex-direction: column;
}

.form a{
    color: var(--text-input-field);
    font-size: var(--sm);
    text-align: center;
    text-decoration: none;
    margin-bottom: 52px;
}

.label{
    font-size:var(--sm);
    font-weight: bold;
    margin-bottom:4px;
    color: var(--white)
}
.input{
    background-color: var(--text-input-field);
    border:none;
    border-radius:8px;
    height: 30px;
    font-size: var(--md);
    padding: 6px;
    margin-bottom:12px;
   
}

.input-email{
    margin-bottom: 20px;
}

.primary-button{
    background-color: var(--Hospital-green);
    border-radius:8px;
    border:none;
    color:var(--white);
    width:100%;
    cursor:pointer;
    font-size:var(--md);
    font-weight: bold;
    height: 50px;
}

.secondary-button{
    background-color: var(--white);
    border-radius:8px;
    border:1px solid var(--Hospital-green);
    color:var(--Hospital-green);
    width:100%;
    cursor:pointer;
    font-size:var(--md);
    font-weight: bold;
    height: 50px;
}

.login-button{
    margin-top:14px;
    margin-bottom:30px;
}





/*reposive*/
@media (max-width:640px){
    .logo{
        display:block;
    }
    .secondary-button{
        position:absolute;
        bottom:20px;
        width: inherit;
    }

}

</style>


</head>
<body>
    <div class="login">
        <div class="form-container">
            <img src="./logos/logo_yard_sale.svg" alt="logo" class="logo">
        
           
            <form action="comprobar.php" method="POST" class="form">

              <label class="label"  for="email">Correo Electronico</address></label>
              <input type="text" name="correo" id="email" placeholder="ucv@edu.pe" class="input input-email">

              <label class="label" for="password">Contraseña</label>
              <input type="password" name="contraseña" id="password" placeholder="*****" class="input input-password">

              <input type="submit" value="Confirmar" class="primary-button login-button">
            

              
                <a href="#" onclick="window.alert('Contactate con un administrador para la recuperación de tu usuario.')">No recuerdo mi contraseña</a>
            
            </form>

     <button class="secondary-button crear-button" name="crear-cuenta" onclick="window.alert('Contactate con un administrador para la creación de tu usuario.')">Crear Cuenta!</button>
        </div>
    </div>


</body>
</html>