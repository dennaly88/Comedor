<?php
include('conexion.php');
$usuario = $_POST['usuario'];
$gerencia = $_POST['gerencia'];
$tipo = $_POST['tipo'];
$cantidad = $_POST['cantidad'];
$accion = $_POST['accion'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$observacion = $_POST['observacion'];


$query = "INSERT INTO solicitud(usuario,gerencia,tipo,cantidad,accion,fecha,hora,observacion) VALUES ('$usuario','$gerencia','$tipo','$cantidad','$accion','$fecha','$hora','$observacion')";
$result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
$cmdtuples = pg_affected_rows($result);
header("Location:../principal-solicitud.php?usu=1");
echo $cmdtuples . " datos registrados.\n";
pg_free_result($result);
