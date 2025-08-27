<?php
class ImageUploader
{

    public static function subirImagen($archivo)
    {
        //ruta en donde guardara la imagen
        $carpeta = $_SERVER['DOCUMENT_ROOT'] . '/TiendaElectronica/Assets/img/productos/';

        // Verifica que el archivo existe y no tiene errores
        if (!isset($archivo) || $archivo['error'] !== UPLOAD_ERR_OK) {
            return "";
        }

        // Validaciones básicas
        $nombre_original = $archivo['name'];
        $extension = strtolower(pathinfo($nombre_original, PATHINFO_EXTENSION));
        $tipos_permitidos = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
        $max_size = 5 * 1024 * 1024; // 5MB

        if (!in_array($extension, $tipos_permitidos) || $archivo['size'] > $max_size) {
            return "";
        }

        // Usar el nombre original
        $nombre_final = $nombre_original;

        // Si ya existe un archivo con ese nombre, agregar número
        $contador = 1;
        while (file_exists($carpeta . $nombre_final)) {
            $nombre_sin_extension = pathinfo($nombre_original, PATHINFO_FILENAME);
            $nombre_final = $nombre_sin_extension . '_' . $contador . '.' . $extension;
            $contador++;
        }

        // Subir archivo
        if (move_uploaded_file($archivo['tmp_name'], $carpeta . $nombre_final)) {
            return $nombre_final;
        }

        return "";
    }
}
