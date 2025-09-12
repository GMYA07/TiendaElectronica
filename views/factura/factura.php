<?php
// Require composer autoload
require_once __DIR__ . '../../../vendor/autoload.php';
// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf();
$css = file_get_contents('../../Assets/css/factura/styleFactura.css');
// Write some HTML code:
$mpdf->WriteHTML($css, 1);
$mpdf->WriteHTML('
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotizacion</title>
    <link rel="stylesheet" href="./Assets/css/factura/styleFactura.css">
</head>
<body>
    <div class="contenedorPDF">
        <div class="logoContainer">
            <img class="logo" src="../../Assets/img/logoEmpresaAlterno2.png" alt="">
            <h2>Reporte Usuarios</h2>
        </div>
        <div class="contenidoContainer">
        <table>
    <thead class="theader">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Juan</td>
            <td>Perez</td>
            <td>juan@xd.com</td>
            <td class="activo">Activo</td>
        </tr>
        <tr>
            <td>Maria</td>
            <td>Lopez</td>
            <td>maria@correo.com</td>
            <td class="inactivo">Inactivo</td>
        </tr>
        <tr>
            <td>Carlos</td>
            <td>Ramirez</td>
            <td>carlos@correo.com</td>
            <td class="activo">Activo</td>
        </tr>
        <tr>
            <td>Ana</td>
            <td>Martinez</td>
            <td>ana@correo.com</td>
            <td class="activo">Activo</td>
        </tr>
        <tr>
            <td>Luis</td>
            <td>Gomez</td>
            <td>luis@correo.com</td>
            <td class="inactivo">Inactivo</td>
        </tr>
        <tr>
            <td>Paula</td>
            <td>Fernandez</td>
            <td>paula@correo.com</td>
            <td class="activo">Activo</td>
        </tr>
        <tr>
            <td>Diego</td>
            <td>Hernandez</td>
            <td>diego@correo.com</td>
            <td class="inactivo">Inactivo</td>
        </tr>
        <tr>
            <td>Sofia</td>
            <td>Castro</td>
            <td>sofia@correo.com</td>
            <td class="activo">Activo</td>
        </tr>

    </tbody>
</table>
            <div class="estadistica-contenedor">
                <div class="estadistica">
                    <span class="estadistica-numero">6</span>
                    <span class="estadistica-label">Total usuarios</span>
                </div>
                <div class="estadistica">
                    <span class="estadistica-numero">6</span>
                    <span class="estadistica-label">usuarios activos</span>
                </div>
                <div class="estadistica">
                    <span class="estadistica-numero">6</span>
                    <span class="estadistica-label">usuarios inactivos</span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
');

// Output a PDF file directly to the browser
$mpdf->Output();
?>
