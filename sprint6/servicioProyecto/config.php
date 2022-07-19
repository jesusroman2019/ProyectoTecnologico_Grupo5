<?php
    header('Access-Control-Allow-Origin: *');    
    $cn = new mysqli("localhost","root","","proyecto");

    if($cn->connect_errno):
        echo "Error al conectarse con MySQL debido al error".$mysqli->connect_error;
    endif; 
?>