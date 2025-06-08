<?php
function subirArchivo($file, $tipo, $id_usuario, $uploadBaseDir, $baseUrl) {
    $allowedExts = ['jpg', 'jpeg', 'png'];
    $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

    if (!in_array($ext, $allowedExts)) {
        return ['status' => 'error', 'message' => 'Extensión no permitida'];
    }

    $fileName = "{$tipo}_{$id_usuario}.{$ext}";
    $destination = $uploadBaseDir . $fileName;

    if (!is_dir($uploadBaseDir)) {
        mkdir($uploadBaseDir, 0777, true);
    }

    if (move_uploaded_file($file['tmp_name'], $destination)) {
        $publicPath = $baseUrl . $fileName;
        return ['status' => 'success', 'path' => $publicPath];
    } else {
        return ['status' => 'error', 'message' => 'Error al mover el archivo'];
    }
}
