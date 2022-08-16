<nav class="navbar navbar-dark navbar-expand-lg  fixed-top" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#page-top"><img src="assets/img/logo-menu.png"></a>
        <a class="nav-link" href="http://logisticavtv.ddns.net/comidas_apk/principal.php">Regresar</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>


        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item"><a class="nav-link active" href="principal.php"><?php echo  "    " . $_SESSION['usuario']; ?></a></li>

                <li class="nav-item"><a class="nav-link" href="comidas.php">Comidas</a></li>
                <li class="nav-item"><a class="nav-link" href="botellones.php">Botellones</a></li>






                <li class="nav-item"><a class="nav-link" href="http://logisticavtv.ddns.net/comidas_apk/login/index.php">Salir</a></li>


            </ul>

        </div>


    </div>





</nav>