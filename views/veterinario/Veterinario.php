<?php
session_start();
if (empty($_SESSION["usuario"])) {
    header('Location: Login.html');
    exit();
}
echo "Bienvenido veterinario";
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
<body style="margin: 0;">

<!-- Navigation -->

<ul>
  <li ><a href="Principal_log_vet.html">Veterinaria</a></li>
  <li><a href="#tour">Galeria</a></li>
  <li><a href="Contacto_log_vet.html">Contacto</a></li>


  <li style="float:right"><a class="active2" href="../../Cierre.php"><b>Cerrar Sesión</b></a></li>
</ul>

<div class="row margen" align="center">
  <h1>Hola Veterinario</h2>
  <h1>Bienvenido a la pagina web de la veterinaria</h2>


</div>

<!--footer-->
<div class="row color">
    <a href="#"><i></i></a>
    <p>
    Follow Me
    </p>
</div>


</body>
</html>
