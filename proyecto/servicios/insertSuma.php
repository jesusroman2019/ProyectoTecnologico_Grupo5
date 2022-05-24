<?php
    header('Access-Control-Allow-Origin: *');
    $cn = new mysqli("localhost","root","","proyecto");
    $cod = $_POST["codigo_alumno"];
    $nom = $_POST["nombre"];
    $ape = $_POST["apellido"];
    $punt = $_POST["puntaje"];
    $rs = mysqli_query($cn, "insert into suma (codigo_alumno,nombre,apellido,puntaje) 
        values('".$cod."','".$nom."', '".$ape."','".$punt."')");

    echo $cn->insert_id;
    $cn->close();

?>