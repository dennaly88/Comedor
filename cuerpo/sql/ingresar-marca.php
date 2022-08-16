<?php
include ('conexion.php');

$nombre =$_POST['nom'];




$query = "INSERT INTO marcas (nombre) VALUES ('$nombre')";
$result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
$cmdtuples = pg_affected_rows($result);
header("Location:../principal-marcas.php?usu=1");
echo $cmdtuples . " datos registrados.\n";
pg_free_result($result); 





