<?php
include('conexion.php');









$edit_id = $_POST['edit_id'];
$edit_nombre = $_POST['edit_nombre'];
$edit_siglas = $_POST['edit_siglas'];






$query = "UPDATE gerencias SET id='$edit_id', nombre='$edit_nombre', siglas='$edit_siglas'






                                     

WHERE '$edit_id'=id

                                        ";






$result = pg_query($query) or die('Query failed: ' . pg_last_error());

header("Location: http:../gerencias.php?usu=2");

echo "SE BORRO EL REGISTRO";
