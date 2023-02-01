<?php
class Administracion extends Controller{
    public function __construct() {
        session_start();
        
        parent::__construct();
    }
    public function index()
    {  
             $id_user = $_SESSION['id_usuario'];
             $verificar = $this->model->verificarPermiso($id_user, 'configuracion');
             if (!empty($verificar) || $id_user == 1 )  {
                  $data = $this->model->getEmpresa();
                  $this->views->getView($this, "index", $data);  
             } else {
                header('Location: '.base_url. 'Errors/permisos');
             }
             
                
    }
    public function home()
    {
        if (empty($_SESSION['activo'])) {
            header("location: " . base_url);
        }
        $data['usuarios'] = $this->model->getDatos('usuarios');
        $data['platillos']= $this->model->getDatos('platillos');
        $data['categoria_p']= $this->model->getDatos('categoria_p');
        $this->views->getView($this, "home", $data);
    }
    public function modificar()
    {
        $nombre = $_POST['nombre_e'];
        $dir = $_POST['direccion'];
        $ruc = $_POST['ruc'];
        $telef = $_POST['telefono'];
        $email = $_POST['email'];
        $desc = $_POST['descripcion_e'];
        $id = $_POST['id_empresa'];
        $data = $this->model->modificar($nombre, $dir, $ruc, $telef, $email, $desc, $id);
        if ($data == 'ok') {
           $msg = 'ok';
        }else{
            $msg = 'error';
        }
        echo json_encode($msg);
        die();
    }
}