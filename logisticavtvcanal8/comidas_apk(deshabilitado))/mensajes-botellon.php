<?php

$usu = $_GET["usu"];




switch ($usu) {
    case 1:

        require("mensajes/crear-botellon.php");
        break;
    case 2:


        require("mensajes/editar-botellon.php");

        break;
    case 3:
        require("mensajes/eliminar-botellon.php");

        break;
}
