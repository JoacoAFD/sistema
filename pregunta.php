<?php
session_start();
$usu = $_SESSION['usuario'];
$pregunta = $_SESSION['pregunta'];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="CSS/pregunta.css">
    <title>Validar respuesta</title>
  </head>
  <body>
    <div class="container contenedor text-center mt-5">
      <img src="Img/usuario.svg" width="90px" height="90px" class="mt-2 mb-4">
      <h3 class="mb-3">Recuperar contraseña</h3>
      <h5><b>Usuario</b><br> <i><?php echo $usu; ?></i></h5>
      <h5 class="mt-3 mb-3"><b>Pregunta de seguridad</b><br><i>¿<?php echo $pregunta; ?>?</i></h5>
      <!--login -->
      <form action="validar_res.php" method="POST">
        <div class="from-group">
          <label for="usuario">Respuesta</label>
          <input type="text" class="form-control" name="respuesta" aria-describedby="emailHelp">
          <button type="submit" class="btn btn-dark mt-4 mb-3 mr-4">Confirmar</button>
          <a href="salir.php" class="btn btn-dark mt-4 mb-3 ml-2"><img src="Img/flechaAtras.png" width="15px" height="15px"> Regresar</a>
        </div>
      </form>
    </div>
  </body>
</html>
