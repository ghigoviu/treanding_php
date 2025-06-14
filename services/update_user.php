<?php
require_once '../controller/Sesion.php';
require_once 'upload_helper.php';

$config = require '../config.php';
$apiBaseUrl = $config['api_base_url'];
$uploadBaseDir = $config['upload_url'] . '/media/Users/';
$baseUrl = $config['public_url'] . '/media/Users/'; // Para la URL pública
$sesion = new Sesion();

// Verificar que la petición sea POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Método no permitido']);
    exit;
}

// Validar que los campos requeridos existen
$required = ['id', 'nombre', 'email', 'bio', 'phone', 'birthdate'];
foreach ($required as $field) {
    if (empty($_POST[$field])) {
        http_response_code(400);
        echo json_encode(['error' => "Falta el campo: $field"]);
        exit;
    }
}

$id_usuario = intval($_POST['id']);
$img_perfil_url = null;
$img_portada_url = null;

// Validar archivos subidos
if (isset($_FILES['img_perfil']) && $_FILES['img_perfil']['error'] === UPLOAD_ERR_OK) {
    $resultadoPerfil = subirArchivo($_FILES['img_perfil'], 'perfil', $id_usuario, $uploadBaseDir, $baseUrl);
    if ($resultadoPerfil['status'] === 'success') {
        $img_perfil_url = $resultadoPerfil['path'];
    }
} else {
    // Si no se subió una imagen de perfil, usar la imagen actual del usuario
    $img_perfil_url = $sesion->getUserData()['imagen_perfil'] ?? null;
}

if (isset($_FILES['img_portada']) && $_FILES['img_portada']['error'] === UPLOAD_ERR_OK) {
    $resultadoPortada = subirArchivo($_FILES['img_portada'], 'portada', $id_usuario, $uploadBaseDir, $baseUrl);
    if ($resultadoPortada['status'] === 'success') {
        $img_portada_url = $resultadoPortada['path'];
    }
} else {
    // Si no se subió una imagen de portada, usar la imagen actual del usuario
    $img_portada_url = $sesion->getUserData()['imagen_portada'] ?? null;
}

// URL de la API a la que se enviará la petición PUT
$apiUrl = $apiBaseUrl . '/usuarios/' . $_POST['id'];

// Preparar el body para la petición PUT
$body = [
    'nombre'         => $_POST['nombre'],
    'email'          => $_POST['email'],    
    'bio'            => $_POST['bio'],
    'imagen_perfil'  => $img_perfil_url,
    'imagen_portada' => $img_portada_url,
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


echo "<pre>";
print_r($_FILES);
print_r($body);
echo "</pre>";


curl_close($ch);
session_reset();
if ($httpCode == 200) {
    $updatedUser = json_decode($response, true);
    if ($updatedUser && is_array($updatedUser)) {
        $_SESSION['user_data'] = $updatedUser;
    }
    header('Location: ../pages/profile_me.php');
    exit;
}
