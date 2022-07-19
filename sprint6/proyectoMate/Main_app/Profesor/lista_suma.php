<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./../../css/style.css">
    <link rel="stylesheet" href="./../../css/dataTables.bootstrap5.min.css">

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
                        <li><a href="index.php">Lista de Juegos</a></li>
                        <li><a href="../salir.php">Salir</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <div class="titulo">
        <h2>Puntaje de alumnos (Juego Suma)</h2>
    </div>    

    <div class="container">  
        
        <div class="container"> 
        <div class="d-grid gap-2 d-flex justify-content-center">        
        <a class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#modal-mayor_puntaje' role='button'>Alumnos con bajo promedio</a>        
        <!-- <a class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#modal-promedio_total' role='button'>?</a> -->
        <!-- <a class="btn btn-warning" href="" role="button">?</a> -->
        </div> 

      <div>

      <table id="example" class="table table-light">
            <thead>
                <tr> 
                    <!-- <th>Código Suma</th>                    -->
                    <th>Código de Alumno</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Puntaje</th>
                    <th>Tiempo</th>
                    <th>Hora</th>
                    <th>Fecha</th>

                </tr>
            </thead>
            <tbody id="tbody-lista_suma">

            </tbody>
        </table>


      </div>

        
        
        <div class="d-grid gap-2 col-4 mx-auto">
            <a class="btn btn-primary" href="index.php" role="button">Volver</a>
        </div>
    </div>



    <!-- Modal MENOR PROMEDIO -->
<div class="modal fade" id="modal-mayor_puntaje" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alumnos con Menor Promedio</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
          <!-- <span aria-hidden="true">&times;</span> -->
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-light">
            <thead>
                <tr>                    
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Promedio</th>                   

                </tr>
            </thead>
            <tbody id="tbody-menor_promedio">

            </tbody>
        </table>          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>        
      </div>
    </div>
  </div>
</div>

    <!-- Modal PROMEDIO TOTAL -->
<div class="modal fade" id="modal-promedio_total" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Promedio de puntos del Juego de Suma</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
          <!-- <span aria-hidden="true">&times;</span> -->
        </button>
      </div>
      <div class="modal-body">
        <h1 id="avg-number" class="promedio" style="text-align:center">0</h1>
        <h4 style="text-align:center">Puntos</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>        
      </div>
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
    <script src="./../../js/jquery-3.6.0.min.js"></script>
    <script src="./../../js/lista_suma.js"></script>
    <script src="./../../js/pagination.js"></script>
    <script src="./../../js/jquery.dataTables.min.js"></script>
    <script src="./../../js/dataTables.bootstrap5.min.js"></script>
</body>

</html>