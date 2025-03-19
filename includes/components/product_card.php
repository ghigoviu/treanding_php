<!-- Producto -->
<?php
include 'egood_cardheader.php';
function mostrarProducto($id)
{
    $data = json_decode(file_get_contents('../assets/data/data.json'), true);

    $producto = null;
    foreach ($data['productos'] as $product) {
        if ($product['id'] === $id) {
            $producto = $product;
            break;
        }
    }

    if (!$producto) {
        echo "<h2>Producto no encontrado</h2>";
        return;
    }
?>

    <div class="card shadow-sm">
        <?php headerUsuario($producto['vendedor']) ?>
        <div class="position-relative">
            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover">
                <img src="../assets/media/<?php echo htmlspecialchars($producto['img_portada']); ?>" class="card-img-top" alt="Producto" style="height: 200px;">
            </div>
            <div class="botones-reaction-card">
                <button class="btn-reaction"><i class="bi bi-heart"></i></button>
                <button class="btn-reaction"><i class="bi bi-bookmark"></i></button>
                <button class="btn-reaction"><i class="bi bi-share"></i></button>
            </div>
        </div>
        <div class="card-footer px-3 py-4">
            <div class="d-flex justify-content-center flex-column me-0">
                <a href="./detalle_producto.php" class="fs-6 fw-bold text-gray-900 text-hover-primary">
                    <span><?php echo $producto['nombre']; ?></span>
                </a>
                <div class="d-flex justify-content-between align-items-center ">
                    <div class="fs-5 fw-bold text-gray-800 me-3">$ <?php echo $producto['precio']; ?></div>
                    <button type="button" class="btn btn-sm  btn-light btn-active-light-primary">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

<?php
};
?>