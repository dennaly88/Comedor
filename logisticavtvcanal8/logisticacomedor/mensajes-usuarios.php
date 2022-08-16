<?php

$usu=$_GET["usu"];




switch ($usu) {
    case 1:
       
require ("mensajes/crear-usuario.php"); 
        break;
    case 2:
        

require ("mensajes/editar-usuario.php"); 

        break;
    case 3:
    require ("mensajes/eliminar-usuario.php"); 
      
break;
       
}
