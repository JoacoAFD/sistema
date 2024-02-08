<?php

session_start();

include('conexion.php');

$user = $_SESSION['usuario'];
$respuesta = $_POST['respuesta'];


$sql= "SELECT * FROM usuario WHERE usuario = '$user' and respuesta =md5('$respuesta')";

	$resultado = mysqli_query($conexion,$sql);
	if (mysqli_num_rows($resultado) == 0)
	{
		echo "<script text='text/javascript'>
		alert('Respuesta incorrecta');
		window.location = 'pregunta.php';
		</script>";
	}else
	{

	    $row=mysqli_fetch_assoc($resultado);
	    $_SESSION["id"] =$row['id_user'];
	    $_SESSION["user"] =$row['usuario'];
		header("Location: nueva_clave.php");
	}
