<?php
class IniciosModel extends Query
{
 
    public function __construct()
    {
        parent::__construct();
    }
    public function getUsuarios()
    {
        $sql = "SELECT u.*, c.id, c.caja FROM usuarios u INNER JOIN caja c ON u.id_caja = c.id";
        $data = $this->select($sql);
        return $data;
    }
    
}
