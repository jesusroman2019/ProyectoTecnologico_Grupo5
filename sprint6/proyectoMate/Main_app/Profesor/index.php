<?php
    session_start();

    if(isset($_SESSION['usuario'])){
        if($_SESSION['usuario']['tipo_usuario'] != "Profesor"){
            header("Location: ../Alumno/");
            die();
        }
    } 
    else{
        header('Location: ../../');
    }

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
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
                        <!-- <li><a href="#">Inicio</a></li> -->
                        <!-- <li class="current"><a href="index.html">Suma</a></li> -->
                        <!-- <li><a href="#">Lista de Juegos</a></li> -->
                        <li><a href="../salir.php">Salir</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <div class="titulo">
        <h1>Bienvenido Profesor(a) <?php echo $_SESSION['usuario']['nombre'] ?></h1>
    </div>


    <div class="container">
        <h2>Lista de Juegos</h2>
        <table class="table table-light">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Juego</th>
                    <th>Visualización</th>
                </tr>
            </thead>
            <tbody id="tbody-juegos">
                <tr>
                <td>1</td>
                <td>Juego de Suma</td>
                <td><a class='btn btn-primary' href='lista_suma.php'role='button'>Ver resultados</a></td>
                </tr>
                <tr>
                <td>2</td>
                <td>Juego de Resta</td>
                <td><a class='btn btn-primary' href='lista_resta.php'role='button'>Ver resultados</a></td>
                </tr> 
                <tr>
                <td>3</td>
                <td>Juego de Multiplicación</td>
                <td><a class='btn btn-primary' href='lista_multi.php'role='button'>Ver resultados</a></td>
                </tr> 
                <tr>
                <td>4</td>
                <td>Juego de División</td>
                <td><a class='btn btn-primary' href='lista_division.php'role='button'>Ver resultados</a></td>
                </tr>           

            </tbody>
        </table>
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
    <script src="./../../js/jquery-3.6.0.min.js"></script>
    <!-- <script src="./../../js/lista_juegos.js"></script> -->
</body>

</html>