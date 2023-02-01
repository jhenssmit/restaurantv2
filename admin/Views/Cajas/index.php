<?php include "Views/Templates/header.php"; ?>
<div class="card">
    <div class="card-header bg-dark text-white">
        Cajas
    </div>
<div class="card-body">
<button class="btn btn-primary mb-2" type="button" onclick="frmCaja();"><i class="fas fa-plus"></i></button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <button class="btn btn-danger mb-2" type="button"><a class="dropdown text-white" href="<?php echo base_url; ?>Cajas/indexInac" ><i class="fas fa-eye-slash"></i></a></button>
<table class="table table-light" id="tblCajas">
    <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Estado</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>
</div>
</div>
<div class="modal fade" id="nuevoCaja" tabindex="-1" aria-labelledby="my_modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="title"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" id="frmCaja">
                    <div class="form-floating mb-3">
                        <input type="hidden" id="id" name="id">
                        <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Nombre del caja">
                        <label for="nombre">Nombre</label>
                    </div>
                    <button class="btn btn-primary" type="button" onclick="registrarCaja(event);" id="btnAccion">Registrar</button>
                    <button class="btn btn-danger" type="button" data-bs-dismiss="modal">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include "Views/Templates/footer.php"; ?>