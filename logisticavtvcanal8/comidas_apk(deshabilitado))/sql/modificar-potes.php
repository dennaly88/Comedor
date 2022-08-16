<?php
include('conexion.php');




$edit_id = $_POST['edit_id'];
$edit_usuario = $_POST['edit_usuario'];
$edit_gerencia = $_POST['edit_gerencia'];
$edit_cantidad = $_POST['edit_cantidad'];
$edit_hora = $_POST['edit_hora'];
$edit_fecha = $_POST['edit_fecha'];
$edit_accion = $_POST['edit_accion'];
$edit_observacion = $_POST['edit_observacion'];

















$query = "UPDATE potes SET id='$edit_id',usuario='$edit_usuario',gerencia='$edit_gerencia',cantidad='$edit_cantidad',hora='$edit_hora',fecha='$edit_fecha',accion='$edit_accion',observacion='$edit_observacion'





                                     

WHERE '$edit_id'=id

                                        ";






$result = pg_query($query) or die('Query failed: ' . pg_last_error());

header("Location: http:../potes.php?usu=2");

echo "SE BORRO EL REGISTRO";
