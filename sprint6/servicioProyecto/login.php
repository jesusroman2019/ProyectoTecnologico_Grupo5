<?php

//require_once("config.php");

//identificar peticion ajax - para que no vaya vacia
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
    
    require 'config.php';    
    sleep(2);
    session_start();
    
    //$mysqli->set_charset('utf8');
    $cn->set_charset('utf8');
    

    $usuario = $cn->real_escape_string($_POST['usuariolg']);
    $pas = $cn->real_escape_string($_POST['passlg']);

    //consulta a la base de datos
    if($nueva_consulta = $cn->prepare("SELECT codigo, nombre, apellido, usuario, password, tipo_usuario FROM usuarios WHERE usuario = ? OR password = ?")){

        //agregar parametros
        $nueva_consulta->bind_param('ss', $usuario, $pas);

        $nueva_consulta->execute();

        $resultado = $nueva_consulta->get_result();
        
        //evaluar coincidencia con la base de datos       
        if($resultado->num_rows == 1){
            while($datos= $resultado->fetch_assoc()){
                    $dbusername = $datos['usuario'];
                    $dbpassword=$datos['password']; 
                    
                    if($usuario == $dbusername && $pas == $dbpassword) {  
                        //arreglo asociativo
                        //$datos = $resultado->fetch_assoc();            
                        $_SESSION['usuario'] = $datos;
                        //enviar respuesta a js
                        echo json_encode(array('error' => false, 'tipo' => $datos['tipo_usuario']));
                        } 
                        else if($usuario == $dbusername && $pas != $dbpassword)
                        {
                        echo json_encode(array('error' => true, 'errorPassword' => true));
                        }
                        else if($usuario != $dbusername && $pas == $dbpassword)
                        {
                        echo json_encode(array('error' => true, 'errorUser' => true));
                        }                        
               }
        
        $nueva_consulta->close();
            }else{                
                echo json_encode(array('error' => true, 'errorBoth' => true));
            }
    }

}

//$mysqli->close();
mysqli_close($cn);//SE CIERRA LA CONEXION

?>
