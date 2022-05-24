<?php 
  session_start();

  if(isset($_SESSION['usuario'])){
    $_SESSION['usuario']['codigo'];
    $_SESSION['usuario']['nombre'];
    $_SESSION['usuario']['apellido'];
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./../../css/style.css">  
  <title>Aprende+Mate</title>
  
</head>
<body>

  <audio id="musicBack" src="./../../audio/bensound-smile.mp3" autoplay loop></audio>   
  
  <audio id="myAudio">
    <source src="./../../audio/wrong.mp3" type="audio/mpeg">
  </audio>

  <audio id="myAudio2">
    <source src="./../../audio/right.mp3" type="audio/mpeg">
  </audio>

  <!-- <audio id="myAudio3">
    <source src="./../../audio/bensound-smile.mp3" type="audio/mpeg">
  </audio> -->  

  <header>
    <div class="container">
      <div class="nav">
        <h2><span><i aria-hidden="true"></i></span> Aprende+Mate</h2>
        <nav>
          <ul>
            <!-- <li><a href="index.php">Inicio</a></li> -->
            <!-- <li class="current"><a href="index.html">Suma</a></li> -->
            <li><a href="suma.php">Suma</a></li>
            <li><a href="index.php">Juegos</a></li>
            <li><a href="../salir.php">Salir</a></li>            
          </ul>
        </nav>
      </div>
    </div>
  </header>  
  
  <div class="wrapper">
      <div class="equation">        

        <div class="cuantoEs">
          <h1>¿Cuánto es ...?</h1>
        </div>        

        <div class="equation-numbers">
          <h1 id="num1" style="color:#FE4A49"></h1>
          <h1 style="color: #2AB7CA;">+</h1>
          <h1 id="num2" style="color: #FED766">1</h1>
          <!-- <h1  style="color: #F86624">=</h1>
                            <h1  style="color: gray">?</h1> -->
        </div>
        
        <div id="mensaje" class="messageSize">
          <h1 id="message"></h1>
        </div>

        <div class="time">
          <h6>Tienes 1 minuto:</h6>
          <h6 id="stopwatch">00 minutos : 00 segundos</h6>            
        </div>

        <div class="score">
          <h1 style="color:#35bb10;">Puntos :</h1>
          <h1 id="score-nmb" style="color:#FE4A49">0</h1>
        </div>

        <div class="answer-options">
          <div class="options" style="background-color: #FE4A49;">
            <h1 id="option1">1</h1>
          </div>
          <div class="options" style="background-color: #2AB7CA;">
            <h1 id="option2">2</h1>
          </div>
          <div class="options" style="background-color: #FED766;">
            <h1 id="option3">3</h1>
          </div>
        </div>

      </div>
      
      
      <h1 id="codigo" hidden><?php echo $_SESSION['usuario']['codigo'] ?></h1> 
      <h1 id="nombre" hidden><?php echo $_SESSION['usuario']['nombre'] ?></h1> 
      <h1 id="apellido" hidden><?php echo $_SESSION['usuario']['apellido'] ?></h1> 
      

      
      
      <!-- <div class="answer-options">
        <div class="options" style="background-color: #FE4A49;">
          <h1 id="option1">1</h1>
        </div>
        <div class="options" style="background-color: #2AB7CA;">
          <h1 id="option2">2</h1>
        </div>
        <div class="options" style="background-color: #FED766;">
          <h1 id="option3">3</h1>
        </div>
      </div> -->
  </div>

  <script src="./../../js/suma.js"></script>
  
  
</body>
</html>