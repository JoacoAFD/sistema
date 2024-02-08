<?php

session_start();
include('conexion.php');


$user = $_POST["usuario"];

$sql= "SELECT * FROM usuario WHERE usuario = '$user'";

$resultado = mysqli_query($conexion,$sql);
	if (mysqli_num_rows($resultado) == 0)
	{
		echo "<script text='text/javascript'>
		alert('Usuario no esta registrado');
		window.location = 'recuperar.php';
		</script>";
	}else
	{
	
	    $row=mysqli_fetch_assoc($resultado);
	    $_SESSION["id"] =$row['id_user'];
		$_SESSION["usuario"] =$row['usuario'];
		$_SESSION["pregunta"] =$row['pregunta'];
		$_SESSION["respuesta"] =$row['respuesta'];

		header("Location: pregunta.php");
	}
