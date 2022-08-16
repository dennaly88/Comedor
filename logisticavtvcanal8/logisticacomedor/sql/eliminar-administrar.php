<?php
include('conexion.php');
$id = $_GET['id'];


$query = "DELETE FROM solicitud WHERE id ='$id'";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());
header("Location: http:../administrar.php?usu=3");
