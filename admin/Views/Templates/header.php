<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Panel Adminstrativo</title>
    <link href="<?php echo base_url; ?>Assets/css/styles.css" rel="stylesheet" />
    <link href="<?php echo base_url; ?>Assets/css/estilos.css" rel="stylesheet" />
    <link href="<?php echo base_url; ?>Assets/DataTables/datatables.min.css" rel="stylesheet" />
    <script src="<?php echo base_url; ?>Assets/js/all.min.js"></script>
</head>

<body class="sb-nav-fixed" >
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3 text-success" href="<?php echo base_url; ?>Administracion/home">Sabor a Charapita</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>


        <!-- Navbar-->
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-primary" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $_SESSION['usuario']; ?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fas fa-user-tie"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item text-primary" href="#" data-bs-toggle="modal" data-bs-target="#cambiarPass">Cambiar Contraseña</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="<?php echo base_url; ?>Inicios" data-bs-target="#cambiarPass">Perfil</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="<?php echo base_url; ?>Usuarios/salir">Cerrar Sesión</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <!-- <a class="nav-link" href="<?php echo base_url; ?>Inicios"><i class="fas fa-cogs fa-2x text-primary"></i>&nbspInicio</a> -->
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-cogs fa-2x text-primary"></i></div>
                            Administración
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?php echo base_url; ?>Usuarios">Usuarios</a>
                                <a class="nav-link" href="<?php echo base_url; ?>Cajas">Cajas</a>
                                <a class="nav-link" href="<?php echo base_url; ?>Administracion">Configuración</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseProduc" aria-expanded="false" aria-controls="collapseProduc">
                            <div class="sb-nav-link-icon"><i class="fas fa-clipboard-check fa-2x text-primary"></i></div>
                            Carta
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down text-primary"></i></div>
                        </a>
                        <div class="collapse" id="collapseProduc" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?php echo base_url; ?>Categorias" > Categorías</a>
                        <a class="nav-link" href="<?php echo base_url; ?>Platillos" >Platillos</a>
                        </nav>
                        </div>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                <h6 align="center"><?php echo $_SESSION['nombre']; ?></h6>
                    <div class="small text-success" align="center"> En linea</div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4 mt-4">