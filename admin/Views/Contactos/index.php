<?php

require_once '../templates/cabeza.php';

?>
    <div class="p-0 div-1">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Sabor a Charapita<img src="../../Assets/image/charapita.png" alt=""></h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="../../Views/Inicio" class="nav-item nav-link">Inicio</a>
                        <a href="../../Views/Acerca" class="nav-item nav-link">Acerca</a>
                        <a href="../../Views/Menu" class="nav-item nav-link">Menú</a>                                         
                        <a href="../../Views/Equipo" class="nav-item nav-link">Nuestro equipo</a>

                    </div>
                    <a href="../../Views/Proforma" class="btn btn-outline-warning py-2 px-4">Ver Proforma</a>
                </div>
            </nav>

            <div class="py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Nuestros Contactos</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="../../Views/Inicio">Inicio</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Contactos</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Contactanos</h5>
                    <h1 class="mb-5 text-warning">Para más información</h1>
                </div>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="row gy-4">
                        <div class="col-md-2">
                                <h5></h5>
                                <p></p>
                            </div>
                            <div class="col-md-5">
                                <h5 class="section-title ff-secondary fw-normal text-start text-primary">Correo Electronico</h5>
                                <p class="textc-1"><i class="fa fa-envelope-open text-primary me-2"></i>salazarascanoaedwineduardo@gmail.com</p>
                            </div>
                            <div class="col-md-5">
                                <h5 class="section-title ff-secondary fw-normal text-start text-primary">Número Telefonico</h5>
                                <p class="textc-1"><i class="fas fa-phone-alt text-primary me-2"></i>&nbsp954440041</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 wow fadeIn" data-wow-delay="0.1s">
                        <center>

                      
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.8032278917226!2d-75.22095658542!3d-12.057055745374209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910e97dfa9ba414d%3A0x423d183b3b605f00!2sSabor%20a%20Charapita!5e0!3m2!1ses-419!2spe!4v1671137157559!5m2!1ses-419!2spe" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </center>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Footer Start -->
        <?php
require_once '../templates/pie.php';
?>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../lib/wow/wow.min.js"></script>
    <script src="../../lib/easing/easing.min.js"></script>
    <script src="../../lib/waypoints/waypoints.min.js"></script>
    <script src="../../lib/counterup/counterup.min.js"></script>
    <script src="../../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../../lib/tempusdominus/js/moment.min.js"></script>
    <script src="../../lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="../../Assets/js/main.js"></script>
</body>

</html>