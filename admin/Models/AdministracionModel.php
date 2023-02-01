<?php
class AdministracionModel extends Query
{
 
    public function __construct()
    {
        parent::__construct();
    }
    public function getEmpresa()
    {
        $sql = "SELECT * FROM empresa";
        $data = $this->select($sql);
        return $data;
    }
    public function getDatos(string $table)
    {
        $sql = "SELECT COUNT(*) AS total FROM $table";
        $data = $this->select($sql);
        return $data;
    }
    public function modificar(string $nombre, string $dir, string $ruc,  string $telef, string $email,string $desc, int $id)
    {
            $sql = "UPDATE empresa SET nombre_e = ?, direccion =?, ruc =? , telefono =?, email = ?, descripcion_e = ? WHERE id_empresa = ?";
            $datos = array($nombre, $dir, $ruc, $telef, $email, $desc, $id);
            $data = $this->save($sql, $datos);
            if ($data == 1) {
                $res = "ok";
            }else{
                $res = "error";
            }
        return $res;
    }
    public function verificarPermiso(int $id_user, string $nombre)
    {
        $sql ="SELECT p.id, p.permiso, d.id, d.id_usuario, d.id_permiso FROM permisos p INNER JOIN detalle_permisos d ON p.id = d.id_permiso WHERE d.id_usuario = $id_user  AND p.permiso = '$nombre'";
        $data = $this->selectAll($sql);
        return $data;
    }
}
