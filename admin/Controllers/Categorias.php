<?php
class Categorias extends Controller{
    public function __construct() {
        session_start();
        if (empty($_SESSION['activo'])) {
            header("location: ".base_url);
        }
        parent::__construct();
    }
    public function index()
    {
       
             $this->views->getView($this, "index");
        
    }

    public function listar()
    {
        $data = $this->model->getCategorias();
        for ($i=0; $i < count($data); $i++) { 
            if ($data[$i]['estado'] == 1) {
                $data[$i]['estado'] = '<span class="badge bg-success">Activo</span>';
            }else{
                $data[$i]['estado'] = '<span class="badge bg-danger">Inactivo</span>';  
            }
        }
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }
  
}
