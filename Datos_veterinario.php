<?php
	
	$usuario = "root";
	$password = "";
	$servidor = "localhost";
	$basededatos = "veterinaria";

	$nombre = $_POST['nombre'];
	$telefono = $_POST['telefono'];
	$correo = $_POST['correo'];
	$cedula = $_POST['cedula'];
	$contrasena= $_POST['contraseña'];

	$conexion = mysqli_connect( $servidor, $usuario, $password) or die ("No se ha
	podido conectar al servidor de Base de datos");
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
	
    $sql = "INSERT INTO veterinario (cedula, nombre, telefono, correo, pass)".
	"VALUES ('$cedula', '$nombre', '$telefono', '$correo', '$contrasena')";
	if (mysqli_query($conexion, $sql)) {
	    echo "New veterinario created successfully";
	    } else {
			echo "Error1: " . mysqli_error($conexion);
	}		


?>