<?php

$usu = $_GET["usu"];




switch ($usu) {
    case 1:

        require("mensajes/crear-administrar.php");
        break;
    case 2:


        require("mensajes/editar-administrar.php");

        break;
    case 3:
        require("mensajes/eliminar-administrar.php");

        break;
}
