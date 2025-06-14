<!-- Producto -->
<?php
include 'egood_cardheader.php';

function mostrarProducto($id)
{
    $config = require '../config.php';
    $apiBaseUrl = $config['api_base_url'];
    $url = $apiBaseUrl . "/productos/id/" . $id;
    $response = file_get_contents($url);
    if ($response !== false) {
        $producto = json_decode($response, true); 
    } else {
        echo "Error al hacer la petición.";
    }

    if (!$producto) {
        echo "<h2>Producto no encontrado</h2>";
        return;
    }
?>

<div class="card shadow-sm position-relative">
    <?php headerUsuario($producto['usuario_creador']['id']) ?>
    <div class="position-relative">
        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover">
            <img src="<?php echo htmlspecialchars($producto['img_portada']); ?>" class="card-img-top" alt="Producto" style="height: 200px;">
        </div>

        <!-- 🔥 Capa de Censura 🔥 -->
        <?php if ($producto['requiere_edad']) : ?>
            <div class="capa-censura position-absolute top-0 start-0 w-100 h-100 d-flex flex-column align-items-center justify-content-center">
                <p class="text-white text-center fw-bold">Este contenido está destinado únicamente a públicos específicos.<br>Debes tener 21 años de edad o más para ver este contenido.</p>
                <div class="d-flex gap-3">
                    <button class="btn btn-light btn-sm" onclick="ocultarCensura(this, false)">Cancelar</button>
                    <button class="btn btn-primary btn-sm" onclick="ocultarCensura(this, true)">Tengo 21 años o más</button>
                </div>
            </div>
        <?php endif; ?>

        <div class="position-absolute top-0 end-0 bg-dark text-white px-2 py-1 rounded-bottom-start" style="opacity: 0.8;">
            <i class="fa-solid fa-star text-warning"></i>
            <span class="fw-bold">
                <?php echo number_format(4.23, 1); ?>
            </span>
        </div>

        <div class="botones-reaction-card">
            <button class="btn-reaction"><i class="bi bi-heart"></i></button>
            <button class="btn-reaction"><i class="bi bi-bookmark"></i></button>
            <button class="btn-reaction"><i class="bi bi-share"></i></button>
        </div>
    </div>

    <div class="card-footer px-3 py-4">
        <div class="d-flex justify-content-center flex-column me-0">
            <a href="./detalle_producto.php?id=<?php echo $producto['id']; ?>" class="fs-6 fw-bold text-gray-900 text-hover-primary">
                <span><?php echo $producto['nombre']; ?></span>
            </a>
            <div class="d-flex justify-content-between align-items-center ">
                <div class="fs-5 fw-bold text-gray-800 me-3">$ <?php echo $producto['precio']; ?></div>
                <button type="button" class="btn btn-sm btn-light btn-active-light-primary">
                    <i class="fa-solid fa-cart-shopping"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<?php
};
?>