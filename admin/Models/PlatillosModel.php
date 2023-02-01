<?php
class PlatillosModel extends Query{
    private $nombre, $descripcion, $precio, $id_categoria, $id, $estado, $img;
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
    public function getPlatillos()
    {
        $sql = "SELECT p.*, c.id_categoria, c.nombre_c FROM Platillos p INNER JOIN categoria_p c ON p.id_categoria = c.id_categoria AND p.estado = 1";
        $data = $this->selectAll($sql);
        return $data;
    }
    public function getPlatillosInac()
    {
        $sql = "SELECT p.*, c.id_categoria, c.nombre_c FROM Platillos p INNER JOIN categoria_p c ON p.id_categoria = c.id_categoria AND p.estado = 0";
        $data = $this->selectAll($sql);
        return $data;
    }
    public function registrarPlatillo(string $nombre, string $descripcion, string $precio, int $id_categoria, string $img)
    {
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->id_categoria = $id_categoria;
        $this->img = $img;
        $vericar = "SELECT * FROM platillos WHERE nombre_p = '$this->nombre'";
        $existe = $this->select($vericar);
        if (empty($existe)) {
            # code...
            $sql = "INSERT INTO platillos(nombre_p, descripcion_p, precio_p, id_categoria, imagen) VALUES (?,?,?,?,?)";
            $datos = array($this->nombre, $this->descripcion, $this->precio, $this->id_categoria, $this->img);
            $data = $this->save($sql, $datos);
            if ($data == 1) {
                $res = "ok";
            }else{
                $res = "error";
            }
        }else{
            $res = "existe";
        }
        return $res;
    }
    public function modificarPlatillo(string $nombre, string $descripcion, string $precio, int $id_categoria, string $img, int $id)
    {
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->id_categoria = $id_categoria;
        $this->img = $img;
        $this->id = $id;
        $sql = "UPDATE platillos SET nombre_p = ?, descripcion_p = ?, precio_p = ?, id_categoria = ?, imagen = ? WHERE id_platillos = ?";
        $datos = array($this->nombre, $this->descripcion, $this->precio, $this->id_categoria, $this->img, $this->id);
        $data = $this->save($sql, $datos);
        if ($data == 1) {
            $res = "modificado";
        } else {
            $res = "error";
        }
        return $res;
    }
    public function editarPla(int $id)
    {
        $sql = "SELECT * FROM platillos WHERE id_platillos = $id";
        $data = $this->select($sql);
        return $data;
    }
    public function accionPla(int $estado, int $id)
    {
        $this->id = $id;
        $this->estado = $estado;
        $sql = "UPDATE platillos SET estado = ? WHERE id_platillos = ?";
        $datos = array($this->estado, $this->id);
        $data = $this->save($sql, $datos);
        return $data;
    }
    public function verificarPermiso(int $id_user, string $nombre)
    {
        $sql ="SELECT p.id, p.permiso, d.id, d.id_usuario, d.id_permiso FROM permisos p INNER JOIN detalle_permisos d ON p.id = d.id_permiso WHERE d.id_usuario = $id_user  AND p.permiso = '$nombre'";
        $data = $this->selectAll($sql);
        return $data;
    }
}
?>