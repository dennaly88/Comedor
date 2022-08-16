<?php
include ('conexion.php');
$bn =$_POST['bn'];
$marca =$_POST['mar'];
$serial =$_POST['ser'];
$ubicacion =$_POST['ubu'];
$estado =$_POST['es'];
$usuario =$_POST['usu'];

$gerencia =$_POST['ger'];

$query = "INSERT INTO monitores(bn,marca,seria,ubicacion,estado,usuario,gerencia) VALUES ('$bn','$marca','$serial','$ubicacion','$estado','$usuario','$gerencia')";
$result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
$cmdtuples = pg_affected_rows($result);
header("Location:../principal-monitor.php?usu=1");
echo $cmdtuples . " datos registrados.\n";
pg_free_result($result); 






 






