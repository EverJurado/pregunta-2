<?php
	$con = mysqli_connect("localhost", "root", "", "bdever");
	
	$id = $_GET["ci"];
	$nombre =$_GET["nombre"];
	$apellido =$_GET["apellido"];
    $rol =$_GET["rol"];
    $contrasena =$_GET["contrasena"];

	$sql = "INSERT INTO persona (ci, nombre, apellido, rol, contrasena) values ('$id','$nombre','$apellido', '$rol','$contrasena')";
	mysqli_query($con,$sql);
	header("Location: administrador.php")
	//header("Location: hollamundo.php")
?>