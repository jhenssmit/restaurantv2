<?php include "Views/Templates/header.php"; ?>
<div class="card">
    <div class="card-header bg-dark text-white">
        Usuarios
    </div>
    <div class="card-body">
        <button class="btn btn-success mb-2" type="button"><a class="dropdown text-white" href="<?php echo base_url; ?>Usuarios/index" ><i class="fas fa-solid fa-eye"></i></a></button>
        <table class="table table-light table-bordered table-hover" id="tblUsuariosInac">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Imagen</th>
                    <th>Usuario</th>
                    <th>Nombre</th>
                    <th>Caja</th>
                    <th>Estado</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
<!-- Modal -->

<?php include "Views/Templates/footer.php"; ?>