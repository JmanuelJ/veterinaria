<?php
	
	$usuario1 = "root";
	$password = "";
	$servidor = "localhost";
	$basededatos = "veterinaria";

	$usuario = $_POST['nombre'];
	$telefono = $_POST['telefono'];
	$correo = $_POST['correo'];
	$cedula = $_POST['cedula'];
	$contrasena= $_POST['contraseña'];
	$estado= 0; 
	$conexion = mysqli_connect( $servidor, $usuario1, $password) or die ("No se ha
	podido conectar al servidor de Base de datos");
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
	
    $sql = "INSERT INTO veterinario (cedula, nombre, telefono, correo, pass, estado)".
	"VALUES ('$cedula', '$usuario', '$telefono', '$correo', '$contrasena','$estado')";
	if (mysqli_query($conexion, $sql)) {
		echo "New veterinario created successfully";
		session_start();
        $_SESSION["usuario"] = $usuario;
		header("Location:Veterinario.php");
	    } else {
			echo "Error1: " . mysqli_error($conexion);
	}		
	mysqli_close($conexion);
?>