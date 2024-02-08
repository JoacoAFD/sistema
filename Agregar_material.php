<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/agregar_material.css">
    <title>Nuevo Material</title>
</head>
<body>
    <nav class="navbar justify-content-center mb-4" style="background: white; font-size: 30px; font-family: 'Verdana';">Registrar nuevo material</nav>
    <h5 class="text-center mb-3 subTexto">Completa el formulario de abajo para registrar el nuevo material a la base de datos de la Unidad Audiovisual</h5>
    <div class="container">
        <form action="guardar_material.php" method="POST" class="text-center mt-3 formulario">
            <label><b>Descripción</b></label>
            <input class="form-control" type="text" name="descripcion" placeholder="Descripción" required>
            <label><b>Fecha</b></label>
            <input class="form-control" type="date" name="fecha" placeholder="Fecha" required>
            <label><b>Formato</b></label>
            <select class="form-control" name="formato" required>
                <option value="">Seleccione un formato</option>
                <option value="Video">Video</option>
                <option value="Imagen">Imagen</option>
            </select>
            <label><b>Ubicacion</b></label>
            <input class="form-control" type="text" name="ubicacion" placeholder="Ubicacion del archivo" required>   
            <input type="submit" value="Registrar" class="btn btn-success mt-2">
            <a href="inventario.php" class="btn btn-danger mt-2 ml-4">Cancelar</a>
        </form>
    </div>
</body>
</html>
