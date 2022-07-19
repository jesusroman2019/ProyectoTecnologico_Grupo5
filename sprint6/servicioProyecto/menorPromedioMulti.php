<?php
    //ESTO ES PARA QUE SE PUEDA ACCEDER AL SERVICIO WEB DESDE CUALQUIER UBICACION
    //header('Access-Control-Allow-Origin: *');

    //$cn = mysqli_connect("localhost","root","","proyecto");

    require_once("config.php");

    //ASI SE ESTABLECE LA CONEXION A LA BASE DE DATOS
    $rs = mysqli_query($cn,"SELECT codigo_alumno, nombre, apellido, ROUND(AVG (puntaje), 1) AS puntos FROM multiplicacion GROUP BY codigo_alumno DESC HAVING puntos < 4");
    //SE DEFINE LA CONSULTA
    while($row = mysqli_fetch_assoc($rs)){
        //SE EXAMINA CON WHILE CADA UNA DE LAS FILAS $row
        $res[] = array_map("utf8_encode",$row);
        //CADA FILA SE AGREGA AL ARREGLO $res[]
    }
    echo json_encode($res);
    //SE CONVIERTE A FORMATO JSON CON json_encode
    //Y SE IMPRIME O MUESTRA CON echo


    mysqli_close($cn);//SE CIERRA LA CONEXION   
?>