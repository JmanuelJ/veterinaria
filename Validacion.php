<?php   
$usuario="root";
$password="";
$servidor="localhost";
$basededatos="veterinaria";

$conexion = mysqli_connect( $servidor, $usuario, $password,$basededatos) or die ("No se ha
podido conectar al servidor de Base de datos".mysqli_connect_error());

$usuario = $_POST["usuario"];
$cont = $_POST["cont"];

$query= mysqli_query($conexion,"SELECT * FROM cliente WHERE nombre='".$usuario."' and pass='".$cont."'");
$nr= mysqli_num_rows($query);
if($nr>0){
    header("Location: Cliente.php");
}else{
    echo "No ingreso";
}

?>