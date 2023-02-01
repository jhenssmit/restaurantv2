<?php include "Views/Templates/header.php"; ?>
<div class="card">
    <div class="card-header bg-dark text-white">
        Platillos
    </div>
    <div class="card-body">
        <button class="btn btn-primary mb-2" type="button" onclick="frmPlatillo();"><i class="fas fa-plus"></i></button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <button class="btn btn-danger mb-2" type="button"><a class="dropdown text-white" href="<?php echo base_url; ?>Platillos/indexInac" ><i class="fas fa-eye-slash"></i></a></button>
        <table class="table table-light table-bordered table-hover" id="tblPlatillos">
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
<div class="modal fade" id="nuevo_platillo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="title">Nuevo Platillo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="frmPlatillo">
                    <div class="form-floating mb-3">
                        <input type="hidden" id="id" name="id">
                        <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Nombre">
                        <label for="nombre">Nombre</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input id="descripcion" class="form-control" type="text" name="descripcion" placeholder="Descripcion">
                        <label for="descripcion">Descripción</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input id="precio" class="form-control" type="text" name="precio" placeholder="Precio">
                        <label for="precio">Precio</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select id="categoria" class="form-control" name="categoria">
                            <?php foreach ($data['categorias'] as $row) { ?>
                                <option value="<?php echo $row['id_categoria']; ?>"><?php echo $row['nombre_c']; ?></option>
                            <?php } ?>
                        </select>
                        <label for="categoria">Categoria</label>
                    </div>
                    <div class="col-md-12">
                    <div class="form-group">
                         <label>Imagen</label>
                        <div class="card border-primary">
                             <div class="card-body">
                                <label for="imagen" id="icon-image" class="btn btn-primary"><i class="fas fa-image"></i></label>
                                <span id="icon-cerrar"></span>
                                <input id="imagen" class="d-none" type="file" name="imagen" onchange="preview(event)">
                                <input type="hidden" id="foto_actual" name="foto_actual">
                                <img class="img-thumbnail" id="img-preview">
                             </div>
                        </div>
                       
                    </div>
                    </div>
                    <button class="btn btn-primary" type="button" onclick="registrarPla(event);" id="btnAccion">Registrar</button>
                    <button class="btn btn-danger" type="button" data-bs-dismiss="modal">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include "Views/Templates/footer.php"; ?>