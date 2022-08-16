<?php
include('conexion.php');
$fecha = date("Y-m-d");


$query = "DELETE FROM botellon where accion='Entregada' and fecha ='$fecha'";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());









header("Location: http:../resetear.php?usu=2");
