<?php include "Views/Templates/header.php"; ?>
<div class="card">
    <div class="card-header bg-dark text-white">
        Platillos
    </div>
    <div class="card-body">
        <button class="btn btn-success mb-2" type="button"><a class="dropdown text-white" href="<?php echo base_url; ?>Platillos/index" ><i class="fas fa-solid fa-eye"></i></a></button>
        <table class="table table-light table-bordered table-hover" id="tblPlatillosInac">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
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