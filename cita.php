<?php
	
	$usuario = "root";
	$contrasena = "";
	$servidor = "localhost";
	$basededatos = "veterinaria";

	$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");//conecta servidor
	
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );//conecta base de datos*/
	
	$consulta = "SELECT * FROM cita";//Realiza la consulta a la BD seleccionada
	
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

	$cedula = $_POST['cedula'];
	$fecha = $_POST['fecha'];
	$cita = $_POST['cita'];

	$columna = mysqli_fetch_array( $resultado );
	$id = $columna['id'] + 1;
	$ncliente = $columna['numeroc'] + 1;
	//Obtiene los datos de la base de datos
	/*
	while ($columna = mysqli_fetch_array( $resultado ))
	{
		echo "<tr>";
		echo "<td>" . $columna['id'] . "</td><br><td>" . $columna['tipo'] . "</td><br><td>" . $columna['fecha'] . "</td><br><td>" . $columna['numeroc'] . "</td><br><td>" . $columna['ced'] . "</td>";
		echo "</tr>";
	}*/

	$consulta = "INSERT INTO cita(id, tipo, fecha, numeroc, ced) VALUES('$id', '$cita', '$fecha', '$ncliente', '$cedula')";
	mysqli_query( $conexion, $consulta ) or die ( "2--Algo ha ido mal en la consulta a la base de datos");

	/*echo $cedula . "\n";
	echo $fecha . "\n";
	echo $cita . "\n";
	echo $id . "\n";
	echo $ncliente;*/

?>