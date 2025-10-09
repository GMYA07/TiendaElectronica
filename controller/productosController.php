<?php
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../model/productosModel.php';
require_once __DIR__ . '/../utils/ImageUploader.php';

// Aquí puedes usar $productosModel para llamar a los métodos del modelo
$db = (new Database())->conectar();
$productosModel = new Productos($db);

$accion = '';

if (isset($_POST['accion']) || isset($_GET['accion'])) {

    if (isset($_GET['accion'])) {
        $accion = $_GET['accion'];
    } else {
        $accion = $_POST['accion'];
    }
} elseif (isset($_GET['listar'])) {
    $accion = 'listar';
}

switch ($accion) {
    case 'agregar':

        $NombreImagen = ImageUploader::subirImagen($_FILES['imagen']);

        if (empty($NombreImagen)) {
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
            header("Location: ../index.php?ruta=administracion&msg=agregado");
        } else {
            header("Location: ../index.php?ruta=administracion&msg=error");
        }
        exit();
        break;
    case 'listar':
        $productos = $productosModel->obtenerProductos();
        include __DIR__ . '/../views/administracion/administracion.php';
        break;
    case 'editar':

        $NombreImagen = ImageUploader::subirImagen($_FILES['imagen']);

        if (empty($NombreImagen)) {
            $NombreImagen = $_POST['imagenNueva'];
        }


        $informacion = [
            'id_producto' => $_POST['id_producto'],
            'nombre' => $_POST['nombre'],
            'descripcion' => $_POST['descripcion'],
            'id_categoria' => $_POST['id_categoria'],
            'precio' => $_POST['precio'],
            'stock' => $_POST['stock'],
            'id_marca' => $_POST['id_marca'],
            'modelo' => $_POST['modelo'],
            'sku' => $_POST['sku'],
            'imagen_url' => $NombreImagen,
            'fecha_creacion' => $_POST['fecha_creacion'],
            'estado' => $_POST['estado']
        ];

        if ($productosModel->actualizarProducto($informacion)) {
            header("Location: ../index.php?ruta=administracion&msg=actualizado");
        } else {
            header("Location: ../index.php?ruta=administracion&msg=error");
        }
        exit();
        break;

    case 'eliminar':
        $id = $_GET['id'];

        $resultado = $productosModel->eliminarProducto($id);

        if ($resultado) {
            header("Location: ../index.php?ruta=administracion&msg=eliminado");
        } else {
            header("Location: ../index.php?ruta=administracion&msg=error");
        }
        exit();
        break;

    default:
        echo "<script>alert('Ocurrió un error');</script>";
        break;
}
