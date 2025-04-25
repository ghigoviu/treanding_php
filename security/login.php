<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Leer el JSON
    $json = file_get_contents('../assets/data/data.json');
    $data = json_decode($json, true);

    foreach ($data['usuarios'] as $usuario) {
        if ($usuario['email'] === $email && $usuario['password'] === $password) {
            $_SESSION['usuario'] = $usuario;
            $_SESSION['success_login'] = '¡Sesión iniciada correctamente!';
            header('Location: ../pages/marketplace.php');
            exit;
        }
    }

    // Si no coincide
    $_SESSION['error_login'] = 'Correo o contraseña incorrectos.';
    header('Location: ../pages/index.php');
    exit;
}
