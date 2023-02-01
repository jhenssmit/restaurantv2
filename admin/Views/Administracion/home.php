<?php include "Views/Templates/header.php"; ?>
<div class="row">
    <div class="col-xl-4 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">
            <i class="fas fa-user fa-3x"></i>
               Ususarios              
            </div>
            <div class="card-footer d-flex aling-items-center justify-content-between">
                <a href="<?php echo base_url; ?>Usuarios" class="text-white">Ver Detalle</a>
                <span class="text-white"><?php echo $data['usuarios']['total']; ?></span>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-6">
        <div class="card bg-danger text-white mb-4">
            <div class="card-body">
             <i class="fab fa-product-hunt fa-3x mx-auto"></i>
               Platillos
               
            </div>
            <div class="card-footer d-flex aling-items-center justify-content-between">
                <a href="<?php echo base_url; ?>Platillos" class="text-white">Ver Detalle</a>
                <span class="text-white"><?php echo $data['platillos']['total']; ?></span>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">
            <i class="fab fa-product-hunt fa-3x mx-auto"></i>
               Categorias              
            </div>
            <div class="card-footer d-flex aling-items-center justify-content-between">
                <a href="<?php echo base_url; ?>Categorias" class="text-white">Ver Detalle</a>
                <span class="text-white"><?php echo $data['categoria_p']['total']; ?></span>
            </div>
        </div>
    </div>
</div>
<?php include "Views/Templates/footer.php"; ?>