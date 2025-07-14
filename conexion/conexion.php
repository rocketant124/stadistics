<?php
 $host="localhost";
 $usuario="root";
 $contrasena="";
 $bd="bd_estadistica";
 $tabla1="usuarios";


 function conectar()
 {
    global $host, $usuario, $contrasena, $bd, $tabla1;
    
    if(!($link=mysqli_connect($host, $usuario, $contrasena)))
    {
        echo "Error al conectar la base de datos";
        exit();
    }

    if(!mysqli_select_db($link, $bd))
    {
        echo "Error al seleccionar la base de datos";
        exit();
    }

    echo "";
    return $link;
 }
$link=conectar();
?>