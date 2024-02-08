<?php
    include('conexion.php'); /* conexion con la base de datos */

    /* se seleciona la informacion a editar*/

    $id_inv = $_REQUEST['id_inventario'];

    $sql = "select * from inventario where id_inventario = '$id_inv'";

    $result = mysqli_query($conexion, $sql);

    $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/editar_material.css">
    <title>Editar material</title>
</head>
<body>
    <nav class="navbar justify-content-center mb-4" style="background: white; font-size: 30px; font-family: 'Verdana';">Editar material</nav>
    <h5 class="text-center mb-3 subTexto">Completa el formulario de abajo para modificar el material seleccionado dentro de la base de datos de la Unidad Audiovisual</h5>
    <div class="container contenedor">
        <form action="update_material.php" method="post" class="text-center mt-1">
            <label><b>Descripción</b></label>
            <input type="text" name="descripcion" class="form-control" value="<?php echo $row['descripcion']; ?>" required>
            <label><b>Fecha</b></label>
            <input type="date" name="fecha" class="form-control" value="<?php echo $row['fecha']; ?>" required>
            <label><b>Formato</b></label>
            <select class="form-control" name="formato" required>
                <option value="<?php echo $row['formato']; ?>"><?php echo $row['formato']; ?></option>
                <option value="Video">Video</option>
                <option value="Imagen">Imagen</option>
            </select>
            <label><b>Ubicación</b></label>
            <input type="text" name="ubicacion" class="form-control" value="<?php echo $row['ubicacion']; ?>" required>
            <input type="hidden" name="id_inventario" value="<?php echo $row['id_inventario']; ?>">   
            <input type="submit" value="Actualizar" class="btn btn-success mt-2">
            <a href="inventario.php" class="btn btn-danger mt-2 ml-4">Cancelar</a>
        </form>
    </div>
</body>
</html>