<?php
include ('conexion.php');
$usuario =$_POST['usu'];
$pass =$_POST['pass'];
$perfil =$_POST['per'];
$correo =$_POST['cor'];
$nombre =$_POST['nom'];
$apellido =$_POST['ape'];
$telefono =$_POST['tel'];
$cedula =$_POST['ced'];
$gerencia =$_POST['ger'];
session_start(); 

$_SESSION['gerencia']=$_POST['ger'];



$query = "INSERT INTO usuarios(usuario,pass,perfil,correo,nombres,apellidos,telefono,cedula,gerencia) VALUES ('$usuario','$pass','$perfil','$correo','$nombre','$apellido','$telefono','$cedula','$gerencia')";
$result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
$cmdtuples = pg_affected_rows($result);




header("Location:../principal-usuario.php?usu=1");
echo $cmdtuples . " datos registrados.\n";
pg_free_result($result); 






 






