<?php
	$usuario1 = "root";
	$password = "";
	$servidor = "localhost";
	$basededatos = "veterinaria";

	$usuario = $_POST['nombre'];
	$ciudad = $_POST['ciudad'];
    $genero = $_POST['sexo'];
    $telefono = $_POST['telefono'];
	$correo = $_POST['correo'];
	$contrasena= $_POST['contraseña'];
	static $id=3;

	$conexion = mysqli_connect( $servidor, $usuario1, $password) or die ("No se ha
	podido conectar al servidor de Base de datos");
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

    $sql = "INSERT INTO cliente (id,nombre, correo, telefono, genero, ciudad, pass)".
	"VALUES ('$id','$usuario', '$correo', '$telefono', '$genero', '$ciudad','$contrasena')";
	if (mysqli_query($conexion, $sql)) {
	    echo "New cliente created successfully";
		    session_start();
		    $_SESSION["usuario"] = $usuario;
			header("Location: views/cliente/Cliente.php");
	    } else {
			echo "Error1: " . mysqli_error($conexion);
	}
    $id= $id+1;
    mysqli_close($conexion);
?>
