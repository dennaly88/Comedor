<nav class="navbar navbar-dark navbar-expand-lg  fixed-top" id="mainNav">
      <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top"><img src="assets/img/logo-menu.png"></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  Menu
                  <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link active" href="principal.php">Inicio</a></li>
                     

                        <li class="nav-item"><a class="nav-link" href="comidas.php">Comidas</a></li>
                        <li class="nav-item"><a class="nav-link" href="botellones.php">Botellones</a></li>

                        <li class="nav-item"><a class="nav-link" href="botellones.php">Arepera</a></li>

                        <li class="nav-item"><a class="nav-link" target="_blank" onclick="window.open(this.href, this.target, 'width=500,height=600'); return false;" href="calculadora/calculadora.php">Calculadora</a></li>

                        <li class="nav-item"><a class="nav-link" target="_blank" onclick="window.open(this.href, this.target, 'width=500,height=600'); return false;" href="calendario/calendario.php">Calendario</a></li>
                        <li class="nav-item"><a class="nav-link" href="http://comedor.vtv.gov.ve/comidas/login/index.php">Salir</a></li>

                        <li class="nav-item"><a class="nav-link" href="#"> <?php


                                                                              echo  date("d-m-Y");

                                                                              ?>
                              </a>



                        </li>


                  </ul>
            </div>
      </div>
</nav>