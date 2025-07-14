<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Análisis Estadísticos Profesionales</title>
  <link rel="stylesheet" href="css/indexstyle.css">
 <style>
      .galeria {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
      gap: 15px;
      max-width: 900px;
      margin: auto;
    }

    .galeria img {
      width: 100%;
      border-radius: 8px;
      cursor: pointer;
      transition: transform 0.3s ease;
    }

    .galeria img:hover {
      transform: scale(1.05);
    }

    /* Estilo del modal */
    .modal {
      display: none;
      position: fixed;
      z-index: 999;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0,0,0,0.8);
    }

    .modal:target {
      display: block;
    }

    .modal-content {
      display: block;
      margin: 5% auto;
      max-width: 80%;
      max-height: 80%;
    }

    .cerrar {
      position: absolute;
      top: 30px;
      right: 40px;
      color: white;
      font-size: 30px;
      text-decoration: none;
    }
  </style>
</head>
<body>
<header>
  <h1>Análisis Estadísticos Profesionales</h1>
  <p>Datos que hablan. Decisiones con base científica.</p>
</header>
<nav>
  <a href="index.php#servicios">Servicios</a>
  <a href="index.php#nosotros">Sobre Nosotros</a>
  <a href="index.php#contacto">Contacto</a>
  <a href="proyectos.php">Proyectos</a>
  <a href="session.php">Iniciar Sesión</a>
</nav>
 
 <section class="section" id="Objetivo">
    <h3>Objetivo</h3>
    <p>Diseñar, implementar y habilitar un laboratorio de análisis estadístico compuesto por
16 computadoras interconectadas, que permitan realizar trabajos prácticos orientados
al análisis de para analizar el tiempo que pasan las personas utilizando las redes
sociales y el impacto que tienen en su vida. Esto lo lograremos mediante una base de
datos que recopila información de las diferentes redes sociales y sus usuarios.</p>
   </section>

 <section class="section" id="ubicacion">
    <h3>Ubicacion</h3>
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3786.8235114186145!2d-99.53092352411254!3d18.35533437419935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cc381515555555%3A0x2ca126793d4e0991!2sInstituto%20Tecnologico%20de%20Iguala%20Gro.!5e0!3m2!1ses!2smx!4v1752106156581!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<section class="section" id="espacios">
    <h3>Espacios físicos:</h3>
    <img src="imagenes/design.jpg" alt="" height="500rem" width="600rem">
</section>

<section class="section" id="imagenes">
<h2 style="text-align:center;">Galería de Prototipo de Maquetas</h2>

<div class="galeria">
  <a href="#img1"><img src="imagenes/img1.jpg" alt="Gráfico 1"></a>
  <a href="#img2"><img src="imagenes/img2.jpg" alt="Gráfico 2"></a>
  <a href="#img3"><img src="imagenes/img3.jpg" alt="Gráfico 3"></a>
  <a href="#img4"><img src="imagenes/img4.jpg" alt="Gráfico 4"></a>
  <a href="#img4"><img src="imagenes/img5.jpg" alt="Gráfico 5"></a>
</div>

<!-- Modales para cada imagen -->
<div id="img1" class="modal">
  <a href="#imagenes" class="cerrar">&times;</a>
  <img src="imagenes/img1.jpg" class="modal-content" alt="Gráfico 1 ampliado">
</div>

<div id="img2" class="modal">
  <a href="#imagenes" class="cerrar">&times;</a>
  <img src="imagenes/img2.jpg" class="modal-content" alt="Gráfico 2 ampliado">
</div>

<div id="img3" class="modal">
  <a href="#imagenes" class="cerrar">&times;</a>
  <img src="imagenes/img3.jpg" class="modal-content" alt="Gráfico 3 ampliado">
</div>

<div id="img4" class="modal">
  <a href="#imagenes" class="cerrar">&times;</a>
  <img src="imagenes/img4.jpg" class="modal-content" alt="Gráfico 4 ampliado">
</div>

<div id="img5" class="modal">
  <a href="#imagenes" class="cerrar">&times;</a>
  <img src="imagenes/img5.jpg" class="modal-content" alt="Gráfico 5 ampliado">
</div>
</section>



<footer class="footer">
  <p>&copy; 2025 Análisis Estadísticos Profesionales. Todos los derechos reservados.</p>
</footer>

</body>
</html>
