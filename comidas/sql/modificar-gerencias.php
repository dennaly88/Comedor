<?php
include('conexion.php');




$id = $_POST['id'];
$edit_nombre = $_POST['edit_nombre'];
$edit_sigla = $_POST['edit_sigla'];











$query = "UPDATE gerencias SET  nombre='$edit_nombre',siglas='$edit_sigla'







                                      WHERE '$id'=id



                                        ";






$result = pg_query($query) or die('Query failed: ' . pg_last_error());

header("Location: http:../gerencias.php?usu=2");

echo "SE BORRO EL REGISTRO";
