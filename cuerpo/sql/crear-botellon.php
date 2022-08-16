<?php
include('conexion.php');
$usuario = $_POST['usuario'];
$gerencia = $_POST['gerencia'];
$cantidad = $_POST['cantidad'];
$accion = $_POST['accion'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$observacion = $_POST['observacion'];


$query = "INSERT INTO botellon(usuario,gerencia,cantidad,accion,fecha,hora,observacion) VALUES ('$usuario','$gerencia','$cantidad','$accion','$fecha','$hora','$observacion')";
$result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
$cmdtuples = pg_affected_rows($result);
header("Location:../principal-botellones.php?usu=1");
echo $cmdtuples . " datos registrados.\n";
pg_free_result($result);
     