<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Verifica tu correo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex align-items-center justify-content-center" style="height: 100vh; background: #f5f8fa;">
    <div class="text-center bg-white p-5 rounded shadow" style="max-width: 400px;">
        <img src="https://cdn-icons-png.flaticon.com/512/561/561127.png" width="100" class="mb-4" alt="Verificar Email">
        <h2 class="mb-3">Verifica tu email</h2>
        <p class="mb-4">¿No recibiste un correo? <a href="#">Intenta de nuevo</a></p>
        <button id="skip-btn" class="btn btn-primary">Omitir por ahora</button>
    </div>

    <script>
        document.getElementById('skip-btn').addEventListener('click', function() {
            window.location.href = '../pages/marketplace.php'; // o donde quieres redirigirlo
        });
    </script>
</body>
</html>
