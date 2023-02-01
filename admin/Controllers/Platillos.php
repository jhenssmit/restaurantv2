<?php
class Platillos extends Controller{
    public function __construct() {
        session_start();
        if (empty($_SESSION['activo'])) {
            header("location: " . base_url);
        }
        parent::__construct();
    }
    public function index()
    {
        $id_user = $_SESSION['id_usuario'];
        $verificar = $this->model->verificarPermiso($id_user, 'platillos');
        if (!empty($verificar) || $id_user == 1) {
             $data['categorias'] = $this->model->getCategorias();
             $this->views->getView($this, "index", $data);
        } else {
           header('Location: '.base_url. 'Errors/permisos');
        }
    }
    public function indexInac()
    {
             $data['categorias'] = $this->model->getCategorias();
             $this->views->getView($this, "indexInac", $data);
        
    }
    public function listar()
    {
        $data = $this->model->getPlatillos();
        for ($i=0; $i < count($data); $i++) { 
            $data[$i]['imagen'] = '<img class="img-thumbnail" src="'.base_url. "Assets/img/".$data[$i]['imagen'].'" width="100">';
            if ($data[$i]['estado'] == 1) {
                $data[$i]['estado'] = '<span class="badge bg-success">Activo</span>';
                $data[$i]['acciones'] = '<div>
                <button class="btn btn-primary" type="button" onclick="btnEditarPla(' . $data[$i]['id_platillos'] . ');"><i class="fas fa-edit"></i></button>
                <button class="btn btn-danger" type="button" onclick="btnEliminarPla(' . $data[$i]['id_platillos'] . ');"><i class="fas fa-solid fa-ban"></i></button>
                <div/>';
            }else {
                $data[$i]['estado'] = '<span class="badge bg-danger">Inactivo</span>';
                $data[$i]['acciones'] = '<div>
                <button class="btn btn-success" type="button" onclick="btnReingresarPla(' . $data[$i]['id_platillos'] . ');"><i class="fas fa-circle"></i></button>
                <div/>';
            }
        }
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }
    public function listarInac()
    {
        $data = $this->model->getPlatillosInac();
        for ($i=0; $i < count($data); $i++) { 
            $data[$i]['imagen'] = '<img class="img-thumbnail" src="'.base_url. "Assets/img/".$data[$i]['imagen'].'" width="100">';
            if ($data[$i]['estado'] == 1) {
                $data[$i]['estado'] = '<span class="badge bg-success">Activo</span>';
                $data[$i]['acciones'] = '<div>
                <button class="btn btn-primary" type="button" onclick="btnEditarPla(' . $data[$i]['id_platillos'] . ');"><i class="fas fa-edit"></i></button>
                <button class="btn btn-danger" type="button" onclick="btnEliminarPla(' . $data[$i]['id_platillos'] . ');"><i class="fas fa-solid fa-ban"></i></button>
                <div/>';
            }else {
                $data[$i]['estado'] = '<span class="badge bg-danger">Inactivo</span>';
                $data[$i]['acciones'] = '<div>
                <button class="btn btn-success" type="button" onclick="btnReingresarPla(' . $data[$i]['id_platillos'] . ');"><i class="fas fa-circle"></i></button>
                <div/>';
            }
        }
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }
    public function registrar()
    {
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $categoria = $_POST['categoria'];
        $id = $_POST['id'];
        $img = $_FILES['imagen'];
        $name = $img['name'];
        $tmpname = $img['tmp_name'];     
        $destino = "Assets/img/".$name;   
        $fecha = date("YmdHis");
        if (empty($nombre) || empty($descripcion) || empty($precio)) {
            $msg = array('msg' => 'Todo los campos son obligatorios', 'icono' => 'warning');
        }else{
            if (!empty($name))
            {
                $imgNombre = $name . ".jpg";
                $destino = "Assets/img/".$imgNombre;
            }else if(!empty($_POST['foto_actual']) && empty($name)){
                 $imgNombre = $_POST['foto_actual'];
            }else{
                $imgNombre = "default.png";
            }
            if ($id == "") {
           
                    $data = $this->model->registrarPlatillo($nombre, $descripcion, $precio, $categoria, $imgNombre);
                    if ($data == "ok") {
                        if (!empty($imgNombre)){
                            move_uploaded_file($tmpname, $destino);
                          }
                        $msg = array('msg' => 'Platillo registrado con éxito', 'icono' => 'success');
                    }else if($data == "existe"){
                        $msg = array('msg' => 'El Platillo ya existe', 'icono' => 'warning');
                    }else{
                        $msg = array('msg' => 'Error al registrar el Platillo', 'icono' => 'error');
                    }
            }else{
                    $imgDelete = $this->model->editarPla($id);
                    if ($imgDelete['imagen'] != 'default.png'){
                        if (file_exists("Assets/img/" . $imgDelete['imagen'])){
                            unlink("Assets/img/" . $imgDelete['imagen']);
                        }
                    }
                $data = $this->model->modificarPlatillo($nombre, $descripcion, $precio, $categoria, $imgNombre, $id);
                if ($data == "modificado") {
                    $msg = array('msg' => 'Platillo modificado con éxito', 'icono' => 'success');  
                    if (!empty($imgNombre)){
                        move_uploaded_file($tmpname, $destino);
                      }               
                }else {
                    $msg = array('msg' => 'Error al modificar el Platillo', 'icono' => 'error');
                }
            }
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }
    public function editar(int $id)
    {
        $data = $this->model->editarPla($id);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }
    public function eliminar(int $id)
    {
        $data = $this->model->accionPla(0, $id);
        if ($data == 1) {
            $msg = array('msg' => 'Platillo dado de baja', 'icono' => 'success');
        }else{
            $msg = array('msg' => 'Error al eliminar el Platillo', 'icono' => 'error');
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }
    public function reingresar(int $id)
    {
        $data = $this->model->accionPla(1, $id);
        if ($data == 1) {
            $msg = array('msg' => 'Platillo reingresado con éxito', 'icono' => 'success');
        } else {
            $msg = array('msg' => 'Error al reingresar el Platillo', 'icono' => 'error');
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }
}
