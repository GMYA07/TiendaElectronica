<?php
class Productos
{
    private $coon;
    private $tabla = "productos";

    public function __construct($db)
    {
        $this->conn = $db;
    }
}
