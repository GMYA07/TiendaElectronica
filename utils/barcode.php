<?php
require_once __DIR__ . '../../vendor/autoload.php';


function generateBarcode($code) {
    $barcode = (new Picqer\Barcode\Types\TypeCode128())->getBarcode($code);
    $renderer = new Picqer\Barcode\Renderers\HtmlRenderer();
    return $renderer->render($barcode);
}


header('Content-Type: application/json');
// Recibir datos
$accion = $_POST['accion'] ?? '';

if ($accion === 'crearCodigoBarras') {
    $id = $_POST['id'];
    
    // Generar el HTML del código de barras
    $barcodeHTML = generateBarcode($id);
    
    // Devolver JSON con el HTML del barcode
    echo json_encode([
        'codigoBarras' => $barcodeHTML  // ← AQUÍ VA EL HTML
    ]);
}

?>
