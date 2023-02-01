<?php
class Inicios extends Controller{
    public function __construct() {
        session_start();
        
        parent::__construct();
    }
    public function index()
    {  
                  $data = $this->model->getUsuarios();
                  $this->views->getView($this, "index", $data);  
    }
   
}