<?php
include('conexion.php');








?>" required>
























"









<?php
include('conexion.php');




$edit_id = $_POST['edit_id'];
$edit_usuario = $_POST['edit_usuario'];
$edit_gerencia = $_POST['edit_gerencia'];
$edit_tipo = $_POST['edit_tipo'];
$edit_cantidad = $_POST['edit_cantidad'];
$edit_hora = $_POST['edit_hora'];
$edit_fecha = $_POST['edit_fecha'];
$edit_accion = $_POST['edit_accion'];
$entregado = $_POST['entregado'];

$query = "UPDATE solicitud SET id='$edit_id', usuario='$edit_usuario', gerencia='$edit_gerencia',tipo='$edit_tipo'
,cantidad='$edit_cantidad', hora='$edit_hora',fecha='$edit_fecha' ,accion='$edit_accion',entregado='$entregado'






                                     

WHERE '$edit_id'=id

                                        ";






$result = pg_query($query) or die('Query failed: ' . pg_last_error());

header("Location: http:../principal-solicitud.php?usu=2");

echo "SE BORRO EL REGISTRO";
?>