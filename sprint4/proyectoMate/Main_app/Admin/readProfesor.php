<?php 
  session_start();

  if(isset($_SESSION['usuario'])){
    $_SESSION['usuario']['codigo'];
    $_SESSION['usuario']['nombre'];
    $_SESSION['usuario']['apellido'];
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                        <li><a href="index.php">Volver</a></li>
                        <li><a href="../salir.php">Salir</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <div class="titulo">
        <h2>Lista de Profesores</h2>
    </div>    

    <div class="container"> 
        <div class="d-grid gap-2 d-flex justify-content-start">
        <a class="btn btn-primary" href="createProfesor.php" role="button">Registrar Profesor</a>
    </div>       
        <table class="table table-light">
            <thead>
                <tr>                    
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Usuario</th>                    
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th>Fecha</th>
                    <th>Administrador</th>                 

                </tr>
            </thead>
            <tbody id="tbody-lista_prof">

            </tbody>
        </table>
        <div class="d-grid gap-2 col-2 mx-auto">
            <a class="btn btn-secondary" href="index.php" role="button">Volver</a>
        </div>
    </div>

    <!-- Modal REGISTRAR -->
<div class="modal fade" id="" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar Administrador</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- <form role="form" id="registro" name="registro" action="" method="post"> -->

      <div class="modal-body">
        <form class="needs-validation" novalidate>        
		  <div class="form-group">
		    <label for="name">Nombre</label>
		    <input type="text" class="form-control" id="txtNombre" name="name" placeholder="Ingrese su nombre" required>
        <div class="invalid-feedback">
              Please enter a valid email address
            </div>
		  </div>
		  <div class="form-group">
		    <label for="lastname">Apellido</label>
		    <input type="text" class="form-control" id="txtApellido" name="lastname" placeholder="Ingrese su apellido">
		  </div>
		  <div class="form-group">
		    <label for="email">Correo Electronico</label>
		    <input type="email" class="form-control" id="txtEmail" name="email" placeholder="Ingrese su correo electronico">
		  </div>
          <div class="form-group">
		    <label for="phone">Teléfono</label>
		    <input type="number" class="form-control" id="txtTelefono" name="phone" placeholder="Ingrese su teléfono">
		  </div>
          <div class="form-group">
		    <label for="username">Usuario</label>
		    <input type="text" class="form-control" id="txtUsuario" name="username" placeholder="Ingrese su DNI ó Carnet de Extranjeria">
		  </div>
		  <div class="form-group">
		    <label for="password">Contrase&ntilde;a</label>
		    <input type="password" class="form-control" id="txtPassword" name="password" placeholder="Contrase&ntilde;a">
		  </div>
		  <div class="form-group">
		    <label for="confirm_password">Confirmar Contrase&ntilde;a</label>
		    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmar Contrase&ntilde;a">
		  </div>          
      </div>

      <div class="modal-footer">
        <button id="btnRegistrar" type="submit" data-bs-dismiss="modal" class="btn btn-primary">Registrar</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>        
      </div>


      </form>    

      
      
    </div>
  </div>
</div>


    <!-- Modal ACTUALIZAR -->
<div class="modal fade" id="modal-actualizar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Administrador</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form-group">
		    <label for="name">Codigo</label>
		    <input type="text" class="form-control" id="txtCodigo" name="code" readonly>
		  </div>
		  <div class="form-group">
		    <label for="name">Nombre</label>
		    <input type="text" class="form-control" id="txtNombre1" name="name" placeholder="Ingrese su nombre">
		  </div>
		  <div class="form-group">
		    <label for="lastname">Apellido</label>
		    <input type="text" class="form-control" id="txtApellido1" name="lastname" placeholder="Ingrese su apellido">
		  </div>
		  <div class="form-group">
		    <label for="email">Correo Electronico</label>
		    <input type="email" class="form-control" id="txtEmail1" name="email" placeholder="Ingrese su correo electronico">
		  </div>
          <div class="form-group">
		    <label for="phone">Teléfono</label>
		    <input type="number" class="form-control" id="txtTelefono1" name="phone" placeholder="Ingrese su teléfono">
		  </div>
          <div class="form-group">
		    <label for="username">Usuario</label>
		    <input type="text" class="form-control" id="txtUsuario1" name="username" placeholder="Ingrese su DNI ó Carnet de Extranjeria">
		  </div>
		  <div class="form-group">
		    <label for="password">Contrase&ntilde;a</label>
		    <input type="password" class="form-control" id="txtPassword1" name="password" placeholder="Contrase&ntilde;a">
		  </div>
		  <div class="form-group">
		    <label for="confirm_password">Confirmar Contrase&ntilde;a</label>
		    <input type="password" class="form-control" id="confirm_password1" name="confirm_password" placeholder="Confirmar Contrase&ntilde;a">
		  </div>
      </div>
      <div class="modal-footer">
        <button id="btnActualizar" type="button" data-bs-dismiss="modal" class="btn btn-primary">Actualizar</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>        
      </div>
    </div>
  </div>
</div>

<h1 id="codigo" hidden><?php echo $_SESSION['usuario']['codigo'] ?></h1> 
      <h1 id="nombre" hidden><?php echo $_SESSION['usuario']['nombre'] ?></h1> 
      <h1 id="apellido" hidden><?php echo $_SESSION['usuario']['apellido'] ?></h1> 

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
    <script src="./../../js/jquery.validate.min.js"></script>
    <script src="./../../js/readProfesor.js"></script>
</body>

</html>