<?php


include('conexion.php');
$usuario = $_POST['usuario'];
$gerencia = $_POST['gerencia'];
$fecha = $_POST['fecha'];
$cantidad = $_POST['cantidad'];
$hora = $_POST['hora'];
$accion = $_POST['accion'];
$observacion = $_POST['observacion'];




$query = "INSERT INTO potes(usuario,gerencia,fecha,cantidad,hora,accion,observacion) VALUES ('$usuario','$gerencia','$fecha','$cantidad','$hora','$accion','$observacion')";
$result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
$cmdtuples = pg_affected_rows($result);
header("Location:../potes.php?usu=1");
echo $cmdtuples . " datos registrados.\n";
pg_free_result($result);
