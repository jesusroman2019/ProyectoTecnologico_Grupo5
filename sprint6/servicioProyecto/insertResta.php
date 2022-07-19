<?php
    // header('Access-Control-Allow-Origin: *');
    // $cn = new mysqli("localhost","root","","proyecto");
    require_once("config.php");
    $cod = $_POST["codigo_alumno"];
    $nom = $_POST["nombre"];
    $ape = $_POST["apellido"];
    $punt = $_POST["puntaje"];
    $tie = $_POST["tiempo"];
    $hour = $_POST["hora"];
    $fec = $_POST["fecha"];
    $rs = mysqli_query($cn, "insert into resta (codigo_alumno,nombre,apellido,puntaje,tiempo,hora,fecha) 
        values('".$cod."','".$nom."', '".$ape."','".$punt."','".$tie."','".$hour."','".$fec."')");

    echo $cn->insert_id;
    $cn->close();

?>