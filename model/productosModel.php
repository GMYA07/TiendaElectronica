<?php
class Productos
{
    private $conexion;
    private $tabla = "productos";

    public function __construct($db)
    {
        $this->conexion = $db;
    }

    public function insertarProducto($data){
        $sql = "CALL insertarProducto(:nombre, :descripcion, :id_categoria, :precio, :stock, :id_marca, :modelo, :sku, :imagen_url, :fecha_creacion, :estado)";
        $stmt = $this->conexion->prepare($sql);
        return $stmt->execute($data);
    }
}
