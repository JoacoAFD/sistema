<?php
session_start();
require_once('conexion.php');
$user = $_POST["usuario"];
$clave= md5($_POST["clave"]);
	$sql= "SELECT * FROM usuario WHERE usuario = '$user' AND clave= md5('$clave')";
	$resultado = mysqli_query($conexion,$sql);
	if (mysqli_num_rows($resultado) == 0)
	{
		echo "<script text='text/javascript'>
		alert('Usuario y/o clave incorrecta');
		window.location = 'index.php';
		</script>";
	}
	else
	{
		$_SESSION["user"] = $user;
		header("Location: inicio.php");
	}
?>