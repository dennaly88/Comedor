<?php

//creamos la sesion
session_start();
//validamos si se ha hecho o no el inicio de sesion correctamente
//si no se ha hecho la sesion nos regresará a login.php
if (!isset($_SESSION['usuario'])) {

  header('Location: index.php');

  exit();
}

?>

<br>
<center>
  <div class="card text-center dark w-50">

    <div class="card text-white bg-dark mb-3 style=" max-width: 48rem;">

      <body>

        <?php require("cuerpo1.php"); ?>




      </body>
      <button class="mr-3 btn btn-dark btn-sm" onclick="location.href='#'">
        <MARQUEE WIDTH=100% text=white>
          <FONT FACE=arial COLOR=white>Solicite sus Comidas por Aqui VTV Asi Somos
        </MARQUEE>
      </button>
    </div>

  </div>