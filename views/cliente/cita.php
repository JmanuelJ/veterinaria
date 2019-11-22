
<?php
	$usuario1 = "root";
	$password = "";
	$servidor = "localhost";
	$basededatos = "veterinaria";

	$cedula = $_POST['cedula'];
	$fecha = $_POST['fecha'];
	$tipo = $_POST['cita'];

	$conexion = mysqli_connect( $servidor, $usuario1, $password) or die ("No se ha
	podido conectar al servidor de Base de datos");
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
    $query= mysqli_query($conexion,"SELECT * FROM cita");
	$aux = mysqli_num_rows( $query );
	$nocit=$aux+1;
	$id= rand(3,200);
	
    $sql = "INSERT INTO cita (id,tipo, fecha, numeroc)".
	"VALUES ('$tipo', '$fecha', '$nocit')";
	if (mysqli_query($conexion, $sql)) {
	    echo "New cita created successfully";
			header("Location: Cliente.php");
	    } else {
			echo "Error1: " . mysqli_error($conexion);
	}
    mysqli_close($conexion);
?>