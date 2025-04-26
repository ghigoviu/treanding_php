<?php
// Configurar el archivo JSON donde se guardarán los usuarios
$dataFile = '../assets/data/data.json';

// Verificar si los datos fueron enviados por POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos del formulario
    $nombre = $_POST['full-name'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Validar que los campos no estén vacíos
    if (empty($nombre) || empty($email) || empty($password)) {
        echo json_encode(['status' => 'error', 'message' => 'Todos los campos son obligatorios']);
        exit;
    }

    // Cargar los usuarios existentes desde el archivo JSON
    if (file_exists($dataFile)) {
        $data = json_decode(file_get_contents($dataFile), true);
    } else {
        $data = ['usuarios' => []];
    }

    // Generar un ID único para el nuevo usuario (basado en el último ID)
    $newId = count($data['usuarios']) + 1;

    // Cifrar la contraseña antes de guardarla
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Crear el nuevo usuario
    $newUser = [
        'id' => $newId,
        'nombre' => $nombre,
        'email' => $email,
        'password' => $password,//$hashedPassword,
        'membresía' => 'básica', // Valor por defecto
        'img_perfil' => 'default.jpg' // Imagen de perfil por defecto
    ];

    // Agregar el nuevo usuario a la lista
    $data['usuarios'][] = $newUser;

    // Guardar los datos actualizados de vuelta al archivo JSON
    if (file_put_contents($dataFile, json_encode($data, JSON_PRETTY_PRINT))) {
        // ✅ Registro exitoso: ahora mandamos al verify_email.php
        echo json_encode([
            'status' => 'success',
            'message' => 'Usuario registrado con éxito',
            'redirect' => '../pages/verify_email.php'
        ]);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Hubo un problema al guardar los datos']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Método no permitido']);
}
?>
