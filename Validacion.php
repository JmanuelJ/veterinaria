<?php   
$usuario1="root";
$password="";
$servidor="localhost";
$basededatos="veterinaria";

$conexion = mysqli_connect( $servidor, $usuario1, $password,$basededatos) or die ("No se ha
podido conectar al servidor de Base de datos".mysqli_connect_error());

$usuario = $_POST["usuario"];
$cont = $_POST["cont"];

$query= mysqli_query($conexion,"SELECT * FROM cliente WHERE nombre='".$usuario."' and pass='".$cont."'");
$query1= mysqli_query($conexion,"SELECT * FROM veterinario WHERE nombre='".$usuario."' and pass='".$cont."'");
$query2= mysqli_query($conexion,"SELECT * FROM veterinarioadm WHERE nombre='".$usuario."' and pass='".$cont."'");
$nr= mysqli_num_rows($query);
$nrr= mysqli_num_rows($query1);
$nrrr= mysqli_num_rows($query2);
if($nr>0){
    session_start();
    $_SESSION["usuario"] = $usuario;
    header("Location: views/cliente/Cliente.php");
}else if($nrr>0){
    session_start();
    $_SESSION["usuario"] = $usuario;
    header("Location: views/veterinario/Veterinario.php");
}else if($nrrr>0){
    session_start();
    $_SESSION["usuario"]= $usuario;
    header("Location: views/administrador/Administrador.php");
}else{
	echo("error de autenticacion");
	header("Location: Login.html");
}
?>