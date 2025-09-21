<?php
// Lista blanca de rutas permitidas
$rutasPermitidas = [
    'inicio' => './views/principal/principal.php',
    'administracion' => './controller/productosController.php',
    'catalogo' => './views/catalogo/celular.php'
];

$ruta = $_GET['ruta'] ?? 'inicio';

if (isset($rutasPermitidas[$ruta])) {

    if($ruta === 'administracion'){
        $_GET['listar'] = 'listar';
        include $rutasPermitidas[$ruta];
    }else{
        include $rutasPermitidas[$ruta];
    }

} else {
    include './views/error/error.php';
}
?>