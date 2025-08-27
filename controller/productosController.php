<?php
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../model/productosModel.php';
require_once __DIR__ . '/../utils/ImageUploader.php';


// Aquí puedes usar $productosModel para llamar a los métodos del modelo
$db = (new Database())->conectar();
$productosModel = new Productos($db);

$accion = $_POST['accion'] ?? '';



switch($accion){
    case 'agregar':

        $NombreImagen = ImageUploader::subirImagen($_FILES['imagen']);

        if(empty($NombreImagen)){
            echo "<script>alert('Error al subir la imagen');</script>";
            exit;
        }

        $informacion = [
            'nombre' => $_POST['nombre'],
            'descripcion' => $_POST['descripcion'],
            'id_categoria' => $_POST['id_categoria'],
            'precio' => $_POST['precio'],
            'stock' => $_POST['stock'],
            'id_marca' => $_POST['id_marca'],
            'modelo' => $_POST['modelo'],
            'sku' => $_POST['sku'],
            'imagen_url' => $NombreImagen,
            'fecha_creacion' => date('Y-m-d'),
            'estado' => $_POST['estado']
        ];

        if ($productosModel->insertarProducto($informacion)) {
            echo "<script>alert('Producto agregado');</script>";
        } else {
            echo "<script>alert('Error al agregar el producto');</script>";
        }

        break;
    default:
        echo "<script>alert('Ocurrió un error');</script>";
        break;
}


?>