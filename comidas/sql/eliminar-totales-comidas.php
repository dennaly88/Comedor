<?php
include('conexion.php');
date_default_timezone_set('America/Caracas');   
$fecha = date("Y-m-d");
$Time = date(' hi', time());
echo $Time;
$ejecutar= '1200'.'AM';
/*if( $Time == $ejecutar ){

  $query="INSERT INTO respaldo SELECT * FROM solicitud where accion='Entregada' and fecha ='$fecha'";
  $result = pg_query($query) or die('Query failed: ' . pg_last_error());
    if ($result){
       $querys = "DELETE FROM solicitud where accion='Entregada' and fecha ='$fecha'"; }
        $resulta = pg_query($querys) or die('Query failed: ' . pg_last_error());

        if($resulta){
            header("Location: http:../resetear.php?usu=1"); 
            echo("cumplido");
        }
   


       
}*/




