<?php
class CategoriasModel extends Query{
    private $dni, $Categoria, $telefono, $direccion, $id, $estado;
    public function __construct()
    {
        parent::__construct();
    }
    public function getCategorias()
    {
        $sql = "SELECT * FROM categoria_p WHERE estado = 1";
        $data = $this->selectAll($sql);
        return $data;
    }
   
}
