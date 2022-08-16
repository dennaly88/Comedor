<?php

$usu = $_GET["usu"];




switch ($usu) {
    case 1:

        require("mensajes/resetear-comidas.php");
        break;
    case 2:


        require("mensajes/resetear-botellones.php");

        break;
}
