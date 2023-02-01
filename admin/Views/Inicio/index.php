<?php
include '../../global/config.php';
include '../../global/conexion.php';
include '../proforma/proforma.php';
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
                    
                    <!-- <img src="../img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="../../Views/Inicio" class="nav-item nav-link active">Inicio</a>
                        <a href="../../Views/Acerca" class="nav-item nav-link">Acerca</a>
                        <a href="../../Views/Menu" class="nav-item nav-link">Menú</a>                                         
                        <a href="../../Views/Equipo" class="nav-item nav-link">Nuestro equipo</a>
                        <a href="../../Views/Contactos" class="nav-item nav-link">Contactanos</a>
                    </div>
                    <a href="../../Views/Proforma" class="btn btn-outline-warning py-2 px-4">Ver Proforma</a>
                </div>
            </nav>

            <div class="py-5 bg-success hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-warning animated slideInLeft">Disfruta de nuestra<br>Deliciosa comida</h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>

                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="../../Assets/img/pez.png" alt="" width="360">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <?php 
    $sentencia=$pdo->prepare("SELECT id_platillos, precio_p, imagen, nombre_p, descripcion_p, platillos.estado, nombre_c FROM platillos INNER JOIN categoria_p 
    on platillos.id_categoria=categoria_p.id_categoria WHERE platillos.id_categoria=1 and platillos.estado=1");
    $sentencia->execute();
    $lista_platillos1=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    //print_r($lista_platillos1)
?>
        <!-- Service Start -->
        <div id="carouselExampleInterval" class="carousel slide container" data-bs-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <img src="../../Assets/img/logo1.png" class="d-block w-100" alt="..." width="620" height="450">
        </div>
        <?php foreach($lista_platillos1 as $plato){?>
        <div class="carousel-item" data-bs-interval="2000">
        <img  src="../../Assets/img/<?php echo $plato['imagen']?>" alt="" class="d-block w-100" width="620" height="500">
        </div>
        <?php }?>
         </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        <!-- Service End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="../../Assets/img/sabor3.jpg.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="../../Assets/img/sabor4.jpg.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="../../Assets/img/sabor5.jpg.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="../../Assets/img/sabor6.jpg.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 " >
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Sobre Nosotros</h5>
                        <h1 class="mb-4 text-warning">Nuestra <i class="fa fa-utensils text-primary me-2"></i>Misión</h1>
                        <p class="mb-4 textc-1">Somos un restaurante con una larga trayectoria en el rubro de la cocina selvatica. Brindamos los mejores servicios para que los clientes esten satisfechos y brindarles la mejor sazón.
                            Ofrecemos lo mejor del sabor más que nada sabor a amazonico de donde provienen nuestros deliciosos platos, nos ubicamos en huancayo
                            y ofrecemos la mejor sazón para los paladares de los consumidores.
                        </p>
                        <p class="mb-4 textc-1"></p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">9</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Años de</p>
                                        <h6 class="text-uppercase mb-0">Experiencia</h6>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="../../Views/Acerca">Leer mas</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <?php 
    $sentencia=$pdo->prepare("SELECT id_platillos, precio_p, imagen, nombre_p, descripcion_p, platillos.estado, nombre_c FROM platillos INNER JOIN categoria_p 
    on platillos.id_categoria=categoria_p.id_categoria WHERE platillos.id_categoria=1 and platillos.estado=1");
    $sentencia->execute();
    $lista_platillos1=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    //print_r($lista_platillos1)
?>
<?php 
    $sentencia=$pdo->prepare("SELECT id_platillos, precio_p, imagen, nombre_p, descripcion_p, platillos.estado, nombre_c FROM platillos INNER JOIN categoria_p 
    on platillos.id_categoria=categoria_p.id_categoria WHERE platillos.id_categoria=2 and platillos.estado=1");
    $sentencia->execute();
    $lista_platillos2=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    //print_r($lista_platillos2)
?>
<?php 
    $sentencia=$pdo->prepare("SELECT id_platillos, precio_p, imagen, nombre_p, descripcion_p, platillos.estado, nombre_c FROM platillos INNER JOIN categoria_p 
    on platillos.id_categoria=categoria_p.id_categoria WHERE platillos.id_categoria=3 and platillos.estado=1");
    $sentencia->execute();
    $lista_platillos3=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    //print_r($lista_platillos3)
?>
<?php 
    $sentencia=$pdo->prepare("SELECT id_platillos, precio_p, imagen, nombre_p, descripcion_p, platillos.estado, nombre_c FROM platillos INNER JOIN categoria_p 
    on platillos.id_categoria=categoria_p.id_categoria WHERE platillos.id_categoria=4 and platillos.estado=1");
    $sentencia->execute();
    $lista_platillos4=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    //print_r($lista_platillos4)
?>
<?php 
    $sentencia=$pdo->prepare("SELECT id_platillos, precio_p, imagen, nombre_p, descripcion_p, platillos.estado, nombre_c FROM platillos INNER JOIN categoria_p 
    on platillos.id_categoria=categoria_p.id_categoria WHERE platillos.id_categoria=5 and platillos.estado=1");
    $sentencia->execute();
    $lista_platillos5=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    //print_r($lista_platillos4)
?>
<?php 
    $sentencia=$pdo->prepare("SELECT id_platillos, precio_p, imagen, nombre_p, descripcion_p, platillos.estado, nombre_c FROM platillos INNER JOIN categoria_p 
    on platillos.id_categoria=categoria_p.id_categoria WHERE platillos.id_categoria=6 and platillos.estado=1");
    $sentencia->execute();
    $lista_platillos6=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    //print_r($lista_platillos4)
?>
<?php 
    $sentencia=$pdo->prepare("SELECT id_platillos, precio_p, imagen, nombre_p, descripcion_p, platillos.estado, nombre_c FROM platillos INNER JOIN categoria_p 
    on platillos.id_categoria=categoria_p.id_categoria WHERE platillos.id_categoria=7 and platillos.estado=1");
    $sentencia->execute();
    $lista_platillos7=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    //print_r($lista_platillos4)
?>
<?php 
    $sentencia=$pdo->prepare("SELECT id_platillos, precio_p, imagen, nombre_p, descripcion_p, platillos.estado, nombre_c FROM platillos INNER JOIN categoria_p 
    on platillos.id_categoria=categoria_p.id_categoria WHERE platillos.id_categoria=8 and platillos.estado=1");
    $sentencia->execute();
    $lista_platillos8=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    //print_r($lista_platillos4)
?>

        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Menú</h5>
                    <h1 class="mb-5 text-warning">Artículos más populares</h1>

                </div>
                <?php if($mensaje!=""){?>
                <div class="alert alert-success">
                    <?php echo $mensaje; ?>
                    <a href="mostrarProforma.php">Ver Proforma</a>
                </div>
                <?php }?>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                    <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                <i class="fa fa-coffee fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="">Nuestros</small>
                                    <h6 class="mt-n1 mb-0 text-white">Desayunos Típicos</h6>
                                </div>
                            </a>
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3" data-bs-toggle="pill" href="#tab-2">
                                <i class="fa fa-coffee fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="">Nuestros</small>
                                    <h6 class="mt-n1 mb-0 text-white">Desayunos Especiales</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-3">
                            <i class="fa fa-cheese fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="">Especiales</small>
                                    <h6 class="mt-n1 mb-0 text-white">Guarniciones</h6>
                                </div>
                            </a>
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-4">
                                <i class="fa fa-duotone fa-bacon fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="">exquisitas</small>
                                    <h6 class="mt-n1 mb-0 text-white">Cecina Ahumada</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-5">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="">Nuestros Deliciosos</small>
                                    <h6 class="mt-n1 mb-0 text-white">Platos Principales</h6>
                                </div>
                            </a>
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-6">
                                <i class="fa fa-solid fa-fish fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="">Deliciosos</small>
                                    <h6 class="mt-n1 mb-0 text-white">Pescado de Doncella y Dorado</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-7">
                            <i class="fa fa-duotone fa-beer fa-2x text-primary" ></i>
                                <div class="ps-3">
                                    <small class="">Refrescantes</small>
                                    <h6 class="mt-n1 mb-0 text-white">Cervezas Especiales</h6>
                                </div>
                            </a>
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-8">
                            <i class="fa fa-wine-glass fa-2x text-primary" ></i>
                                <div class="ps-3">
                                    <small class="">Refrescantes</small>
                                    <h6 class="mt-n1 mb-0 text-white">Bebidas frías y calientes</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                            <?php foreach($lista_platillos1 as $plato){?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="../../Assets/img/<?php echo $plato['imagen']?>" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 text-white">
                                                <span><?php echo $plato['nombre_p']?></span>
                                                <span class="text-primary">S/.<?php echo $plato['precio_p']?></span>
                                            </h5>
                                            <small class="fst-italic textc-1"><?php echo $plato['descripcion_p']?></small>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                <?php }?>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                            <?php foreach($lista_platillos2 as $plato){?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="../../Assets/img/<?php echo $plato['imagen']?>" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 text-white">
                                                <span><?php echo $plato['nombre_p']?></span>
                                                <span class="text-primary">S/.<?php echo $plato['precio_p']?></span>
                                            </h5>
                                            <small class="fst-italic textc-1"><?php echo $plato['descripcion_p']?></small>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                <?php }?>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                            <?php foreach($lista_platillos3 as $plato){?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="../../Assets/img/<?php echo $plato['imagen']?>" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 text-white">
                                                <span><?php echo $plato['nombre_p']?></span>
                                                <span class="text-primary">S/.<?php echo $plato['precio_p']?></span>
                                            </h5>
                                            <small class="fst-italic textc-1"><?php echo $plato['descripcion_p']?></small>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                <?php }?>
                            </div>
                        </div>
                        <div id="tab-4" class="tab-pane fade show p-0">
                            <div class="row g-4">
                            <?php foreach($lista_platillos4 as $plato){?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="../../Assets/img/<?php echo $plato['imagen']?>" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 text-white">
                                                <span><?php echo $plato['nombre_p']?></span>
                                                <span class="text-primary">S/.<?php echo $plato['precio_p']?></span>
                                            </h5>
                                            <small class="fst-italic textc-1"><?php echo $plato['descripcion_p']?></small>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                <?php }?>
                            </div>
                        </div>
                        <div id="tab-5" class="tab-pane fade show p-0">
                            <div class="row g-4">
                            <?php foreach($lista_platillos5 as $plato){?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="../../Assets/img/<?php echo $plato['imagen']?>" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 text-white">
                                                <span><?php echo $plato['nombre_p']?></span>
                                                <span class="text-primary">S/.<?php echo $plato['precio_p']?></span>
                                            </h5>
                                            <small class="fst-italic textc-1"><?php echo $plato['descripcion_p']?></small>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                <?php }?>
                            </div>
                        </div>
                        <div id="tab-6" class="tab-pane fade show p-0">
                            <div class="row g-4">
                            <?php foreach($lista_platillos6 as $plato){?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="../../Assets/img/<?php echo $plato['imagen']?>" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 text-white">
                                                <span><?php echo $plato['nombre_p']?></span>
                                                <span class="text-primary">S/.<?php echo $plato['precio_p']?></span>
                                            </h5>
                                            <small class="fst-italic textc-1"><?php echo $plato['descripcion_p']?></small>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                <?php }?>
                            </div>
                        </div>
                        <div id="tab-7" class="tab-pane fade show p-0">
                            <div class="row g-4">
                            <?php foreach($lista_platillos7 as $plato){?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="../../Assets/img/<?php echo $plato['imagen']?>" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 text-white">
                                                <span><?php echo $plato['nombre_p']?></span>
                                                <span class="text-primary">S/.<?php echo $plato['precio_p']?></span>
                                            </h5>
                                            <small class="fst-italic textc-1"><?php echo $plato['descripcion_p']?></small>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                <?php }?>
                            </div>
                        </div>
                        <div id="tab-8" class="tab-pane fade show p-0">
                            <div class="row g-4">
                            <?php foreach($lista_platillos8 as $plato){?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="../../Assets/img/<?php echo $plato['imagen']?>" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 text-white">
                                                <span><?php echo $plato['nombre_p']?></span>
                                                <span class="text-primary">S/.<?php echo $plato['precio_p']?></span>
                                            </h5>
                                            <small class="fst-italic textc-1"><?php echo $plato['descripcion_p']?></small>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- Menu End -->
        <center>
        <a class="btn btn-primary" href="../../Views/Menu">Ir a Menú</a>                  
        </center>

        <!-- Reservation Start -->
        <div class="container py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-12">
                    <div class="video">
                        <button type="button" class="btn-play" data-bs-toggle="modal"  data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Video del restaurante</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <video controls>
                                <source src="video_restaurant.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reservation Start -->


        <!-- Team Start -->
        <div class="container-xxl pt-5 pb-3">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Miembros del equipo</h5>
                    <h1 class="mb-5">Nuestras maestras cociner@s</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="../../Assets/img/team-1.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Nombre completo</h5>
                            <small>Designacion</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="../../Assets/img/team-2.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Nombre completo</h5>
                            <small>Designacion</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="../../Assets/img/team-3.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Nombre completo</h5>
                            <small>Designacion</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="../../Assets/img/team-4.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Pablito</h5>
                            <small>Limpiador</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonios</h5>
                    <h1 class="mb-5">Nuestros clientes dicen!!!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="../../Assets/img/testimonial-1.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Nombre del cliente</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="../../Assets/img/testimonial-2.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Nombre del cliente</h5>
                                <small>Profesión</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="../../Assets/img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Nombre del cliente</h5>
                                <small>Profesión</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="../../Assets/img/testimonial-4.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Nombre del cliente</h5>
                                <small>Profesión</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        

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