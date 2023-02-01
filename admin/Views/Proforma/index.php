<?php
include '../../global/config.php';
include '../../global/conexion.php';
include 'proforma.php';
require_once '../templates/cabeza.php'
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
                        <a href="../../Views/Inicio/" class="nav-item nav-link">Inicio</a>
                        <a href="../../Views/Acerca" class="nav-item nav-link">Acerca</a>
                        <a href="../../Views/Menu" class="nav-item nav-link">Menú</a>                      
                        <a href="../../Views/Equipo" class="nav-item nav-link ">Nuestro equipo</a>
                        <a href="../../Views/Contactos" class="nav-item nav-link">Contactanos</a>
                    </div>
                    
                </div>
            </nav>


            <div class="py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Proforma</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="../../Views/Inicio/">Inicio</a></li>
                            <li class="breadcrumb-item"><a href="../../Views/Menu">Menú</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Proforma</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Menu Start -->
            
        
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Menú</h5>
                    <h1 class="mb-5 text-warning">Lista de Platillos Agregados</h1>
                    <?php if(!empty($_SESSION['PROFORMA'])) { ?>
                    <table class="table table-dark table-bordered">
                        <tr>
                            <th width="40%" class="text-start">Descripción</th>
                            <th width="15%" class="text-center">Cantidad</th>
                            <th width="20%" class="text-center">Precio</th>
                            <th width="20%" class="text-center">Total</th>
                            <th width="5%">--</th>
                        </tr>
                        <?php $total=0;?>
                        <?php foreach($_SESSION['PROFORMA'] as $indice=>$platillo){?>
                        <tr>
                            <td width="40%" class="text-start"><?php echo $platillo['NOMBRE']?></td>
                            <td width="15%" class="text-center"><?php echo $platillo['CANTIDAD']?></td>
                            <td width="20%" class="text-center">S/ <?php echo $platillo['PRECIO']?></td>
                            <td width="20%" class="text-center">S/ <?php echo number_format($platillo['PRECIO']*$platillo['CANTIDAD'],2); ?></td>
                            <td width="5%">
                            <form action="" method="post">
                            <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($platillo['ID'],COD,KEY);?>">
                                <button 
                                class="btn btn-danger" 
                                type="submit"
                                name="btnAccion"
                                value="Eliminar"
                                >Eliminar</button>
                            </form>
                            </td>
                        </tr>
                        <?php $total=$total+($platillo['PRECIO']*$platillo['CANTIDAD']);?>
                        <?php } ?>   
                        <tr>
                            <td colspan="3" align="right"><h3 class="text-warning">Total</h3></td>
                            <td align="right"><h3 class="textc-2">S/ <?php echo number_format($total,2);?></h3></td>
                            <td></td>
                        </tr>
                    </table>
                    <?php } else{ ?>
                        <div class="alert alert-success">
                            No hay platillos agregados...
                        </div>
                    <?php } ?>   
                </div>
                <center>
            <a href="../../Views/Menu" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Agregar más platillos</a> 
            </center>
                </div>
            </div>
            
                      
        <!-- Menu End -->
        

        <!-- Footer Start -->
        <?php
        include '../templates/pie.php';
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