<?php 
    require_once __DIR__ . '../../../vendor/autoload.php';


    $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
    echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode('Yael Adonay', $generator::TYPE_CODE_128)) . '">';
?>