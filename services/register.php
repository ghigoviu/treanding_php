<?php
$config = require '../config.php';
$apiBaseUrl = $config['api_base_url'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if (empty($nombre) || empty($email) || empty($password)) {
        echo json_encode(['status' => 'error', 'message' => 'Todos los campos son obligatorios']);
        exit;
    }

    $postData = [
        'nombre' => $nombre,
        'email' => $email,
        'password' => $password,
        'imagen_perfil' => 'https://cdn.pixabay.com/photo/2017/11/10/04/47/user-2935373_960_720.png'
    ];

    $ch = curl_init($apiBaseUrl . '/usuarios/');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    if (curl_errno($ch)) {
        echo json_encode(['status' => 'error', 'message' => 'Error en la solicitud: ' . curl_error($ch)]);
        curl_close($ch);
        exit;
    }

    curl_close($ch);

    if ($httpCode == 201) {
        echo json_encode([
            'status' => 'success',
            'message' => 'Usuario registrado con éxito',
            'redirect' => '../services/verify_email.php',
            'response' => json_decode($response, true)
        ]);
    } else {
        echo json_encode([
            'status' => 'error',
            'message' => 'Error al registrar usuario: ' . $response
        ]);
    }   
} else {
    echo json_encode(['status' => 'error', 'message' => 'Método no permitido']);
}
