<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/index.css">
    <title>Inicio de Sesión</title>
</head>
<body>
    <div class="container text-center mt-5 contenedorLogin">
        <img src="Img/LogoUPTAG.jpg" width="120px" height="120px" class="mt-3 mb-2 logo">
        <h3 class="">Unidad Audiovisual <br>"Jubal Mavarez"</h3>
        <form method="POST" action="login.php">
            <div class="form-group">
                <label for="usuario" class="subTexto text-muted">Usuario</label>
                <input type="text" name="usuario" class="form-control">
                <br>
                <label for="contraseña" class="subTexto text-muted">Contraseña</label>
                <input type="password" name="clave" class="form-control">
                <br>
                <button type="submit" class="btn mb-3 botonLogin">Ingresar</button>
                <br>
                <a href="recuperar.php" class="btn btn-info mb-3 botonContrasena">¿Olvidaste tu contraseña?</a>
            </div>
        </form>
    </div>
</body>
</html>