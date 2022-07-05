<?php
    session_start();

    if(isset($_SESSION['usuario'])){
        if($_SESSION['usuario']['tipo_usuario'] != "Administrador"){
            header("Location: ../Profesor/");
            die();
        }
    } 
    else{
        header('Location: ../../'); // index general        
    }    

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="./../../css/style.css"> 
    <title>Aprende+Mate</title>
</head>

<body>

    <header>
    <div class="container">
      <div class="nav">
        <h2><span><i aria-hidden="true"></i></span> Aprende+Mate</h2>
        <nav>
          <ul>
            <!-- <li><a href="index.php">Inicio</a></li> -->
            <!-- <li class="current"><a href="index.html">Suma</a></li> -->
            <li><a href="../salir.php">Salir</a></li>            
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <div class="titulo">
    <h1>Bienvenido <?php echo $_SESSION['usuario']['nombre'] ?></h1>
    <h3>Administra las cuentas.</h3>
  </div>
  
  <div class="parent">
        <div class="card">
        <img src="./../../css/admin.jpg" alt="" style="">
        <div class="containerCard">
            <h3><a href="readAdmin.php">Administradores</a></h3>        
        </div>
        </div>

        <div class="card">
        <img src="./../../css/profesores.jpg" alt="" style="">
        <div class="containerCard">
            <h3><a href="readProfesor.php">Profesores</a></h3>        
        </div>
        </div>

        <div class="card">
        <img src="./../../css/alumnos.jpg" alt="" style="">
        <div class="containerCard">
            <h3><a href="readAlumno.php">Alumnos</a></h3>        
        </div>
        </div>

    </div>
    

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