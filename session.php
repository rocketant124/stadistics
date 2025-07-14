<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion</title>
    <link rel="stylesheet" href="css/indexstyle.css">
</head>

<header>
  <h1>Análisis Estadísticos Profesionales</h1>
  <p>Datos que hablan. Decisiones con base científica.</p>
</header>

<body>
    <section id="login" class="login-container">
  <h2>Iniciar Sesión</h2>
  <form action="create_users.php" method="post">
    <label for="usuario">Usuario:</label>
    <input type="text" id="usuario" name="usuario" required>

    <label for="contrasena">Contraseña:</label>
    <input type="password" id="contrasena" name="contrasena" required>

    <input class="acept" type="submit" value="Entrar">
    
   <a href="index.php"><input class="cancel" type="button" value="Cancelar"></a> 
  </form>
</section>
</body>
</html>