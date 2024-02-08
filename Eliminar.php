<?php

$id_inv = $_REQUEST['id_inventario'];

include('conexion.php');
$sql = "DELETE FROM inventario WHERE id_inventario='$id_inv'";
$result = mysqli_query($conexion, $sql);

if ($result) {
	header("Location: inventario.php?eliminar=exitoso");
} 
else {
	echo "Error: No se pudo eliminar el registro ";
	}