<nav class="navbar navbar-dark navbar-expand-lg  fixed-top" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#page-top"><img src="assets/img/logo-menu.png"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>


        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item"><a class="nav-link active" href="principal.php"><?php echo  "    " . $_SESSION['usuario']; ?></a></li>
                <li class="nav-item"><a class="nav-link" href="potes.php">Envases</a></li>
                <li class="nav-item"><a class="nav-link" href="comidas.php">Comidas</a></li>
                <li class="nav-item"><a class="nav-link" href="botellones.php">Botellones</a></li>
                <li class="nav-item"><a class="nav-link" href="administrar.php">Administrar</a></li>
                <li class="nav-item"><a class="nav-link" href="gestionar.php">Gestionar</a></li>
                <li class="nav-item"><a class="nav-link" href="gerencias.php">Gerencias</a></li>
                <li class="nav-item"><a class="nav-link" href="resetear.php">Resetear</a></li>

                <li class="nav-item"><a class="nav-link" target="_blank" onclick="window.open(this.href, this.target, 'width=500,height=600'); return false;" href="calculadora/calculadora.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calculator-fill" viewBox="0 0 16 16">
                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm2 .5v2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0-.5.5zm0 4v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zM4.5 9a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM4 12.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zM7.5 6a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM7 9.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm.5 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM10 6.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm.5 2.5a.5.5 0 0 0-.5.5v4a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 0-.5-.5h-1z" />
                        </svg></a></li>


                <li class="nav-item"><a class="nav-link" href="http://comedor.vtv.gov.ve/comidas/login/index.php">Salir</a></li>


            </ul>

        </div>


    </div>




</nav>