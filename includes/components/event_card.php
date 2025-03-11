<!-- Evento -->
<?php
include 'egood_cardheader.php';
function mostrarEvento($id){
    $data = json_decode(file_get_contents('../assets/data/data.json'), true);

    $evento = null;
    foreach ($data['eventos'] as $event) {
        if ($event['id'] === $id) {
            $evento = $event;
            break;
        }
    }

    if (!$evento) {
        echo "<h2>Evento no encontrado</h2>";
        return;
    }
?>

<div class="card shadow-sm">
    <?php headerUsuario($evento['usuario_creador']) ?>
    <div class="position-relative">
        <img src="<?php echo htmlspecialchars($evento['img_evento']); ?>" class="card-img-top" alt="Portada" style="height: 205px;">
        <span class="position-absolute top-0 start-0 bg-dark text-white p-1 small">00:00:00</span>
    </div>
    <div class="card-body p-2">
        <p class="fw-bold mb-1"><?php echo $evento['nombre']; ?></p>
        <h5 class="fw-bold text-primary">$ <?php echo $evento['precio']; ?><span class="text-muted text-decoration-line-through"> US $1340</span></h5>
        <div class="d-flex justify-content-between align-items-center">
            <span class="badge bg-danger">-16%</span>
            <button class="btn btn-pink text-white"><i class="bi bi-cart"></i></button>
        </div>
    </div>
</div>

<?php
}
?>