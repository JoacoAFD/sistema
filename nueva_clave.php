<?php

session_start();

$id = $_SESSION['id'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="CSS/nueva_clave.css">
  <title>Recuperar contraseña</title>
</head>
<body>
  <div class="container contenedor text-center mt-5">
    <img src="Img/usuario.svg" width="90px" height="90px" class="mt-2 mb-4">
    <h3 class="mb-3">Recuperar contraseña</h3>
    <form action="update_clave.php" method="POST">

      <label for="usuario" class="form-label">Nueva contraseña</label>
      <input type="password" class="form-control" name="clave" aria-describedby="emailHelp">

      <label for="clave" class="form-label">Repita contraseña</label>
      <input type="password" class="form-control" name="clave1">

      <input type="hidden" name="id_usuario" class="form-control" value="<?php echo $id;   ?>" >

      <button type="submit" class="btn btn-dark mt-4 mb-3">Actualizar contraseña</button>
      <a href="salir.php" class="btn btn-dark mt-4 mb-3 ml-2"><img src="Img/equisCirculo.png" width="20px" height="20px"> Cancelar</a>
      
    </form>
  </div>
</body>
</html>