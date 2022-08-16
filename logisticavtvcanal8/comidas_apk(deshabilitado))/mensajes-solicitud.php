<?php

$usu=$_GET["usu"];




switch ($usu) {
    case 1:
       
require ("mensajes/crear-solicitud.php"); 
        break;
    case 2:
        

require ("mensajes/editar-solicitud.php"); 

        break;
    case 3:
    require ("mensajes/eliminar-solicitud.php"); 
      
break;
       
}



   
?>