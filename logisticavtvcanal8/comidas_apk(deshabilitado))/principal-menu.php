

<?php
include('sql/conexion.php');

session_start();
$usuario = $_SESSION['usuario'];



$query = "SELECT perfil from usuarios where '$usuario'=usuario";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

while ($row = pg_fetch_array($result)) {
    $count = $row[0];
}




if ($count == 'administrador') {

    require("administrador.php");
} else
if ($count == 'basico') {



    require("basico.php");
} else 

if ($count == 'coordinador') {
    require("coordinador.php");
}




?> 