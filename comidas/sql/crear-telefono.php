<?php
include ('conexion.php');
$bn =$_POST['bn'];
$marca =$_POST['mar'];
$serial =$_POST['ser'];
$sistema =$_POST['sis'];
$ubicacion =$_POST['ubu'];
$estado =$_POST['es'];
$usuario =$_POST['usu'];
$nombre =$_POST['nom'];
$gerencia =$_POST['ger'];

$query = "INSERT INTO telefonos(bn,marcas,seria,sistema,ubicacion,estado,usuario,nombre,gerencia) VALUES ('$bn','$marca','$serial','$sistema','$ubicacion','$estado','$usuario','$nombre','$gerencia')";
$result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
$cmdtuples = pg_affected_rows($result);
header("Location:../principal-telefonos.php?usu=1");
echo $cmdtuples . " datos registrados.\n";
pg_free_result($result); 






 






