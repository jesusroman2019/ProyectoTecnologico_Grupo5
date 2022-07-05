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
                        <li><a href="readAdmin.php">Volver</a></li>
                        <li><a href="../salir.php">Salir</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>    

    <div class="container">
<div class="row">
<div class="col-md-6">		

		<form role="form" id="registro" name="registro" action="" method="post">
      <div class="titulo">
        <h2>Nuevo Administrador</h2>
    </div> 
      <h2>Registro</h2>
		  <div class="form-group">
		    <label for="name">Nombre</label>
		    <input type="text" class="form-control" id="txtNombre" name="name" placeholder="Ingrese su nombre">
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

		  <button id="btnRegistrar" type="submit" class="btn btn-primary">Registrar</button>
		</form>
		</div>
		</div>
		</div> 
    
    <h1 id="codigo" hidden><?php echo $_SESSION['usuario']['codigo'] ?></h1> 
      <h1 id="nombre" hidden><?php echo $_SESSION['usuario']['nombre'] ?></h1> 
      <h1 id="apellido" hidden><?php echo $_SESSION['usuario']['apellido'] ?></h1> 

        
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
    <script src="./../../js/jquery.validate.min.js"></script>
    <script src="./../../js/createAdmin.js"></script>
</body>

</html>