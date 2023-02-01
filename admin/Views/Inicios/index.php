<?php include "Views/Templates/header.php"; ?>
<div class="card">
    <div class="card-header bg-dark text-white">
        Perfil del Usuario
    </div>
    <div class="card-body">
        <form id="frmEmpresa">
            <div class="row">
                <div class="form-group">
                <input id="id_empresa" class="form-control" type="hidden" name="id_empresa" value="<?php echo $_SESSION['id']; ?>">
                </div>
                <br>
                <div class="col-12">
                    <div class="form-floating mb-3" >
                        <center>
                              <img src="Assets/img/LOGO1.png" width="400"><br>
                        </center>
                    </div>
                </div>
                <br>
                <div class="col-1">
                    <div class="form-floating mb-3">
                  
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-floating mb-3">
                    <img class="img-thumbnail" style="height: 400px" src="Assets/image/<?php echo $_SESSION['imagen']; ?>" alt="" width="350" >
                    </div>
                </div>
                
                <div class="col-4">
                    <div class="form-floating mb-3">
                        <br><br>
                        <h5>Nombre de Usuario:</h5>
                        <h6><?php echo $_SESSION['usuario']; ?></h6>           
                    </div><br>
                
                    <div class="form-floating mb-3">
                        <h5>Apellidos y Nombres:</h5>
                        <h6><?php echo $_SESSION['nombre']; ?></h6>
                    </div><br>

                </div>
                <div class="col-3">
                    <div class="form-floating mb-3">
                     
                   </div> 
                   <h6>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores reiciendis recusandae labore cupiditate libero aperiam voluptate pariatur. Temporibus libero magni, qui corporis dolore voluptatem distinctio placeat voluptates aliquam numquam quidem?
                   Qui reiciendis, error deleniti, aspernatur, quis delectus repellendus vitae earum sint sunt eius voluptas nisi quia ullam laboriosam aliquam provident eveniet cum ad praesentium ducimus recusandae aut? Nisi, ea nihil.
                   Et, doloribus in? Ab iste tenetur expedita mollitia sint? Molestiae, illo natus eaque consequuntur cumque modi dicta unde quaerat odio delectus consectetur, dolores officiis nam? Dolorum dignissimos nemo et ipsa!
                   Atque quas dolorem saepe deleniti rerum debitis sint voluptatibus libero dolorum temporibus autem, minima doloremque unde corporis laborum inventore nihil quibusdam repellendus ullam enim expedita, adipisci veniam! Eum, perferendis soluta.
                   Et nulla magnam reiciendis nam. Amet praesentium dolorum perspiciatis laborum? Architecto asperiores ullam voluptate iusto pariatur dignissimos quasi facilis. Voluptatibus eius ipsa soluta cum aliquam eaque at alias reiciendis cumque.</h6>
                </div> 
            </div> 
                
        </form>
    </div>
</div>
<?php include "Views/Templates/footer.php"; ?>