<?php
    // header('Access-Control-Allow-Origin: *');
    // $cn = new mysqli("localhost","root","","proyecto");
    require_once("config.php");
    $cod = $_POST["codigo_alumno"];
    $nom = $_POST["nombre"];
    $ape = $_POST["apellido"];
    $punt = $_POST["puntaje"];
    $tie = $_POST["tiempo"];
    $rs = mysqli_query($cn, "insert into suma (codigo_alumno,nombre,apellido,puntaje,tiempo) 
        values('".$cod."','".$nom."', '".$ape."','".$punt."','".$tie."')");

    echo $cn->insert_id;
    $cn->close();

?>