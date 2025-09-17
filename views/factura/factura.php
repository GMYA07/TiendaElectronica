<?php
// Require composer autoload
require_once __DIR__ . '../../../vendor/autoload.php';
// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf();

$mpdf->WriteHTML('
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotizacion</title>
    <style>
        body{
    margin: 0;
    padding: 0;
    background-color: #f5f5f5;
    box-sizing: border-box;
    font-family: Segoe UI, Tahoma, Geneva, Verdana, sans-serif;
}
.contenedorPDF{
    background-color: white;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin: 0 auto;
    padding-top: 20px;
    width: 100%;
    margin-top: 3%;
}
.logoContainer{
    border-bottom: 3px solid #e0e0e0;
    text-align: center;
}
.logo{
    width: 100px;
    height: 100px;
    margin-top: 20px;
    border-radius: 50%;
}

.contenidoContainer{
    padding: 50px;
}

table{
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    text-align: center;
}
thead{
    background-color: #ecf0f1;
    border-bottom: 2px solid #bdc3c7;
}
th, td{
    border: 1px solid #e0e0e0;
    padding: 15px;
}


.estadistica-contenedor{
    margin-top: 20px;
}

.estadistica{
            display: inline-block;
            width: 32%;
            background-color: white;
            padding: 15px;
            margin-right: 2%;
            margin-bottom: 10px;
            border-radius: 6px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }
        
        .estadistica:last-child {
            margin-right: 0;
        }
        
        .estadistica-numero {
            font-size: 24px;
            font-weight: bold;
            color: #2c3e50;
            display: block;
        }
        
        .estadistica-label {
            font-size: 12px;
            color: #7f8c8d;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-top: 5px;
        }

.activo{
    color: green;
}
.inactivo{
    color: red;
}
    </style>
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
