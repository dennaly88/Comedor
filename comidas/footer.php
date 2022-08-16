<section class="signup-section" id="signup">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5">
            <div class="col-md-10 col-lg-8 mx-auto text-center">
                <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                <h2 class="text-white mb-5"></h2>
                <form class="form-signup" id="contactForm" data-sb-form-api-token="API_TOKEN">

                    <div class="row input-group-newsletter">

                        <center>
                            <div class="col-auto"><button class="btn btn-primary disabled" id="submitButton" type="submit">Donde Encontrarnos</button></div>
                    </div>


                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3 mt-2 text-white">
                            <div class="fw-bolder"></div>

                            <br />

                        </div>
                    </div>

                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3 mt-2"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="contact-section bg-black">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5">
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Ubicacion</h4>
                        <hr class="my-4 mx-auto" />
                        <div class="small text-black-50">GERENCIA DE TECNOLOGIA DE LA INFORMACION Y COMUNICACION</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-envelope text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Correo </h4>
                        <hr class="my-4 mx-auto" />
                        <div class="small text-black-50"><a href="#!">desarrollotic@vtv.gob.ve</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-mobile-alt text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Extensiones</h4>
                        <hr class="my-4 mx-auto" />
                        <div class="small text-black-50">1642/1815/1828</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="social d-flex justify-content-center">

            <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
            <a class="mx-2" href="#!"><i class="fab fa-instagram"></i></a>
            <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
            <a class="mx-2" href="#!"><i class="fab fa-youtube"></i></a>
            <a class="mx-2" href="#!"><i class="fab fa-whatsapp"></i></a>

        </div>
    </div>
</section>
<footer class="footer bg-black small text-center text-white-50">
    <div class="container px-4 px-lg-5">VTV &copy; Todos los Derechos Reservado Division de Desarrollo </div><br>
    <div class="container px-4 px-lg-5"> Perfil<span aria-hidden="true" class="text-white"><?php echo  "    " . $count ?></span></div><br>

</footer>