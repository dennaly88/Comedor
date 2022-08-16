<?php
    include ('conexion.php');
    $id = $_GET['id'];
    $eli_id = $_POST['eli_id'];
    $eli_nombre = $_POST['eli_nombre'];
    $eli_unidad = $_POST['eli_unidad'];
    $eli_cantidad = $_POST['eli_cantidad'];
    $eli_usuario = $_POST['eli_usuario'];
    $eli_fecha = $_POST['eli_fecha'];
    $eli_accion = "Editar";

    $query10 = "UPDATE harinas SET id = '$eli_id', nombre = '$eli_nombre', unidad = '$eli_unidad', cantidad = '$eli_cantidad', usuario = '$eli_usuario', fecha = '$eli_fecha', accion = '$eli_accion' WHERE id = '$id'";
    $consul = pg_query($conexion,$query10) or die('Query failed: ' .pg_last_error());
    header("Location: http:../principal-contador.php");




 
   

?>