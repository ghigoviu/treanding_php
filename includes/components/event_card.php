<!-- Evento -->
<?php
include 'egood_cardheader.php';
function mostrarEvento($id)
{
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
            <div class="botones-reaction-card">
                <button class="btn-reaction"><i class="bi bi-heart"></i></button>
                <button class="btn-reaction"><i class="bi bi-bookmark"></i></button>
                <button class="btn-reaction"><i class="bi bi-share"></i></button>
            </div>
        </div>
        <div class="card-body p-2">
            <p class="fw-bold mb-1"><?php echo $evento['nombre']; ?></p>
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="fw-bold text-primary mb-0">
                    $ <?php echo $evento['precio']; ?>
                    <span class="text-muted text-decoration-line-through"> US $1340</span>
                </h5>
                <span class="badge bg-danger align-self-center">-16%</span>
                <button type="button" class="btn btn-sm btn-light btn-active-light-primary">
                    <i class="fa-solid fa-cart-shopping"></i>
                </button>
            </div>
        </div>
    </div>

<?php
}
?>