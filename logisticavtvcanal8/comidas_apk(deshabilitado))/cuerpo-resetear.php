<section class="projects-section bg-dark" id="projects">
    <div class="container px-4 px-lg-5">

        <CENTER>
            <h2 class="text-white mb-4">RESETEAR MODULOS<a class="navbar-brand" href="#page-top"></a></h2>

            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">


                <div class="col-lg-6"><img class="img-fluid" src="assets/img/contador2.jpg" alt="..." onclick="CanContinue8 ()" />
                    <script type="text/javascript">
                        function CanContinue8() {
                            var confRet = window.confirm("Deseas resetear los Contadores de Comida ,Ten en cuenta que no tendras respaldo de la informacion   ¿Estas Seguro?");
                            if (confRet) {
                                window.location = 'sql/eliminar-totales-comidas.php?id=<?php echo $mostrar['id']; ?>';

                            } else {


                            }
                        }
                    </script>
                </div>
                <div class="col-lg-6">
                    <div class="bg-info text-center h-100 project">
                        <div class="d-flex h-100 wow fadeInUp">
                            <div class="project-text w-100 my-auto text-center text-lg-left">


                                <h4 class="text-white">CONTADORES DE COMIDAS <a class="navbar-brand" href="#page-top"><img src="assets/img/logo-menu.png"></a></h4>

                                <p class="mb-0 text-white-50">



                                    PRESIONAR LA IMAGEN SI QUIERE RESETEAR EL MODULO DE COMIDAS</p>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row gx-0 justify-content-center">
                <div class="col-lg-6"><img class="img-fluid" src="assets/img/contador1.jpg" alt="..." onclick="CanContinue88 ()" /></div>
                <script type="text/javascript">
                    function CanContinue88() {
                        var confRet = window.confirm("Deseas resetear los Contadores de Agua Potable ,Ten en cuenta que no tendras respaldo de la informacion  ¿Estas Seguro?");
                        if (confRet) {
                            window.location = 'sql/eliminar-totales-agua.php?id=<?php echo $mostrar['id']; ?>';

                        } else {


                        }
                    }
                </script>
                <div class="col-lg-6 order-lg-first">
                    <div class="bg-secondary text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-right">
                                <h4 class="text-white">CONTADORES DE BOTELLONES<a class="navbar-brand" href="#page-top"><img src="assets/img/logo-menu.png"></a></h4>
                                <p class="mb-0 text-white-50">
                                    PRESIONAR LA IMAGEN SI QUIERE RESETEAR EL MODULO DE BOTELLONES</p>
                                <hr class="d-none d-lg-block mb-0 me-0" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>