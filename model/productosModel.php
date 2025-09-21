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

    public function actualizarProducto($data){
        $sql = "CALL actualizarProducto(:id_producto,:nombre, :descripcion, :id_categoria, :precio, :stock, :id_marca, :modelo, :sku, :imagen_url, :fecha_creacion, :estado)";
        $stmt = $this->conexion->prepare($sql);
        return $stmt->execute($data);
    }

    public function eliminarProducto($id){
        $sql = "DELETE FROM " . $this->tabla . " WHERE id_producto = :id_producto";
        $stmt = $this->conexion->prepare($sql);
        return $stmt->execute(['id_producto' => $id]);
    }

    public function obtenerProductos(){
        $sql = "SELECT * FROM " . $this->tabla;
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
