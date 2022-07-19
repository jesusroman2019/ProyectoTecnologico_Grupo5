<?php 
    require_once("config.php");
    $codigo = $_POST["codigo"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];

    $rs = $cn->query(
        "UPDATE usuarios SET nombre='$nombre', apellido='$apellido', usuario='$usuario', password='$password', telefono='$telefono', email='$email' WHERE codigo='$codigo'"
    );

    $cn->close();

?>