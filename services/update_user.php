<?php
require_once '../controller/Sesion.php';

$config = require '../config.php';
$apiBaseUrl = $config['api_base_url'];
$sesion = new Sesion();

// Verificar que la petición sea POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Método no permitido']);
    exit;
}

// Validar que los campos requeridos existen
$required = ['nombre', 'email', 'bio', 'phone', 'birthdate'];
foreach ($required as $field) {
    if (empty($_POST[$field])) {
        http_response_code(400);
        echo json_encode(['error' => "Falta el campo: $field"]);
        exit;
    }>
}
// URL de la API a la que se enviará la petición PUT
$apiUrl = $apiBaseUrl . '/usuarios/' . $_POST['id'];

// Preparar el body para la petición PUT
$body = [
    'nombre'         => $_POST['nombre'],
    'email'          => $_POST['email'],
    'bio'            => $_POST['bio'],
    'img_perfil'     => $_POST['img_perfil'],
    'img_portada'    => $_POST['img_portada'],
    'phone'          => $_POST['phone'],
    'birthdate'      => $_POST['birthdate'],
];

// Inicializar cURL
$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Accept: application/json'
]);

// Ejecutar la petición
$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if (curl_errno($ch)) {
    http_response_code(500);
    echo json_encode(['error' => curl_error($ch)]);
} else {
    http_response_code($httpCode);
    echo $response;
}

curl_close($ch);
session_start();
if ($httpCode == 200) {
    $updatedUser = json_decode($response, true);
    if ($updatedUser && is_array($updatedUser)) {
        $_SESSION['user_data'] = $updatedUser;
    }
    header('Location: ../pages/profile.php');
    exit;
}
