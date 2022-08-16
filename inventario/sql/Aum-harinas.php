<?php
    include("conexion.php");
    $aum_nombre = $_POST['aum_nombre'];
    $cantidad_actual = $_POST['cantidad_actual'];
    $cantidad_aumentar = $_POST['cantidad_aumentar'];
    $aum_accion = "Aumentar";
    session_start();
    $aum_id = $_SESSION['id'];
    $aum_unidad = $_SESSION['unidad']; 
    $aum_usuario = $_SESSION['usuario'];
    $aum_fecha = $_POST['aum_fecha'];

    $cantidad_actual = $cantidad_actual + $cantidad_aumentar;
    $aumem = "UPDATE harinas SET id = '$aum_id', nombre = '$aum_nombre', fecha = '$aum_fecha', unidad = '$aum_unidad', usuario = '$aum_usuario', cantidad = '$cantidad_actual', accion = '$aum_accion' WHERE id = '$aum_id'";
    print_r($aumem);
    $x = pg_query($conexion,$aumen) or die('ERROR AL INSERT: '.pg_last_error());
    header("Location:../principal-contador.php?");
    echo $cmdtuples28 . " datos registrados.\n";
    pg_free_result($x); 

?>    