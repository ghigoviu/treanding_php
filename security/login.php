<?php
require_once '../controller/Sesion.php';
$sesion = new Sesion();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// Leer el JSON
$json = file_get_contents('../assets/data/data.json');
$data = json_decode($json, true);

$authenticated = false;

foreach ($data['usuarios'] as $usuario) {
    if ($usuario['email'] === $email && $usuario['password'] === $password) {
        // Guardamos solo el ID y datos relevantes en la sesión (no todo el objeto si no es necesario)
        $sesion->login($usuario['id'], [
            'id' => $usuario['id'],
            'email' => $usuario['email'],
            'nombre' => $usuario['nombre'] ?? '',
            'img_perfil' => $usuario['img_perfil'] ?? '', // Asumiendo que la imagen de perfil es opcional
        ]);
        $sesion->setFlash('success_login', '¡Sesión iniciada correctamente!');
        header('Location: ../pages/marketplace.php');
        exit;
    }
}

// Si llega aquí, no pasó la autenticación
$sesion->setFlash('error_login', 'Usuario o contraseña incorrectos.');
header('Location: ../pages/marketplace.php');
exit;
}
