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

    
    <div class="card shadow-sm position-relative">
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

        <div class="card-footer px-3 py-4">
            <div class="d-flex justify-content-center flex-column me-0">
                <a href="./detalle_producto.php" class="fs-6 fw-bold text-gray-900 text-hover-primary">
                    <span><?php echo $evento['nombre']; ?></span>
                </a>
                <div class="d-flex justify-content-between align-items-center">
                    <button class="btn btn-outline btn-xs p-1 px-2" id="btn1" data-value="10">$10</button>
                    <button class="btn btn-outline btn-xs p-1 px-2" id="btn2" data-value="100">$100</button>
                    <button class="btn btn-outline btn-xs p-1 px-2" id="btn3" data-value="1000">$1,000</button>
                    <button type="button" class="btn btn-sm btn-light btn-active-light-primary">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                </div>
            </div>
        </div>  
    </div>
<?php
}
?>