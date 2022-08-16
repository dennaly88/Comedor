<?php
include('conexion.php');
$edit_id = $_POST['edit_id'];
$edit_usuario = $_POST['edit_usuario'];
$edit_gerencia = $_POST['edit_gerencia'];
$edit_tipo = $_POST['edit_tipo'];
$edit_solicitada = $_POST['edit_solicitada'];
$edit_accion = $_POST['edit_accion'];
$edit_hora = $_POST['edit_hora'];
$edit_fecha = $_POST['edit_fecha'];
$edit_entregado = $_POST['edit_entregado'];
$edit_observacion = $_POST['edit_observacion'];
$edit_entregada  =  $_POST['edit_entregada'];


$query = "UPDATE solicitud SET id='$edit_id', usuario='$edit_usuario', gerencia='$edit_gerencia',tipo='$edit_tipo',entregada='$edit_entregada' ,solicitada='$edit_solicitada', hora='$edit_hora',fecha='$edit_fecha' ,accion='$edit_accion',entregado='$edit_entregado',observacion='$edit_observacion'






                                     

WHERE '$edit_id'=id 

                                        ";






$result = pg_query($query) or die('Query failed: ' . pg_last_error());

header("Location: http:../administrar.php?usu=2");

echo "SE BORRO EL REGISTRO";
