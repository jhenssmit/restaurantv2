<?php
class Usuarios extends Controller{
    public function __construct() {
        session_start();
        
        parent::__construct();
    }
    public function index()
    {
        if (empty($_SESSION['activo'])) {
          header("location: " . base_url);
      }
        $id_user = $_SESSION['id_usuario'];
        $verificar = $this->model->verificarPermiso($id_user, 'usuarios');
        if (!empty($verificar) || $id_user == 1) {
               $data['cajas'] = $this->model->getCajas();
               $this->views->getView($this, "index", $data);
        } else {
           header('Location: '.base_url. 'Errors/permisos');
        }
      
    }
    public function indexInac()
    {
        if (empty($_SESSION['activo'])) {
            header("location: " . base_url);
        }
          $id_user = $_SESSION['id_usuario'];
          $verificar = $this->model->verificarPermiso($id_user, 'usuarios_inactivo');
          if (!empty($verificar) || $id_user == 1) {
                $data['cajas'] = $this->model->getCajas();
               $this->views->getView($this, "indexInac", $data);
          } else {
             header('Location: '.base_url. 'Errors/permisos');
          }
        
              
    }
    public function listar()
    {
        $data = $this->model->getUsuarios();
        for ($i=0; $i < count($data); $i++) { 
            $data[$i]['imagen'] = '<img class="img-thumbnail" src="'.base_url. "Assets/image/".$data[$i]['imagen'].'" width="100">';
            if ($data[$i]['estado'] == 1) {
                $data[$i]['estado'] = '<span class="badge bg-success">Activo</span>';
                if ($data[$i]['id'] == 1){
                    $data[$i]['acciones'] = '<div>
                    <span class="badge bg-primary">Administrador</span>
                    <button class="btn btn-primary" type="button" onclick="btnEditarUser(' . $data[$i]['id'] . ');"><i class="fas fa-edit"></i></button>
                    <div/>';
                }else{
                    
                    $data[$i]['acciones'] = '<div>
                    <a class="btn btn-dark" href="'.base_url.'Usuarios/permisos/'. $data[$i]['id'].'" ><i class="fas fa-key"></i></a>
                    <button class="btn btn-primary" type="button" onclick="btnEditarUser(' . $data[$i]['id'] . ');"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-danger" type="button" onclick="btnEliminarUser(' . $data[$i]['id'] . ');"><i class="fas fa-solid fa-ban"></i></button>
                    <div/>';
                }
            }else {
                $data[$i]['estado'] = '<span class="badge bg-danger">Inactivo</span>';
                $data[$i]['acciones'] = '<div>
                <button class="btn btn-success" type="button" onclick="btnReingresarUser(' . $data[$i]['id'] . ');"><i class="fas fa-circle"></i></button>
                <div/>';
            }
        }
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }
    public function listarInac()
    {
        $data = $this->model->getUsuariosInac();
        for ($i=0; $i < count($data); $i++) { 
            $data[$i]['imagen'] = '<img class="img-thumbnail" src="'.base_url. "Assets/image/".$data[$i]['imagen'].'" width="100">';
            if ($data[$i]['estado'] == 1) {
                $data[$i]['estado'] = '<span class="badge bg-success">Activo</span>';
                if ($data[$i]['id'] == 1){
                    $data[$i]['acciones'] = '<div>
                    <span class="badge bg-primary">Administrador</span>
                    <div/>';
                }else{
                    
                    $data[$i]['acciones'] = '<div>
                    <a class="btn btn-dark" href="'.base_url.'Usuarios/permisos/'. $data[$i]['id'].'" ><i class="fas fa-key"></i></a>
                    <button class="btn btn-primary" type="button" onclick="btnEditarUser(' . $data[$i]['id'] . ');"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-danger" type="button" onclick="btnEliminarUser(' . $data[$i]['id'] . ');"><i class="fas fa-solid fa-ban"></i></button>
                    <div/>';
                }
            }else {
                $data[$i]['estado'] = '<span class="badge bg-danger">Inactivo</span>';
                $data[$i]['acciones'] = '<div>
                <button class="btn btn-success" type="button" onclick="btnReingresarUser(' . $data[$i]['id'] . ');"><i class="fas fa-circle"></i></button>
                <div/>';
            }
        }
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }
    public function validar()
    {
        if (empty($_POST['usuario']) || empty($_POST['clave'])) {
            $msg = "Los campos estan vacios";
        }else{
            $usuario = $_POST['usuario'];
            $clave = $_POST['clave'];
            $hash = hash("SHA256", $clave);
            $data = $this->model->getUsuario($usuario, $hash);
            if ($data) {
                $_SESSION['id_usuario'] = $data['id'];
                $_SESSION['usuario'] = $data['usuario'];
                $_SESSION['nombre'] = $data['nombre'];
                $_SESSION['imagen'] = $data['imagen'];
                $_SESSION['activo'] = true;
                $msg = "ok";
            }else{
                $msg = "Usuario o contraseña incorrecta";
            }
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }
    public function registrar()
    {
        $id_user = $_SESSION['id_usuario'];
        $verificar = $this->model->verificarPermiso($id_user, 'registrar_usuarios');
        if (!empty($verificar) || $id_user == 1) {
        $usuario = $_POST['usuario'];
        $nombre = $_POST['nombre'];
        $clave = $_POST['clave'];
        $confirmar = $_POST['confirmar'];
        $caja = $_POST['caja'];
        $id = $_POST['id'];
        $hash = hash("SHA256", $clave);
        $img = $_FILES['imagen'];
        $names = $img['name'];
        $tmpnames = $img['tmp_name'];     
        $destino = "Assets/img/".$names;   
        $fecha = date("YmdHis");
        if (empty($usuario) || empty($nombre) || empty($caja)) {
            $msg = array('msg' => 'Todo los campos son obligatorios', 'icono' => 'warning');
        }else{
            if (!empty($names))
            {
                $imgNombre = $names . ".jpg";
                $destino = "Assets/image/".$imgNombre;
            }else if(!empty($_POST['fot_actual']) && empty($names)){
                 $imgNombre = $_POST['fot_actual'];
            }else{
                $imgNombre = "default.png";
            }
            if ($id == "") {
                if($clave != $confirmar){
                    $msg = array('msg' => 'Las contraseña no coinciden', 'icono' => 'warning');
                }else{
                    $data = $this->model->registrarUsuario($usuario, $nombre, $hash, $caja, $imgNombre);
                    if ($data == "ok") {
                        if (!empty($imgNombre)){
                            move_uploaded_file($tmpnames, $destino);
                          }
                        $msg = array('msg' => 'Usuario registrado con éxito', 'icono' => 'success');
                    }else if($data == "existe"){
                        $msg = array('msg' => 'El usuario ya existe', 'icono' => 'warning');
                    }else{
                        $msg = array('msg' => 'Error al registrar el usuario', 'icono' => 'error');
                    }
                }
            }else{
                $imgDelete = $this->model->editarUser($id);
                if ($imgDelete['imagen'] != 'default.png'){
                    if (file_exists("Assets/image/" . $imgDelete['imagen'])){
                        unlink("Assets/image/" . $imgDelete['imagen']);
                    }
                }
                $data = $this->model->modificarUsuario($usuario, $nombre, $caja, $imgNombre, $id);
                if ($data == "modificado") {
                    $msg = array('msg' => 'Usuario modificado con éxito', 'icono' => 'success');
                    if (!empty($imgNombre)){
                        move_uploaded_file($tmpnames, $destino);
                      }           
                }else {
                    $msg = array('msg' => 'Error al modificar el usuario', 'icono' => 'error');
                }
            }
        }
    }else {
        $msg = array('msg' => 'No tienes permisos para registrar o modificar Usuarios', 'icono' => 'warning');
    }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }
    public function editar(int $id)
    {
        $data = $this->model->editarUser($id);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }
    public function eliminar(int $id)
    {
        $id_user = $_SESSION['id_usuario'];
        $verificar = $this->model->verificarPermiso($id_user, 'eliminar_usuarios');
        if (!empty($verificar) || $id_user == 1) {
        $data = $this->model->accionUser(0, $id);
        if ($data == 1) {
            $msg = array('msg' => 'Usuario dado de baja', 'icono' => 'success');
        }else{
            $msg = array('msg' => 'Error al eliminar el usuario', 'icono' => 'error');
        }
    } else {
        $msg = array('msg' => 'No tienes permisos para eliminar usuarios', 'icono' => 'warning');
    }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }
    public function reingresar(int $id)
    {
        $data = $this->model->accionUser(1, $id);
        if ($data == 1) {
            $msg = array('msg' => 'Usuario reingresado con éxito', 'icono' => 'success');
        } else {
            $msg = array('msg' => 'Error al reingresar el usuario', 'icono' => 'error');
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }
    public function cambiarPass()
    {
        $actual = $_POST['clave_actual'];
        $nueva = $_POST['clave_nueva'];
        $confirmar = $_POST['confirmar_clave'];
        if (empty($actual) || empty($nueva) || empty($confirmar)) {   
            $mensaje = array('msg' => 'Todo los campos son obligatorios', 'icono' => 'warning');
        }else{
            if ($nueva != $confirmar) {
                $mensaje = array('msg' => 'Las contraseñas no coinciden', 'icono' => 'warning');
            }else{
                $id = $_SESSION['id_usuario'];
                $hash = hash("SHA256", $actual);
                $data = $this->model->getPass($hash, $id);
                if (!empty($data)) {
                    $verificar = $this->model->modificarPass(hash("SHA256", $nueva), $id);
                    if ($verificar == 1) {
                        $mensaje = array('msg' => 'Contraseñas modificada con éxito', 'icono' => 'success');
                    }else{
                        $mensaje = array('msg' => 'Error al modificar la contraseña', 'icono' => 'error');
                    }
                }else{
                    $mensaje = array('msg' => 'Las contraseñas actual incorrecta', 'icono' => 'warning');
                }
            }
        }
        echo json_encode($mensaje, JSON_UNESCAPED_UNICODE);
        die();
    }
    public function permisos($id)
    {
        if (empty($_SESSION['activo'])) {
            header("location: " . base_url);
        }
        $data['datos'] = $this->model->getPermisos();
        $permisos = $this->model->getDetallePermisos($id);
        $data['asignados'] = array();
        foreach($permisos as $permiso){
            $data['asignados'][$permiso['id_permiso']] = true;
        }
        $data['id_usuario'] = $id;
        $this->views->getView($this, "permisos", $data);
    }
    public function registrarPermiso()
    {
        $msg = '';
       $id_user = $_POST['id_usuario'];
       $eliminar = $this->model->eliminarPermisos($id_user);
       if ($eliminar == 'ok') {
        foreach ($_POST['permisos'] as $id_permiso){
            $msg = $this->model->registrarPermisos($id_user, $id_permiso);
           }
           if ($msg == 'ok') {
            $msg = array('msg'=> 'Permisos asignados', 'icono' => 'success');

           } else {
            $msg = array('msg'=> 'Error al asignar los permisos', 'icono' => 'error');

           }
           
       } else {
        $msg = array('msg'=> 'Error al eliminar los permisos anteriores', 'icono' => 'error');
       }
       echo json_encode($msg, JSON_UNESCAPED_UNICODE);
       
    }
    public function salir()
    {
        session_destroy();
        header("location: ".base_url);
    }
}
