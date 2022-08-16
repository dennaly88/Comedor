<?php
include('conexion.php');




$edit_id = $_POST['edit_id'];
$edit_usuario = $_POST['edit_usuario'];
$edit_gerencia = $_POST['edit_gerencia'];
$edit_solicitada = $_POST['edit_solicitada'];

$edit_hora = $_POST['edit_hora'];
$edit_fecha = $_POST['edit_fecha'];
$edit_entregado = $_POST['edit_entregado'];
$edit_observacion = $_POST['edit_observacion'];
$edit_entregada = $_POST['edit_entregada'];





$query = "UPDATE botellon SET id='$edit_id',usuario='$edit_usuario',gerencia='$edit_gerencia',solicitada='$edit_solicitada',hora='$edit_hora',fecha='$edit_fecha',entregado='$edit_entregado',observacion='$edit_observacion',entregada='$edit_entregada'






                                     

WHERE '$edit_id'=id

                                        ";






$result = pg_query($query) or die('Query failed: ' . pg_last_error());

header("Location: http:../botellones.php?usu=2");

echo "SE BORRO EL REGISTRO";
