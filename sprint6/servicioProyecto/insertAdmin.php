<?php 
    require_once("config.php");    
    $cod = $_POST["codigo"];
    $nom = $_POST["nombre"];
    $ape = $_POST["apellido"];
    $usu = $_POST["usuario"];
    $pass = $_POST["password"];
    $tel = $_POST["telefono"];
    $ema = $_POST["email"];
    $fec = $_POST["fecha"];
    $cre = $_POST["creador"];
    $est = $_POST["estado"];
    $tip = "Administrador";
    $rs = mysqli_query($cn, "insert into usuarios (codigo,nombre,apellido,usuario,password,telefono,email,fecha,creador,estado,tipo_usuario) 
        values('".$cod."','".$nom."', '".$ape."','".$usu."','".$pass."','".$tel."','".$ema."','".$fec."','".$cre."','".$est."','".$tip."')");

    echo $cn->insert_id;
    $cn->close();
?>

