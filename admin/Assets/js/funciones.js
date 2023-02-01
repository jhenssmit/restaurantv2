let tblUsuarios, tblCajas, tblCategorias, tblPlatillos, tblCajasInac, tblUsuariosInac, tblCategoriasInac, tblPlatillosInac;
document.addEventListener("DOMContentLoaded", function(){
    const buttons = [{
            extend: 'excelHtml5',
            footer: true,
            title: 'Archivo',
            filename: 'Export_File',
            text: '<span class="badge bg-success"><i class="fas fa-file-excel"></i></span>'
        },
        {
            extend: 'pdfHtml5',
            download: 'open',
            footer: true,
            title: 'Reporte de usuarios',
            filename: 'Reporte de usuarios',
            text: '<span class="badge  bg-danger"><i class="fas fa-file-pdf"></i></span>',
            exportOptions: {
                columns: [0, ':visible']
            }
        },
        {
            extend: 'copyHtml5',
            footer: true,
            title: 'Reporte de usuarios',
            filename: 'Reporte de usuarios',
            text: '<span class="badge  bg-primary"><i class="fas fa-copy"></i></span>',
            exportOptions: {
                columns: [0, ':visible']
            }
        },
        {
            extend: 'print',
            footer: true,
            filename: 'Export_File_print',
            text: '<span class="badge bg-dark"><i class="fas fa-print"></i></span>'
        },
        {
            extend: 'csvHtml5',
            footer: true,
            filename: 'Export_File_csv',
            text: '<span class="badge  bg-success"><i class="fas fa-file-csv"></i></span>'
        }, {
            extend: 'colvis',
            text: '<span class="badge  bg-info"><i class="fas fa-columns"></i></span>',
            postfixButtons: ['colvisRestore']
        }
    ]
    const dom = "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>" +
    "<'row'<'col-sm-12'tr>>" +
    "<'row'<'col-sm-5'i><'col-sm-7'p>>";
    tblUsuarios = $('#tblUsuarios').DataTable({
        ajax: {
            url: base_url + "Usuarios/listar",
            dataSrc: ''
        },
        columns: [
            {'data' : 'id'},
            {'data' : 'imagen'},
            {'data': 'usuario'},
            {'data': 'nombre'},
            {'data': 'caja'},
            {'data': 'estado'},
            {'data': 'acciones'}
        ],
        language: {
            "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"
        },
        dom,
        buttons
    });//Fin de la tabla usuarios
    tblUsuariosInac = $('#tblUsuariosInac').DataTable({
        ajax: {
            url: base_url + "Usuarios/listarInac",
            dataSrc: ''
        },
        columns: [
            {'data' : 'id'},
            {'data' : 'imagen'},
            {'data': 'usuario'},
            {'data': 'nombre'},
            {'data': 'caja'},
            {'data': 'estado'},
            {'data': 'acciones'}
        ],
        language: {
            "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"
        },
        dom,
        buttons
    });//Fin de la tabla usuarios Inactivos
    tblPlatillos = $('#tblPlatillos').DataTable({
        ajax: {
            url: base_url + "Platillos/listar",
            dataSrc: ''
        },
        columns: [
            {'data' : 'id_platillos'},
            {'data' : 'imagen'},
            {'data': 'nombre_p'},
            {'data': 'descripcion_p'},
            {'data': 'precio_p'},
            {'data': 'estado'},
            {'data': 'acciones'}
        ],
        language: {
            "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"
        },
        dom,
        buttons
    });//Fin de la tabla Platillos
    tblPlatillosInac = $('#tblPlatillosInac').DataTable({
        ajax: {
            url: base_url + "Platillos/listarInac",
            dataSrc: ''
        },
        columns: [
            {'data' : 'id_platillos'},
            {'data' : 'imagen'},
            {'data': 'nombre_p'},
            {'data': 'descripcion_p'},
            {'data': 'precio_p'},
            {'data': 'estado'},
            {'data': 'acciones'}
        ],
        language: {
            "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"
        },
        dom,
        buttons
    });//Fin de la tabla Platillos Inactivos
    tblCajas = $('#tblCajas').DataTable({
        ajax: {
            url: base_url + "Cajas/listar",
            dataSrc: ''
        },
        columns: [
            {'data': 'id'},
            {'data': 'caja'},
            {'data': 'estado'},
            {'data': 'acciones'}
        ],
        language: {
            "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"
        },
        dom,
        buttons
    });//Fin de la tabla Cajas
    tblCajasInac = $('#tblCajasInac').DataTable({
        ajax: {
            url: base_url + "Cajas/listarInac",
            dataSrc: ''
        },
        columns: [
            {'data': 'id'},
            {'data': 'caja'},
            {'data': 'estado'},
            {'data': 'acciones'}
        ],
        language: {
            "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"
        },
        dom,
        buttons
    });//Fin de la tabla Cajas Inactivas
    tblCategorias = $('#tblCategorias').DataTable({
        ajax: {
            url: base_url + "Categorias/listar",
            dataSrc: ''
        },
        columns: [
            {'data': 'id_categoria'},
            {'data': 'nombre_c'},
            {'data': 'estado'}
        ],
        language: {
            "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"
        },
        dom,
        buttons
    });//Fin de la tabla Categoria
    
})
function frmCambiarPass(e){
    e.preventDefault();
    const actual = document.getElementById('clave_actual').value;
    const nueva = document.getElementById('clave_nueva').value;
    const confirmar = document.getElementById('confirmar_clave').value;
    if (actual == '' || nueva =='' || confirmar == '') {
        alertas('Todo los campos son obligatorios', 'warning');
        return false;
    }else{
        const url = base_url + "Usuarios/cambiarPass";
        const frm = document.getElementById("frmCambiarPass");
        const http = new XMLHttpRequest();
        http.open("POST", url, true);
        http.send(new FormData(frm));
        http.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                const res = JSON.parse(this.responseText);
                $("#cambiarPass").modal("hide");
                alertas(res.msg, res.icono);
            }
        }
    }
}
function frmUsuario() {
    document.getElementById("title").textContent = "Nuevo Usuario";
    document.getElementById("btnAccion").textContent = "Registrar";
    document.getElementById("claves").classList.remove("d-none");
    document.getElementById("frmUsuario").reset();
    document.getElementById("id").value = "";
    $('#nuevo_usuario').modal('show');
    deleteImag();
}
function registrarUser(e) {
    e.preventDefault();
    const usuario = document.getElementById("usuario");
    const nombre = document.getElementById("nombre");
    const caja = document.getElementById("caja");
    if (usuario.value == "" || nombre.value == "" || caja.value == "") {
        alertas('Todo los campos son obligatorios', 'warning');
    } else {
        const url = base_url + "Usuarios/registrar";
        const frm = document.getElementById("frmUsuario");
        const http = new XMLHttpRequest();
        http.open("POST", url, true);
        http.send(new FormData(frm));
        http.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                const res = JSON.parse(this.responseText);
                $("#nuevo_usuario").modal("hide");
                alertas(res.msg, res.icono);
                tblUsuarios.ajax.reload();
            }
        }
    }
}
function btnEditarUser(id) {
    document.getElementById("title").innerHTML = "Actualizar usuario";
    document.getElementById("btnAccion").innerHTML = "Modificar";
    const url = base_url + "Usuarios/editar/"+id;
    const http = new XMLHttpRequest();
    http.open("GET", url, true);
    http.send();
    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            const res = JSON.parse(this.responseText);
            document.getElementById("id").value = res.id;
            document.getElementById("usuario").value = res.usuario;
            document.getElementById("nombre").value = res.nombre;
            document.getElementById("caja").value = res.id_caja;
            document.getElementById("claves").classList.add("d-none");
            document.getElementById("img-previe").src = base_url + 'Assets/image/'+ res.imagen;
            document.getElementById("icon-cerra").innerHTML = `
            <button class="btn btn-danger" onclick="deleteImag()"><i class="fas fa-times"></i></button>`;
            document.getElementById("icon-image").classList.add("d-none");
            document.getElementById("fot_actual").value = res.imagen;
            $('#nuevo_usuario').modal('show');
        }
    }
}
function btnEliminarUser(id) {
    Swal.fire({
        title: 'Esta seguro de eliminar?',
        text: "El usuario no se eliminara de forma permanente, solo cambiará el estado a inactivo!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si!',
        cancelButtonText: 'No'
    }).then((result) => {
        if (result.isConfirmed) {
            const url = base_url + "Usuarios/eliminar/" + id;
            const http = new XMLHttpRequest();
            http.open("GET", url, true);
            http.send();
            http.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    const res = JSON.parse(this.responseText);
                    alertas(res.msg, res.icono);
                    tblUsuarios.ajax.reload();
                }
            }
            
        }
    })
}
function btnReingresarUser(id) {
    Swal.fire({
        title: 'Esta seguro de reingresar?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si!',
        cancelButtonText: 'No'
    }).then((result) => {
        if (result.isConfirmed) {
            const url = base_url + "Usuarios/reingresar/" + id;
            const http = new XMLHttpRequest();
            http.open("GET", url, true);
            http.send();
            http.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    const res = JSON.parse(this.responseText);
                    tblUsuariosInac.ajax.reload();
                    alertas(res.msg, res.icono);
                }
            }
        }
    })
}

//Fin Usuarios
function frmCaja() {
    document.getElementById("title").textContent = "Nuevo Caja";
    document.getElementById("btnAccion").textContent = "Registrar";
    document.getElementById("frmCaja").reset();
    document.getElementById("id").value = "";
    $('#nuevoCaja').modal('show');

}
function registrarCaja(e) {
    e.preventDefault();
    const nombre = document.getElementById("nombre");
    if (nombre.value == "") {
        alertas('El nombre es requerido', 'warning');
    } else {
        const url = base_url + "Cajas/registrar";
        const frm = document.getElementById("frmCaja");
        const http = new XMLHttpRequest();
        http.open("POST", url, true);
        http.send(new FormData(frm));
        http.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                const res = JSON.parse(this.responseText);
                alertas(res.msg, res.icono);
                frm.reset();
                $('#nuevoCaja').modal('hide');
                tblCajas.ajax.reload();
            }
        }
    }
}
function btnEditarCaja(id) {
    document.getElementById("title").textContent = "Actualizar caja";
    document.getElementById("btnAccion").textContent = "Modificar";
    const url = base_url + "Cajas/editar/" + id;
    const http = new XMLHttpRequest();
    http.open("GET", url, true);
    http.send();
    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            const res = JSON.parse(this.responseText);
            document.getElementById("id").value = res.id;
            document.getElementById("nombre").value = res.caja;
            $('#nuevoCaja').modal('show');
        }
    }
}
function btnEliminarCaja(id) {
    Swal.fire({
        title: 'Esta seguro de eliminar?',
        text: "La caja no se eliminará de forma permanente, solo cambiará el estado a inactivo!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si!',
        cancelButtonText: 'No'
    }).then((result) => {
        if (result.isConfirmed) {
            const url = base_url + "Cajas/eliminar/" + id;
            const http = new XMLHttpRequest();
            http.open("GET", url, true);
            http.send();
            http.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    const res = JSON.parse(this.responseText);
                    alertas(res.msg, res.icono);
                    tblCajas.ajax.reload();
                }
            }
        }
    })
}
function btnReingresarCaja(id) {
    Swal.fire({
        title: 'Esta seguro de reingresar?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si!',
        cancelButtonText: 'No'
    }).then((result) => {
        if (result.isConfirmed) {
            const url = base_url + "Cajas/reingresar/" + id;
            const http = new XMLHttpRequest();
            http.open("GET", url, true);
            http.send();
            http.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    const res = JSON.parse(this.responseText);
                    alertas(res.msg, res.icono);
                    tblCajasInac.ajax.reload();
                }
            }
        }
    })
}//Fin Cajas
function frmCategoria() {
    document.getElementById("title").textContent = "Nueva Categoría";
    document.getElementById("btnAccion").textContent = "Registrar";
    document.getElementById("frmCategoria").reset();
    document.getElementById("id").value = "";
    $('#nuevoCategoria').modal('show');
}//Fin Categorias
function frmPlatillo() {
    document.getElementById("title").textContent = "Nuevo Platillo";
    document.getElementById("btnAccion").textContent = "Registrar";
    document.getElementById("frmPlatillo").reset();
    document.getElementById("id").value = "";
    $('#nuevo_platillo').modal('show');
    deleteImg();
}
function registrarPla(e) {
    e.preventDefault();
    const nombre = document.getElementById("nombre");
    const descripcion = document.getElementById("descripcion");
    const precio = document.getElementById("precio");
    const id_cat = document.getElementById("categoria");
    if (nombre.value == "" || descripcion.value == "" || precio.value == "") {
        alertas('Todo los campos son obligatorios', 'warning');
    } else {
        const url = base_url + "Platillos/registrar";
        const frm = document.getElementById("frmPlatillo");
        const http = new XMLHttpRequest();
        http.open("POST", url, true);
        http.send(new FormData(frm));
        http.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                const res = JSON.parse(this.responseText);
                $("#nuevo_platillo").modal("hide");
                alertas(res.msg, res.icono);
                tblPlatillos.ajax.reload();
            }
        }
    }
}
function btnEditarPla(id) {
    document.getElementById("title").innerHTML = "Actualizar usuario";
    document.getElementById("btnAccion").innerHTML = "Modificar";
    const url = base_url + "Platillos/editar/"+id;
    const http = new XMLHttpRequest();
    http.open("GET", url, true);
    http.send();
    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            const res = JSON.parse(this.responseText);
            document.getElementById("id").value = res.id_platillos;
            document.getElementById("nombre").value = res.nombre_p;
            document.getElementById("descripcion").value = res.descripcion_p;
            document.getElementById("precio").value = res.precio_p;
            document.getElementById("categoria").value = res.id_categoria;
            document.getElementById("img-preview").src = base_url + 'Assets/img/'+ res.imagen;
            document.getElementById("icon-cerrar").innerHTML = `
            <button class="btn btn-danger" onclick="deleteImg()"><i class="fas fa-times"></i></button>`;
            document.getElementById("icon-image").classList.add("d-none");
            document.getElementById("foto_actual").value = res.imagen;
            $('#nuevo_platillo').modal('show');
        }
    }
}
function btnEliminarPla(id) {
    Swal.fire({
        title: 'Esta seguro de eliminar?',
        text: "El Platillo no se eliminara de forma permanente, solo cambiará el estado a inactivo!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si!',
        cancelButtonText: 'No'
    }).then((result) => {
        if (result.isConfirmed) {
            const url = base_url + "Platillos/eliminar/" + id;
            const http = new XMLHttpRequest();
            http.open("GET", url, true);
            http.send();
            http.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    const res = JSON.parse(this.responseText);
                    alertas(res.msg, res.icono);
                    tblPlatillos.ajax.reload();
                }
            }
            
        }
    })
}
function btnReingresarPla(id) {
    Swal.fire({
        title: 'Esta seguro de reingresar?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si!',
        cancelButtonText: 'No'
    }).then((result) => {
        if (result.isConfirmed) {
            const url = base_url + "Platillos/reingresar/" + id;
            const http = new XMLHttpRequest();
            http.open("GET", url, true);
            http.send();
            http.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    const res = JSON.parse(this.responseText);
                    tblPlatillosInac.ajax.reload();
                    alertas(res.msg, res.icono);
                }
            }
        }
    })
}
//Fin Platillos
function preview(e){
    const url = e.target.files[0];
    const urlTmp = URL.createObjectURL(url);
    document.getElementById("img-preview").src = urlTmp;
    document.getElementById("icon-image").classList.add("d-none");
    document.getElementById("icon-cerrar").innerHTML = `
    <button class="btn btn-danger" onclick="deleteImg()"><i class="fas fa-times"></i></button>
    ${url['name']}`;
}
function previe(e){
    const url = e.target.files[0];
    const urlTm = URL.createObjectURL(url);
    document.getElementById("img-previe").src = urlTm;
    document.getElementById("icon-image").classList.add("d-none");
    document.getElementById("icon-cerra").innerHTML = `
    <button class="btn btn-danger" onclick="deleteImag()"><i class="fas fa-times"></i></button>
    ${url['names']}`;
}
function deleteImg() {
    document.getElementById("icon-cerrar").innerHTML = '';
    document.getElementById("icon-image").classList.remove("d-none");
    document.getElementById("img-preview").src = '';
    document.getElementById("imagen").value = '';
    document.getElementById("foto_actual").value = '';
}
function deleteImag() {
    document.getElementById("icon-cerra").innerHTML = '';
    document.getElementById("icon-image").classList.remove("d-none");
    document.getElementById("img-previe").src = '';
    document.getElementById("imagen").value = '';
    document.getElementById("fot_actual").value = '';
}
function alertas(mensaje, icono) {
    Swal.fire({
        position: 'top-end',
        icon: icono,
        title: mensaje,
        showConfirmButton: false,
        timer: 3000
    })
}
function modificarEmpresa() {
    const frm = document.getElementById('frmEmpresa');
    const url = base_url + "Administracion/modificar";
    const http = new XMLHttpRequest();
    http.open("POST", url, true);
    http.send(new FormData(frm));
    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            const res = JSON.parse(this.responseText);
            if (res == 'ok') {
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Modificado',
                    showConfirmButton: false,
                    timer: 2000
                })
            }
        }
    }
}
function registrarPermisos(e){
    e.preventDefault();
    const url = base_url + "Usuarios/registrarPermiso";
    const frm = document.getElementById('formulario');
    const http = new XMLHttpRequest();
    http.open("POST", url, true);
    http.send(new FormData(frm));
    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            const res = JSON.parse(this.responseText);
           if (res != ''){
            alertas(res.msg, res.icono);
           }else{
            alertas('Error no identificado', 'error');
           }
    }
 }
}