<!-- Charity -->
<?php
include 'egood_cardheader.php';
function mostrarCharity($id)
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

    <div class="card shadow-sm mx-2">
        <?php headerUsuario(10) ?>
        <div class="position-relative charity-info">
            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover">
                <img src="<?php echo htmlspecialchars($evento['img_evento']); ?>" class="card-img-top" alt="Portada" style="height: 200px;">
            </div>
            <span class="position-absolute top-0 start-0 bg-dark text-white p-1 small">00:00:00</span>
            <div class="botones-reaction-card">
                <button class="btn-reaction"><i class="bi bi-heart"></i></button>
                <button class="btn-reaction"><i class="bi bi-bookmark"></i></button>
                <button class="btn-reaction"><i class="bi bi-share"></i></button>
            </div>
        </div>

        <div class="card-body p-2">
            <p class="fw-bold mb-1"><?php echo $evento['nombre']; ?></p>
            <div class="d-flex gap-2 mb-2 botones-container">
                <button class="btn btn-outline btn-sm" id="btn1" data-value="10">$10</button>
                <button class="btn btn-outline btn-sm" id="btn2" data-value="100">$100</button>
                <button class="btn btn-outline btn-sm" id="btn3" data-value="1000">$1,000</button>
                <button class="btn text-white btn-sm btn-cart"><i class="bi bi-cart"></i></button>
            </div>
        </div>

    </div>
<?php
}
?>