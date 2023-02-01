<?php
include '../../global/config.php';
include '../../global/conexion.php';
include '../proforma/proforma.php';
require_once '../templates/cabeza.php';
?>

    <div class=" p-0 div-1">
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
                   
                        <a href="../../Views/Equipo" class="nav-item nav-link ">Nuestro equipo</a>
                        <a href="../../Views/Contactos" class="nav-item nav-link">Contactanos</a>
                    </div>
                    <a href="../../Views/Proforma" class="btn btn-outline-warning py-2 px-4">Ver Proforma</a>
                </div>
            </nav>

            <div class="py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Nuestro Menú</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="../../Views/Inicio/">Inicio</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Menu</li>
                        </ol>
                    </nav>
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
                    <h1 class="mb-5 text-warning">Nuestro mejor menú</h1>

                </div>
                <?php if($mensaje!=""){?>
                <div class="alert alert-success">
                    <?php echo $mensaje; ?>
                    <a href="../../Views/Proforma">Ver Proforma</a>
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
                                    <img class="img-thumbnail" style="height: 270px" src="../../Assets/img/<?php echo $plato['imagen']?>" alt="" width="270" >
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 text-white">
                                                <span ><?php echo $plato['nombre_p']?></span>
                                            </h5>
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span class="text-primary">S/.<?php echo $plato['precio_p']?></span>
                                            </h5>

                                            <small class="fst-italic textc-1"><?php echo $plato['descripcion_p']?></small><br>
                                            <h6 class="d-flex justify-content-between border-bottom pb-2">
                                            <form action="" method="post">
                                            <input type="number" name="cantidad" id="cantidad" value="1" min="1" style="width: 50px;">
                                            </h6>
                                            
                                            
                                    <button class="btn btn-primary"
                                        name="btnAccion"
                                        value="Agregar"
                                        type="submit">Agregar a la Proforma</button>
                                        </div>
                                    </div>
                                    <form action="" method="post">

                                        <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($plato['id_platillos'],COD,KEY) ?>">
                                        <input type="hidden" name="nombre_p" id="nombre_p" value="<?php echo openssl_encrypt($plato['nombre_p'],COD,KEY) ?>">
                                        <input type="hidden" name="precio_p" id="precio_p" value="<?php echo openssl_encrypt($plato['precio_p'],COD,KEY) ?>">
                                        
                                    </form>
                                    
                                </div>
                                <?php }?>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                            <?php foreach($lista_platillos2 as $plato){?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                    <img class="img-thumbnail" style="height: 270px" src="../../Assets/img/<?php echo $plato['imagen']?>" alt="" width="270" >
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 text-white">
                                                <span ><?php echo $plato['nombre_p']?></span>
                                            </h5>
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span class="text-primary">S/.<?php echo $plato['precio_p']?></span>
                                            </h5>

                                            <small class="fst-italic textc-1"><?php echo $plato['descripcion_p']?></small><br>
                                            <h6 class="d-flex justify-content-between border-bottom pb-2">
                                            <form action="" method="post">
                                            <input type="number" name="cantidad" id="cantidad" value="1" min="1" style="width: 50px;">
                                            </h6>
                                            
                                            
                                    <button class="btn btn-primary"
                                        name="btnAccion"
                                        value="Agregar"
                                        type="submit">Agregar a la Proforma</button>
                                        </div>
                                    </div>
                                    <form action="" method="post">

                                        <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($plato['id_platillos'],COD,KEY) ?>">
                                        <input type="hidden" name="nombre_p" id="nombre_p" value="<?php echo openssl_encrypt($plato['nombre_p'],COD,KEY) ?>">
                                        <input type="hidden" name="precio_p" id="precio_p" value="<?php echo openssl_encrypt($plato['precio_p'],COD,KEY) ?>">
                                        
                                    </form>
                                    
                                </div>
                                <?php }?>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                            <?php foreach($lista_platillos3 as $plato){?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                    <img class="img-thumbnail" style="height: 270px" src="../../Assets/img/<?php echo $plato['imagen']?>" alt="" width="270" >
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 text-white">
                                                <span ><?php echo $plato['nombre_p']?></span>
                                            </h5>
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span class="text-primary">S/.<?php echo $plato['precio_p']?></span>
                                            </h5>

                                            <small class="fst-italic textc-1"><?php echo $plato['descripcion_p']?></small><br>
                                            <h6 class="d-flex justify-content-between border-bottom pb-2">
                                            <form action="" method="post">
                                            <input type="number" name="cantidad" id="cantidad" value="1" min="1" style="width: 50px;">
                                            </h6>
                                            
                                            
                                    <button class="btn btn-primary"
                                        name="btnAccion"
                                        value="Agregar"
                                        type="submit">Agregar a la Proforma</button>
                                        </div>
                                    </div>
                                    <form action="" method="post">

                                        <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($plato['id_platillos'],COD,KEY) ?>">
                                        <input type="hidden" name="nombre_p" id="nombre_p" value="<?php echo openssl_encrypt($plato['nombre_p'],COD,KEY) ?>">
                                        <input type="hidden" name="precio_p" id="precio_p" value="<?php echo openssl_encrypt($plato['precio_p'],COD,KEY) ?>">
                                        
                                    </form>
                                    
                                </div>
                                <?php }?>
                            </div>
                        </div>
                        <div id="tab-4" class="tab-pane fade show p-0">
                            <div class="row g-4">
                            <?php foreach($lista_platillos4 as $plato){?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                    <img class="img-thumbnail" style="height: 270px" src="../../Assets/img/<?php echo $plato['imagen']?>" alt="" width="270" >
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 text-white">
                                                <span ><?php echo $plato['nombre_p']?></span>
                                            </h5>
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span class="text-primary">S/.<?php echo $plato['precio_p']?></span>
                                            </h5>

                                            <small class="fst-italic textc-1"><?php echo $plato['descripcion_p']?></small><br>
                                            <h6 class="d-flex justify-content-between border-bottom pb-2">
                                            <form action="" method="post">
                                            <input type="number" name="cantidad" id="cantidad" value="1" min="1" style="width: 50px;">
                                            </h6>
                                            
                                            
                                    <button class="btn btn-primary"
                                        name="btnAccion"
                                        value="Agregar"
                                        type="submit">Agregar a la Proforma</button>
                                        </div>
                                    </div>
                                    <form action="" method="post">

                                        <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($plato['id_platillos'],COD,KEY) ?>">
                                        <input type="hidden" name="nombre_p" id="nombre_p" value="<?php echo openssl_encrypt($plato['nombre_p'],COD,KEY) ?>">
                                        <input type="hidden" name="precio_p" id="precio_p" value="<?php echo openssl_encrypt($plato['precio_p'],COD,KEY) ?>">
                                        
                                    </form>
                                    
                                </div>
                                <?php }?>
                            </div>
                        </div>
                        <div id="tab-5" class="tab-pane fade show p-0">
                            <div class="row g-4">
                            <?php foreach($lista_platillos5 as $plato){?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                    <img class="img-thumbnail" style="height: 270px" src="../../Assets/img/<?php echo $plato['imagen']?>" alt="" width="270" >
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 text-white">
                                                <span ><?php echo $plato['nombre_p']?></span>
                                            </h5>
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span class="text-primary">S/.<?php echo $plato['precio_p']?></span>
                                            </h5>

                                            <small class="fst-italic textc-1"><?php echo $plato['descripcion_p']?></small><br>
                                            <h6 class="d-flex justify-content-between border-bottom pb-2">
                                            <form action="" method="post">
                                            <input type="number" name="cantidad" id="cantidad" value="1" min="1" style="width: 50px;">
                                            </h6>
                                            
                                            
                                    <button class="btn btn-primary"
                                        name="btnAccion"
                                        value="Agregar"
                                        type="submit">Agregar a la Proforma</button>
                                        </div>
                                    </div>
                                    <form action="" method="post">

                                        <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($plato['id_platillos'],COD,KEY) ?>">
                                        <input type="hidden" name="nombre_p" id="nombre_p" value="<?php echo openssl_encrypt($plato['nombre_p'],COD,KEY) ?>">
                                        <input type="hidden" name="precio_p" id="precio_p" value="<?php echo openssl_encrypt($plato['precio_p'],COD,KEY) ?>">
                                        
                                    </form>
                                    
                                </div>
                                <?php }?>
                            </div>
                        </div>
                        <div id="tab-6" class="tab-pane fade show p-0">
                            <div class="row g-4">
                            <?php foreach($lista_platillos6 as $plato){?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                    <img class="img-thumbnail" style="height: 270px" src="../../Assets/img/<?php echo $plato['imagen']?>" alt="" width="270" >
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 text-white">
                                                <span ><?php echo $plato['nombre_p']?></span>
                                            </h5>
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span class="text-primary">S/.<?php echo $plato['precio_p']?></span>
                                            </h5>

                                            <small class="fst-italic textc-1"><?php echo $plato['descripcion_p']?></small><br>
                                            <h6 class="d-flex justify-content-between border-bottom pb-2">
                                            <form action="" method="post">
                                            <input type="number" name="cantidad" id="cantidad" value="1" min="1" style="width: 50px;">
                                            </h6>
                                            
                                            
                                    <button class="btn btn-primary"
                                        name="btnAccion"
                                        value="Agregar"
                                        type="submit">Agregar a la Proforma</button>
                                        </div>
                                    </div>
                                    <form action="" method="post">

                                        <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($plato['id_platillos'],COD,KEY) ?>">
                                        <input type="hidden" name="nombre_p" id="nombre_p" value="<?php echo openssl_encrypt($plato['nombre_p'],COD,KEY) ?>">
                                        <input type="hidden" name="precio_p" id="precio_p" value="<?php echo openssl_encrypt($plato['precio_p'],COD,KEY) ?>">
                                        
                                    </form>
                                    
                                </div>
                                <?php }?>
                            </div>
                        </div>
                        <div id="tab-7" class="tab-pane fade show p-0">
                            <div class="row g-4">
                            <?php foreach($lista_platillos7 as $plato){?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                    <img class="img-thumbnail" style="height: 270px" src="../../Assets/img/<?php echo $plato['imagen']?>" alt="" width="270" >
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 text-white">
                                                <span ><?php echo $plato['nombre_p']?></span>
                                            </h5>
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span class="text-primary">S/.<?php echo $plato['precio_p']?></span>
                                            </h5>

                                            <small class="fst-italic textc-1"><?php echo $plato['descripcion_p']?></small><br>
                                            <h6 class="d-flex justify-content-between border-bottom pb-2">
                                            <form action="" method="post">
                                            <input type="number" name="cantidad" id="cantidad" value="1" min="1" style="width: 50px;">
                                            </h6>
                                            
                                            
                                    <button class="btn btn-primary"
                                        name="btnAccion"
                                        value="Agregar"
                                        type="submit">Agregar a la Proforma</button>
                                        </div>
                                    </div>
                                    <form action="" method="post">

                                        <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($plato['id_platillos'],COD,KEY) ?>">
                                        <input type="hidden" name="nombre_p" id="nombre_p" value="<?php echo openssl_encrypt($plato['nombre_p'],COD,KEY) ?>">
                                        <input type="hidden" name="precio_p" id="precio_p" value="<?php echo openssl_encrypt($plato['precio_p'],COD,KEY) ?>">
                                        
                                    </form>
                                    
                                </div>
                                <?php }?>
                            </div>
                        </div>
                        <div id="tab-8" class="tab-pane fade show p-0">
                            <div class="row g-4">
                            <?php foreach($lista_platillos8 as $plato){?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                    <img class="img-thumbnail" style="height: 270px" src="../../Assets/img/<?php echo $plato['imagen']?>" alt="" width="270" >
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 text-white">
                                                <span ><?php echo $plato['nombre_p']?></span>
                                            </h5>
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span class="text-primary">S/.<?php echo $plato['precio_p']?></span>
                                            </h5>

                                            <small class="fst-italic textc-1"><?php echo $plato['descripcion_p']?></small><br>
                                            <h6 class="d-flex justify-content-between border-bottom pb-2">
                                            <form action="" method="post">
                                            <input type="number" name="cantidad" id="cantidad" value="1" min="1" style="width: 50px;">
                                            </h6>
                                            
                                            
                                    <button class="btn btn-primary"
                                        name="btnAccion"
                                        value="Agregar"
                                        type="submit">Agregar a la Proforma</button>
                                        </div>
                                    </div>
                                    <form action="" method="post">

                                        <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($plato['id_platillos'],COD,KEY) ?>">
                                        <input type="hidden" name="nombre_p" id="nombre_p" value="<?php echo openssl_encrypt($plato['nombre_p'],COD,KEY) ?>">
                                        <input type="hidden" name="precio_p" id="precio_p" value="<?php echo openssl_encrypt($plato['precio_p'],COD,KEY) ?>">
                                        
                                    </form>
                                    
                                </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>       <!-- Menu End -->
        

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