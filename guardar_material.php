<?php
include('conexion.php');

$Descripcion = $_POST['descripcion'];
$Fecha = $_POST['fecha'];
$Formato = $_POST['formato'];
$Ubicacion = $_POST['ubicacion'];

$sql = "INSERT INTO inventario(descripcion, fecha, formato, ubicacion) VALUES (" . "'$Descripcion', " . "'$Fecha', " . "'$Formato', " . "'$Ubicacion');";

$result = mysqli_query($conexion, $sql);

if ($result) {
	header("Location: inventario.php?anadir=exitoso");
} 
else{
	echo "Error: No se pudo guardar el registro ";
}
