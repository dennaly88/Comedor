<?php
include('conexion.php');
$usuario = $_POST['usuario'];
$gerencia = $_POST['gerencia'];
$tipo = $_POST['tipo'];
$solicitada = $_POST['solicitada'];
$accion = $_POST['accion'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$observacion = $_POST['observacion'];


$query = "INSERT INTO solicitud(usuario,gerencia,tipo,solicitada,accion,fecha,hora,observacion) VALUES ('$usuario','$gerencia','$tipo','$solicitada','$accion','$fecha','$hora','$observacion')";
$result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
$cmdtuples = pg_affected_rows($result);

pg_free_result($result);

$query1 = "INSERT INTO inventario(usuario,gerencia,tipo,cantidad,accion,fecha,hora,observacion) VALUES ('$usuario','$gerencia','$tipo','$cantidad','$accion','$fecha','$hora','$observacion')";
$result1 = pg_query($conexion, $query1) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
$cmdtuples1 = pg_affected_rows($result1);
header("Location:../comidas.php?usu=1");
echo $cmdtuples1 . " datos registrados.\n";
pg_free_result($result1);
