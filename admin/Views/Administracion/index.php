<?php include "Views/Templates/header.php"; ?>
<div class="card">
    <div class="card-header bg-dark text-white">
        Datos del Restaurante
    </div>
    <div class="card-body">
    <img src="Assets/img/logo1.png" width="400">
        <form id="frmEmpresa">
            <div class="row">
                <div class="form-group">
                <input id="id_empresa" class="form-control" type="hidden" name="id_empresa" value="<?php echo $data['id_empresa']?>">
                </div>
                <div class="col-6">
                <div class="form-floating mb-3">
                    <input id="nombre_e" class="form-control" type="text" name="nombre_e" placeholder="Nombre empresa" value="<?php echo $data['nombre_e']?>">
                    <label for="nombre_e">Nombre</label>
                </div>
                </div>
                <div class="col-6">
                <div class="form-floating mb-3">
                    <input id="direccion" class="form-control" type="text" name="direccion" placeholder="Direccion empresa" value="<?php echo $data['direccion']?>">
                    <label for="direccion">Dirección</label>
                </div>
                </div>
                <div class="col-6">
                <div class="form-floating mb-3">
                   <input id="ruc" class="form-control" type="text" name="ruc" placeholder="Ruc empres" value="<?php echo $data['ruc']?>">
                   <label for="ruc">RUC</label>
                </div>
                </div> 
                <div class="col-6">
                <div class="form-floating mb-3">
                    <input id="telefono" class="form-control" type="text" name="telefono" placeholder="telefono empresa" value="<?php echo $data['telefono']?>">
                    <label for="telefono">Telefono</label>
               </div>
                </div>
                <div class="col-6">
                <div class="form-floating mb-3">
                    <input id="email" class="form-control" type="text" name="email" placeholder="Email empresa" value="<?php echo $data['email']?>">
                    <label for="email">Email</label>
                </div>
                </div>
                <div class="col-6">
                <div class="form-group">
                    <label for="descripcion_e">Detalle de la Empresa</label>
                    <textarea id="descripcion_e" class="form-control" name="descripcion_e" rows="5" placeholder="Detalle empresa"><?php echo $data['descripcion_e']?></textarea>
            </div> 
            <br>
            <button class="btn btn-primary" type="button" onclick="modificarEmpresa()">Modificar</button>
        </form>
    </div>
</div>
<?php include "Views/Templates/footer.php"; ?>