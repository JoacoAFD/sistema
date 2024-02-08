<?php

include('conexion.php');

$id_usuario = $_POST['id_usuario'];

$clave = md5($_POST['clave']);

$sql = "UPDATE usuario SET clave= md5('$clave') WHERE id_user='$id_usuario';";

$result = mysqli_query($conexion, $sql);

if ($result) 
{
	echo 
		"<script>
		alert('¡Contraseña Modificada!'); 
		window.location.href = 'index.php';
		</script>";
} 
else
{
	echo "Error: No se pudo guardar el registro ";
}

