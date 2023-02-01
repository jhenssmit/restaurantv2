<?php include "Views/Templates/header.php"; ?>
<div class="card">
    <div class="card-header bg-dark text-white">
        Cajas
    </div>
    <div class="card-body">
        <button class="btn btn-success mb-2" type="button"><a class="dropdown text-white" href="<?php echo base_url; ?>Cajas/index" ><i class="fas fa-solid fa-eye"></i></a></button>
            <table class="table table-light" id="tblCajasInac">
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
<?php include "Views/Templates/footer.php"; ?>