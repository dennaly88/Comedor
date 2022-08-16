<?php

$usu = $_GET["usu"];




switch ($usu) {
    case 1:

        require("mensajes/crear-gerencias.php");
        break;
    case 2:


        require("mensajes/editar-gerencias.php");

        break;
    case 3:
        require("mensajes/eliminar-gerencias.php");

        break;
}
