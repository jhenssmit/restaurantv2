<?php
class Cajas extends Controller{
    public function __construct() {
        session_start();
        if (empty($_SESSION['activo'])) {
            header("location: ".base_url);
        }
        parent::__construct();
    }
    public function index()
    {
        $id_user = $_SESSION['id_usuario'];
        $verificar = $this->model->verificarPermiso($id_user, 'cajas');
        if (!empty($verificar) || $id_user == 1) {
             $this->views->getView($this, "index"); 
        } else {
           header('Location: '.base_url. 'Errors/permisos');
        }
        
    }
    public function indexInac()
    {
        
        
             $this->views->getView($this, "indexInac"); 
       
        
    }

    public function listar()
    {
        $data = $this->model->getCajas('caja');
        for ($i=0; $i < count($data); $i++) { 
            if ($data[$i]['estado'] == 1) {
                $data[$i]['estado'] = '<span class="badge bg-success">Activo</span>';
                $data[$i]['acciones'] = '<div>
                <button class="btn btn-primary" type="button" onclick="btnEditarCaja(' . $data[$i]['id'] . ');"><i class="fas fa-edit"></i></button>
                <button class="btn btn-danger" type="button" onclick="btnEliminarCaja(' . $data[$i]['id'] . ');"><i class="fas fa-solid fa-ban"></i></button>
                <div/>';
            }else{
                $data[$i]['estado'] = '<span class="badge bg-danger">Inactivo</span>';
                $data[$i]['acciones'] = '<div>
                <button class="btn btn-success" type="button" onclick="btnReingresarCaja(' . $data[$i]['id'] . ');"><i class="fas fa-circle"></i></button>
                <div/>';
            }
        }
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }
    public function listarInac()
    {
        $data = $this->model->getCajasInac('caja');
        for ($i=0; $i < count($data); $i++) { 
            if ($data[$i]['estado'] == 1) {
                $data[$i]['estado'] = '<span class="badge bg-success">Activo</span>';
                $data[$i]['acciones'] = '<div>
                <button class="btn btn-primary" type="button" onclick="btnEditarCaja(' . $data[$i]['id'] . ');"><i class="fas fa-edit"></i></button>
                <button class="btn btn-danger" type="button" onclick="btnEliminarCaja(' . $data[$i]['id'] . ');"><i class="fas fa-solid fa-ban"></i></button>
                <div/>';
            }else{
                $data[$i]['estado'] = '<span class="badge bg-danger">Inactivo</span>';
                $data[$i]['acciones'] = '<div>
                <button class="btn btn-success" type="button" onclick="btnReingresarCaja(' . $data[$i]['id'] . ');"><i class="fas fa-circle"></i></button>
                <div/>';
            }
        }
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }
    public function registrar()
    {
        $caja = $_POST['nombre'];
        $id = $_POST['id'];
        if (empty($caja)) {
            $msg = array('msg' => 'Todo los campos son obligatorios', 'icono' => 'warning');
        }else{
            if ($id == "") {
                    $data = $this->model->registrarCaja($caja);
                    if ($data == "ok") {
                        $msg = array('msg' => 'Caja registrado con éxito', 'icono' => 'success');
                    }else if($data == "existe"){
                        $msg = array('msg' => 'La caja ya existe', 'icono' => 'warning');
                    }else{
                        $msg = array('msg' => 'Error al registrar la caja', 'icono' => 'error');
                    }
            }else{
                $data = $this->model->modificarCaja($caja, $id);
                if ($data == "modificado") {
                        $msg = array('msg' => 'Caja Modificado con éxito', 'icono' => 'success');
                }else {
                        $msg = array('msg' => 'Error al modificar la caja', 'icono' => 'error');
                }
            }
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }
    public function editar(int $id)
    {
        $data = $this->model->editarCaja($id);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }
    public function eliminar(int $id)
    {
        $data = $this->model->accionCaja(0, $id);
        if ($data == 1) {
            $msg = array('msg' => 'Caja dado de baja', 'icono' => 'success');

        }else{
            $msg = array('msg' => 'Error al aliminar la caja', 'icono' => 'error');

        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }
    public function reingresar(int $id)
    {
        $data = $this->model->accionCaja(1, $id);
        if ($data == 1) {
            $msg = array('msg' => 'Caja reingresado', 'icono' => 'success');

        } else {
            $msg = array('msg' => 'Error al reingresar la caja', 'icono' => 'error');

        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }
}
