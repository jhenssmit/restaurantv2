<?php include "Views/Templates/header.php"; ?>
<div class="card">
    <div class="card-header bg-dark text-white">
        Usuarios
    </div>
    <div class="card-body">
        <button class="btn btn-primary mb-2" type="button" onclick="frmUsuario();"><i class="fas fa-plus"></i></button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <button class="btn btn-danger mb-2" type="button"><a class="dropdown text-white" href="<?php echo base_url; ?>Usuarios/indexInac" ><i class="fas fa-eye-slash"></i></a></button>
        <table class="table table-light table-bordered table-hover" id="tblUsuarios">
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
<div class="modal fade" id="nuevo_usuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="title">Nuevo Usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="frmUsuario">
                    <div class="form-floating mb-3">
                        <input type="hidden" id="id" name="id">
                        <input id="usuario" class="form-control" type="text" name="usuario" placeholder="Usuario">
                        <label for="usuario">Usuario</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Nombre del usuario">
                        <label for="nombre">Nombre</label>
                    </div>
                    <div class="row" id="claves">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input id="clave" class="form-control" type="password" name="clave" placeholder="Contraseña">
                                <label for="clave">Contraseña</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input id="confirmar" class="form-control" type="password" name="confirmar" placeholder="Confirmar contraseña">
                                <label for="confirmar">Confirmar Contraseña</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <select id="caja" class="form-control" name="caja">
                            <?php foreach ($data['cajas'] as $row) { ?>
                                <option value="<?php echo $row['id']; ?>"><?php echo $row['caja']; ?></option>
                            <?php } ?>
                        </select>
                        <label for="caja">Caja</label>
                    </div>
                    <div class="col-md-12">
                    <div class="form-group">
                         <label>Imagen</label>
                        <div class="card border-primary">
                             <div class="card-body">
                                <label for="imagen" id="icon-image" class="btn btn-primary"><i class="fas fa-image"></i></label>
                                <span id="icon-cerra"></span>
                                <input id="imagen" class="d-none" type="file" name="imagen" onchange="previe(event)">
                                <input type="hidden" id="fot_actual" name="fot_actual">
                                <img class="img-thumbnail" id="img-previe">
                             </div>
                        </div> 
                    </div>
                    </div>
                    <button class="btn btn-primary" type="button" onclick="registrarUser(event);" id="btnAccion">Registrar</button>
                    <button class="btn btn-danger" type="button" data-bs-dismiss="modal">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include "Views/Templates/footer.php"; ?>