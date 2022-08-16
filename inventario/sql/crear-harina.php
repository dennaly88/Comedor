<?php
    include ('conexion.php');
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $unidad = $_POST['unidad'];
    $usuario = $_POST['usuario']; 
    $cantidad = $_POST['cantidad'];
    $accion = $_POST['accion'];
    $queryhp = "INSERT INTO harinas (nombre,fecha,unidad,usuario,cantidad,accion) VALUES ('$nombre','$fecha','$unidad','$usuario','$cantidad','$accion')";
    $res = pg_query($conexion,$queryhp) or die('ERROR AL INSERT: ' . pg_last_error().print_r($_POST));
    header("Location:../principal-contador.php?");
    echo $cmdtuples28 . " datos registrados.\n";
    pg_free_result($res); 
?>     