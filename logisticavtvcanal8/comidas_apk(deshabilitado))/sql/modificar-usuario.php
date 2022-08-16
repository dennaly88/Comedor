<?php
include('conexion.php');





$edit_id = $_POST['edit_id'];
$edit_usuario = $_POST['edit_usuario'];
$edit_pass = $_POST['edit_pass'];
$edit_perfil = $_POST['edit_perfil'];
$edit_gerencia = $_POST['edit_gerencia'];
$edit_correo = $_POST['edit_correo'];
$edit_nombres = $_POST['edit_nombres'];
$edit_apellidos = $_POST['edit_apellidos'];
$edit_apellidos = $_POST['edit_apellidos'];
$edit_telefono = $_POST['edit_telefono'];
$edit_cedula = $_POST['edit_cedula'];
$edit_extencion = $_POST['edit_extencion'];
$edit_enviado = $_POST['edit_enviado'];







$query = "UPDATE usuarios SET id='$edit_id', usuario='$edit_usuario', pass='$edit_pass',perfil='$edit_perfil',gerencia='$edit_gerencia',correo='$edit_correo', 
nombres='$edit_nombres',apellidos='$edit_apellidos' ,telefono='$edit_telefono' ,cedula='$edit_cedula',extencion='$edit_extencion',enviado='$edit_enviado'







                                      WHERE '$edit_id'=id



                                        ";






$result = pg_query($query) or die('Query failed: ' . pg_last_error());

header("Location: http:../usuario.php?usu=2");

echo "SE BORRO EL REGISTRO";
