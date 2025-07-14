<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="with=device-with, initial-scale=1.0">
        <title>Altas Usuario</title>
        <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body>
    
<?php
 include('conexion/conexion.php');
?>    
            <div class="tabla">
           
            <?php
                 if ($_POST) {
                    // Obtén los datos del formulario
                    $nombre = $_POST['usuario'];
                    $contrasena = $_POST['contrasena']; // Contraseña que el usuario ingresa

                    // Consulta para insertar los datos en la base de datos
                    $queryInsert  = "INSERT INTO $tabla1 (usuario , contrasena) 
                                     VALUES ('$nombre', '$contrasena')";
                    
                    // Ejecuta la consulta
                    $resultInsert = mysqli_query($link, $queryInsert);

                    // Verifica si la inserción fue exitosa
                    if ($resultInsert) {
                        echo "Te has registrado con éxito";
                    } else {
                        echo "Error, no se ingresaron los datos";
                    }
                }

                // Redirige al formulario después de 2 segundos
                header("refresh:2; session.php");
            ?>
            </div>   
</body>
</html>
