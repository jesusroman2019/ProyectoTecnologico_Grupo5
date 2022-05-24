<?php
    header('Access-Control-Allow-Origin: *');
    // header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
    // header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');  
	// $cn = mysqli_connect("localhost","davidchu_empresa","empresa","davidchu_empresa");
    $cn = new mysqli("localhost","root","","proyecto");

    if($cn->connect_errno):
        echo "Error al conectarse con MySQL debido al error".$mysqli->connect_error;
    endif; 
?>