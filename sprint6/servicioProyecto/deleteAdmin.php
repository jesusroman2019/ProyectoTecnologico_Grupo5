<?php 

    require_once("config.php");
    $codigo = $_POST["codigo"];
    $rs = $cn->query("DELETE FROM usuarios WHERE codigo = $codigo");
    echo $cn->insert_id;
    $cn->close();

?>