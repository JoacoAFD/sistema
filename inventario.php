<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
      <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
      <script src="//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json"></script>
      <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
      <script>
      $(document).ready(function() {
        // Verifica si la ventana modal debe mostrarse
        <?php
        if (isset($_GET["editar"]) && $_GET["editar"] == "exitoso") {
          echo '$("#ventanaEditar").modal("show");';
        }
        elseif (isset($_GET["anadir"]) && $_GET["anadir"] == "exitoso") {
          echo '$("#ventanaAnadir").modal("show");';
        }
        elseif (isset($_GET["eliminar"]) && $_GET["eliminar"] == "exitoso") {
          echo '$("#ventanaEliminar").modal("show");';
        }
        ?>
      });
      </script>
      <link rel="stylesheet" href="CSS/inventario.css">
      <title>Inventario</title>
  </head>
<body>
  
  
  <nav class="row barraNav">
    <a href="inicio.php" class="col-md-1 text-center"><img class="mt-1 imgHogar" src="Img/hogar.png" width="35px" height="35px"></a>
    <a href="inventario.php" class="col-md-1 enlace text-center activo">Inventario</a>
    <a href="informacion.php" class="col-md-1 enlace text-center">Información</a>
    <div class="col-md-7 contenedorSalida">
        <a href="salir.php" class="enlaceSalir">Salir <img class="mt-1 imgSalir" src="Img/salir.png" width="25px" height="25px"></a>
    </div>
  </nav>
  
  <h1 class="text-center mt-4 ">Inventario de materiales</h1> 
  <h5 class="text-center text-muted">Lista de eventos y actividades guardadas dentro de la Unidad Audiovisual</h5>
  <div class="container">
    <a href="agregar_material.php" class="btn btn-primary">Añadir  <img src="Img/anadir.png" width="17px" height="17px" class="mb-1"></a>
    <br>
    <br>
    <div class="row">
    <table class="table" id="tabla">
      <thead class="table-dark">
        <tr>
          <th class="text-center">Descripción</th>
          <th class="text-center">Fecha</th>
          <th class="text-center">Formato</th>
          <th class="text-center">Ubicación</th>
          <th class="text-center">Acciones</th>
        </tr>
      </thead>

      <tbody>

<?php

include ('conexion.php');
$sql = "SELECT * FROM inventario";
$consulta = mysqli_query($conexion, $sql);

while($row = mysqli_fetch_assoc($consulta)) { 

?>
  <tr class="filaHover">
    <td class="text-center" width="500px"> <?php echo $row['descripcion'];?></td>
    <td class="text-center"> <?php echo $row['fecha'];?></td>
    <td class="text-center"> <?php echo $row['formato'];?></td>
    <td class="text-center"> <?php echo $row['ubicacion'];?> </td>
    <td class="text-center" width="250px"> 
      <a href="Editar_Material.php?id_inventario=<?php echo $row['id_inventario']; ?> "><button class="btn btn-success"><img src="Img/editar.png" width="17px" height="17px">  Editar</button></a>
      <a href="eliminar.php?id_inventario=<?php echo $row['id_inventario']; ?> "><button class="btn btn-danger"><img src="Img/eliminar.png" width="17px" height="17px"> Eliminar</button></a>
    </td>
  </tr>
<?php
}
?>

      </tbody>
    </table>
    </div>
  </div>
  <div class="modal" id="ventanaEditar" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Registro modificado</h5> 
        </div>
        <div class="modal-body">
          <p>El registro se ha modificado correctamente.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal" id="ventanaAnadir" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Registro guardado</h5> 
        </div>
        <div class="modal-body">
          <p>El registro se ha guardado correctamente en la base de datos.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal" id="ventanaEliminar" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Registro eliminado</h5> 
        </div>
        <div class="modal-body">
          <p>El registro se ha eliminado correctamente de la base de datos.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
  <footer class="bg-dark text-white py-3 fixed-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
            <p>&copy; 2023 Todos los derechos reservados. <a rel="license" href="http://creativecommons.org/licenses/by/4.0/"><img alt="Licencia de Creative Commons" src="Img/Licencia.png"/></p>
        </div>
        </div>
      </div>
    </div>
    <script>
      var table = new DataTable('#tabla', {
    language: {
        url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json',
    },
});
    </script>
  </footer>
</body>s
</html>


