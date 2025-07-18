<?php
    if (!isset($_GET['ruta'])) {
        include './views/principal/principal.php';
    }elseif (!file_exists($_GET['ruta']. '.php')) {
        include './views/error/error.php';
    }else{
        include $_GET['ruta'].'.php';
    }
?>