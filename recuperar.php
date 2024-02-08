<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="CSS/recuperar.css">
    <title>Olvido de contraseña</title>
  </head>
  <body>
    <!--login -->
    <div class="container text-center mt-5 contenedor">
      <img src="Img/usuario.svg" width="90px" height="90px" class="mt-2 mb-4">
      <h3>Recuperar contraseña</h3>
      <form action="recuperar_clave.php" method="POST">
        <div class="form-group">
          <label for="usuario" class="text-center mt-4">Usuario</label>
          <input type="text" class="form-control" name="usuario">
          <button type="submit" class="btn btn-dark mt-4 mb-3 mr-4">Confirmar</button>
          <a href="salir.php" class="btn btn-dark mt-4 mb-3 ml-2"><img src="Img/flechaAtras.png" width="15px" height="15px"> Regresar</a>
        </div>
      </form>
    </div>
  </body>
</html>