<?php

include('conexion.php');

$id_inv = $_REQUEST['id_inventario'];

$descripcion = $_POST['descripcion'];
$Fecha = $_POST['fecha'];
$Formato = $_POST['formato'];
$Ubicacion = $_POST['ubicacion'];


$sql = "UPDATE inventario SET descripcion='$descripcion',fecha='$Fecha',formato='$Formato',ubicacion='$Ubicacion' WHERE id_inventario='$id_inv'";

  $result = mysqli_query($conexion, $sql);

  if ($result) {
	header("Location: inventario.php?editar=exitoso");

	} else {
	    echo "Error: No se pudo guardar el registro ";
	}

