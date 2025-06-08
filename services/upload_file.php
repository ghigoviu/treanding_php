<?php
$config = require '../config.php';
$upload_url = $config['upload_url'];
$uploadBaseDir = $upload_url . '/media/Users/';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file']) && isset($_POST['tipo']) && isset($_POST['id_usuario'])) {
    $file = $_FILES['file'];
    $tipo = $_POST['tipo']; // 'perfil' o 'portada'
    $id = intval($_POST['id_usuario']);

    if (!is_dir($uploadBaseDir)) {
    http_response_code(500);
    echo json_encode(['status' => 'error', 'message' => 'El directorio de destino no existe '. $uploadBaseDir]);
    exit;
    }
    if (!is_writable($uploadBaseDir)) {
        http_response_code(500);
        echo $uploadBaseDir;
        echo json_encode(['status' => 'error', 'message' => 'No hay permisos de escritura en el directorio']);
        exit;
    }
    if (!in_array($tipo, ['perfil', 'portada'])) {
        http_response_code(400);
        echo json_encode(['status' => 'error', 'message' => 'Tipo no válido']);
        exit;
    }
    $allowedExts = ['jpg', 'jpeg', 'png'];
    $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    if (!in_array($ext, $allowedExts)) {
        http_response_code(400);
        echo json_encode(['status' => 'error', 'message' => 'Formato de archivo no permitido']);
        exit;
    }

    $fileName = "{$tipo}_{$id}.{$ext}";
    $destination = $uploadBaseDir . $fileName;

    if (move_uploaded_file($file['tmp_name'], $destination)) {
        $publicPath = "/treanding/media/Users/" . $fileName;
        echo json_encode([
            'status' => 'success',
            'message' => 'Archivo subido exitosamente',
            'path' => $publicPath
        ]);
    } else {
        http_response_code(500);
        echo json_encode(['status' => 'error', 'message' => 'Error al guardar el archivo']);
    }
} else {
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Petición inválida']);
}
