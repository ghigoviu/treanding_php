<?php
require_once '../controller/Sesion.php';

$config = require '../config.php';
$apiBaseUrl = $config['api_base_url'];
$sesion = new Sesion();

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if ($email && $password) {

    $postData = json_encode([
        'email' => $email,
        'password' => $password
    ]);

    $ch = curl_init($apiBaseUrl . '/usuarios/login');

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Content-Length: ' . strlen($postData)
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        $sesion->setFlash('error_login', 'Error de conexión con el servidor. Intenta más tarde.');
        header('Location: ../pages/marketplace.php');
        exit;
    }

    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($httpCode === 200 && $response) {
        $userData = json_decode($response, true);

        if ($userData && isset($userData['id'])) {
            $sesion->login($userData['id'], [
                'id' => $userData['id'],
                'email' => $userData['email'],
                'bio' => $userData['bio'],
                'nombre' => $userData['nombre'] ?? '',
                'imagen_perfil' => $userData['imagen_perfil'] ?? '',
                'imagen_portada' => $userData['imagen_portada'] ?? '',
                'birthdate' => $userData['birthdate'] ?? '',
                'phone' => $userData['phone'] ?? '',
                'amistades_enviadas' => $userData['amistades_enviadas'] ?? [],
                'amistades_recibidas' => $userData['amistades_recibidas'] ?? [],
                'productos' => $userData['productos'] ?? [],
                'compartidos' => $userData['compartidos'] ?? []
            ]);

            $sesion->setFlash('success_login', '¡Sesión iniciada correctamente!');
            header('Location: ../pages/marketplace.php');
            exit;
        } else {
            $sesion->setFlash('error_login', 'Datos incorrectos. Verifica tu correo y contraseña.');
            header('Location: ../pages/marketplace.php');
            exit;
        }
    } else {
        $sesion->setFlash('error_login', 'Email o contraseña inválidos.');
        header('Location: ../pages/marketplace.php');
        exit;
    }

} else {
    $sesion->setFlash('error_login', 'Por favor completa todos los campos.');
    header('Location: ../pages/marketplace.php');
    exit;
}
