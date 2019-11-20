<?php
	$usuario = "root";
	$password = "";
	$servidor = "localhost";
	$basededatos = "veterinaria";

	$nombre = $_POST['nombre'];
	$ciudad = $_POST['ciudad'];
    $genero = $_POST['sexo'];
    $telefono = $_POST['telefono'];
	$correo = $_POST['correo'];
	$contrasena= $_POST['contraseña'];

	$conexion = mysqli_connect( $servidor, $usuario, $password) or die ("No se ha
	podido conectar al servidor de Base de datos");
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

    $sql = "INSERT INTO cliente (nombre, correo, telefono, genero, ciudad, pass)".
	"VALUES ('$nombre', '$correo', '$telefono', '$genero', '$ciudad','$contrasena')";
	if (mysqli_query($conexion, $sql)) {
	    echo "New cliente created successfully";
	    
			header("Location:Cliente.php");
	    } else {
			echo "Error1: " . mysqli_error($conexion);
	}

    mysqli_close($conexion);
?>
