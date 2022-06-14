<?php
    session_start();

    if(isset($_SESSION['usuario'])){
        if($_SESSION['usuario']['tipo_usuario'] == "Alumno"){
            header('Location: Main_app/Alumno/');            

        } 

        else if($_SESSION['usuario']['tipo_usuario'] == "Profesor"){
            header('Location: Main_app/Profesor/');

        } 
        
        else if($_SESSION['usuario']['tipo_usuario'] == "Administrador"){
            header('Location: Main_app/Admin/');            
        }

    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login</title>
    <link rel="stylesheet" href="./css/login.css">
</head>

<body>
    <div>    
        <div class="error">
        <span>La contraseña es incorrecta.</span>
        </div>       
        <div class="error1">
        <span>El DNI es incorrecto.</span>
        </div>      
        <div class="error2">
        <span>DNI y contraseña son incorrectos.</span>
        </div>
        
    <div class="texto">
        <h1>Aprende+Mate</h1>
        <h3>Bienvenido</h3>
        <p>Ingresa tu usuario y contraseña para iniciar sesión</p>
    </div>
    <div class="main">
        <form action="" id="formlg">
            <input type="text" id="dni" name="usuariolg" pattern="[A-Za-z0-9_-]{1,15}" required placeholder="DNI" />
            <input type="password" id="password" name="passlg" pattern="[A-Za-z0-9_-]{1,15}" required placeholder="Contraseña" />
            <input type="submit" class="botonlg" value="Iniciar Sesión" />
            <!-- <a href="">¿Olvidaste tu cuenta de Administrador?</a>                          -->
        </form>
    </div>

    <div class="main">
        <a href="Main_app\Admin\createAdmin1.php">Crear cuenta Administrador</a> 
    </div>
    
    </div>     
    
    
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/main.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>
