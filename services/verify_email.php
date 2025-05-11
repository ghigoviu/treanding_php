
<div class="text-center bg-white p-5 rounded shadow" style="max-width: 400px;">
    <img src="https://cdn-icons-png.flaticon.com/512/561/561127.png" width="100" class="mb-4" alt="Verificar Email">
    <h2 class="mb-3">Verifica tu email</h2>
    <!-- <p class="mb-4">¿No recibiste un correo? <a href="#">Intenta de nuevo</a></p> -->
    <button id="skip-btn" class="btn btn-primary">Omitir por ahora</button>
</div>

<script>
    document.getElementById('skip-btn').addEventListener('click', function() {
        window.location.href = '../pages/marketplace.php'; // o donde quieres redirigirlo
    });
</script>

