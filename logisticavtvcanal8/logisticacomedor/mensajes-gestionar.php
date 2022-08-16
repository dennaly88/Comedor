<?php

$usu = $_GET["usu"];




switch ($usu) {
    case 1:

        require("mensajes/crear-gestionar.php");
        break;
    case 2:


        require("mensajes/editar-gestionar.php");

        break;
    case 3:
        require("mensajes/eliminar-gestionar.php");

        break;
}
